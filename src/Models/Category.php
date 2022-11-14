<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;
use Sixincode\HiveHelpers\Traits\HasSlugJsonTrait;

class Category extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use sortOrderTrait;
  use HasSlugJsonTrait;

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
  }
  protected $appends = [];
  protected $orderable = [];
  protected $filterable = [];
  protected $fillable = [];
  protected $translatable = [];

  public static function getTableAttribute()
  {
    return config('hive-posts.tables_names.categories');
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
      "index"   => route("categories.index"),
      "create"  => route("categories.create"),
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
