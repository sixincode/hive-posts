<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use ArrayAccess;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as DbCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Sixincode\HiveHelpers\Traits\HasSlugJsonTrait;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Illuminate\Support\Str;

class Tag extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use HasSlugJsonTrait;

  public function __construct()
  {
    parent::__construct();
    $this->translatable[] = 'name';
    $this->translatable[] = 'slug';

    $this->casts['name'] = 'array';
    $this->casts['slug'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'name';
    $this->filterable[] = 'type';

    $this->orderable[] = 'id';
    $this->orderable[] = 'name';
    $this->orderable[] = 'type';

    $this->fillable[] = 'name';
    $this->fillable[] = 'description';
    $this->appends[] = 'short_name';
  }
  protected $appends = [];
  protected $orderable = [];
  protected $filterable = [];
  protected $fillable = [];
  protected $translatable = [];

  public static function getTableAttribute()
  {
    return config('hive-posts.table_names.tags');
  }

  public function getShortNameAttribute()
  {
    return Str::limit($this->name,10,'...') ;
  }

  public function scopeWithType(Builder $query, string $type = null): Builder
  {
      if (is_null($type)) {
          return $query;
      }

      return $query->where('type', $type)->ordered();
  }

  public function scopeContaining(Builder $query, string $name, $locale = null): Builder
  {
      $locale = $locale ?? static::getLocale();

      return $query->whereRaw('lower(' . $this->getQuery()->getGrammar()->wrap('name->' . $locale) . ') like ?', ['%' . mb_strtolower($name) . '%']);
  }

  public static function findOrCreate(
      string | array | ArrayAccess $values,
      string | null $type = null,
      string | null $locale = null,
  ): Collection | Tag | static {
      $tags = collect($values)->map(function ($value) use ($type, $locale) {
          if ($value instanceof self) {
              return $value;
          }

          return static::findOrCreateFromString($value, $type, $locale);
      });

      return is_string($values) ? $tags->first() : $tags;
  }

  public static function getWithType(string $type): DbCollection
  {
      return static::withType($type)->get();
  }

  public static function findFromString(string $name, string $type = null, string $locale = null)
  {
      $locale = $locale ?? static::getLocale();

      return static::query()
          ->where("name->{$locale}", $name)
          ->where('type', $type)
          ->first();
  }

  public static function findFromStringOfAnyType(string $name, string $locale = null)
  {
      $locale = $locale ?? static::getLocale();

      return static::query()
          ->where("name->{$locale}", $name)
          ->get();
  }

  protected static function findOrCreateFromString(string $name, string $type = null, string $locale = null)
  {
      $locale = $locale ?? static::getLocale();

      $tag = static::findFromString($name, $type, $locale);

      if (! $tag) {
          $tag = static::create([
              'name' => [$locale => $name],
              'type' => $type,
          ]);
      }

      return $tag;
  }

  public static function getTypes(): Collection
  {
      return static::groupBy('type')->pluck('type');
  }

  public function setAttribute($key, $value)
  {
      if (in_array($key, $this->translatable) && ! is_array($value)) {
          return $this->setTranslation($key, static::getLocale(), $value);
      }

      return parent::setAttribute($key, $value);
  }

  public static function slugOriginElement()
  {
    return 'name';
  }

  public function getRouteKeyName()
  {
      return 'slug';
  }
}
