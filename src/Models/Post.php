<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\SortOrderTrait;
use Sixincode\HiveHelpers\Traits\HasSlugTrait;
use Sixincode\HiveHelpers\Traits\HasOwnerTrait;
use Sixincode\HivePosts\Traits\HasCategories;
use Sixincode\HivePosts\Traits\HasTags;
use Illuminate\Support\Str;

class Post extends HiveModel
{
  use HasOwnerTrait;
  use IsActiveTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use SortOrderTrait;
  use HasSlugTrait;
  use HasCategories;
  use HasTags;

  protected $with = ['categories', 'tags'];

  public function __construct()
  {
    parent::__construct();
    $this->translatable[] = 'name';
    $this->translatable[] = 'description';
    $this->translatable[] = 'content';

    $this->casts['name'] = 'array';
    $this->casts['description'] = 'array';
    $this->casts['content'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'name';
    $this->filterable[] = 'views';
    $this->filterable[] = 'url';

    $this->orderable[] = 'id';
    $this->orderable[] = 'name';
    $this->orderable[] = 'views';

    $this->fillable[] = 'name';
    $this->fillable[] = 'description';
    $this->fillable[] = 'reference';
    $this->fillable[] = 'content';
    $this->fillable[] = 'views';
    $this->fillable[] = 'url';
    $this->fillable[] = 'global';
    $this->fillable[] = 'user_global';
    $this->fillable[] = 'sort_order';

    $this->appends[] = 'short_name';
  }

  public $translatable = [];
  public $filterable = [];
  public $orderable = [];

  public function getTable()
  {
    return config('hive-posts.table_names.posts');
  }

  public function getShortNameAttribute()
  {
    return Str::limit($this->name,16,'...') ;
  }

  public function getDetailsArray()
  {
    return [
      "headline"     => $this->name,
      "description"  => $this->description,
      "body"         => $this->content,
      "routes"       => self::getRoutingArray(),
      "icon"         => "posts",
      "url"          => $this->url,
      "views"        => $this->views,
      "created_at"   => $this->created_at->diffForHumans(),
      "modified_at"  => $this->modified_at,
    ];
  }

  public function getRoutingArray()
  {
    return [
      "index"   => route("user.posts.index"),
      "create"  => route("user.posts.create"),
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
