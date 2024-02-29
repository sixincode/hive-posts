<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\SortOrderTrait;
use Sixincode\HiveHelpers\Traits\HasSlugTrait;
use Sixincode\HivePosts\Traits\HasTags;

class Category extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use SortOrderTrait;
  use HasSlugTrait;
  use HasTags;

  public function __construct()
  {
    parent::__construct();
    $this->translatable[] = 'name';
    $this->translatable[] = 'slogan';
    $this->translatable[] = 'description';

    $this->casts['name'] = 'array';
    $this->casts['slogan'] = 'array';
    $this->casts['description'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'name';
    $this->filterable[] = 'type';

    $this->orderable[] = 'id';
    $this->orderable[] = 'name';
    $this->orderable[] = 'type';

    $this->fillable[] = 'name';
    $this->fillable[] = 'slogan';
    $this->fillable[] = 'description';
    $this->fillable[] = 'type';

    $this->appends[] = 'color';

  }

  public function getColorAttribute()
  {
    return $this->properties->color;
  }

  public function setColorAttribute()
  {
    dd('rrrr');
    $this->properties->color = '00898';
    return $this->save();
  }

  public function posts()
   {
   return $this->morphedByMany(
                     \Sixincode\HivePosts\Models\Post::class,
                     config('hive-posts.column_names.category_identifier'),
                     config('hive-posts.table_names.categoriesx')
                    )->withPivot(
                        config('hive-helpers.column_names.properties_schema')
                    );
   }
  protected $appends = [];
  protected $orderable = [];
  protected $filterable = [];
  protected $fillable = [];
  protected $translatable = [];

  public function getTable()
  {
    return config('hive-posts.table_names.categories');
  }

  public function getDetailsArray()
  {
    return [
      "headline"     => $this->name,
      "body"         => $this->description,
      "routes"       => self::getRoutingArray(),
      "icon"         => "categories",
      "created_at"   => $this->created_at->diffForHumans(),
      "modified_at"  => $this->modified_at,
    ];
  }

  public function getRoutingArray()
  {
    return [
      "index"   => route("user.categories.index"),
      "create"  => route("user.categories.create"),
    ];
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
