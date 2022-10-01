<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use ArrayAccess;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as DbCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Tag extends HiveModel
{
  $this->translatable[] = 'name';
  $this->translatable[] = 'slug';

  $this->casts = ['name'] = 'array';
  $this->casts = ['is_private'] = > 'boolean';
  $this->casts = ['is_featured'] = 'boolean';

  public $filterable = [
    'id',
    'name' ,
    'slug',
    'type',
    'properties',
  ];

  public $orderable = [
    'id',
    'name' ,
    'slug',
    'type',
    'properties',
  ];

  public $fillable = [
    'name' ,
    'type',
    'is_private',
    'is_featured',
  ];

  public function getTable()
  {
    return config('hive-posts.tables_names.tags');
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

  public function slugOriginElement()
  {
    return 'name';
  }
}
