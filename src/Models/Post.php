<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;
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
  use sortOrderTrait;
  use HasSlugTrait;
  use HasCategories;
  use HasTags;

  protected $with = ['categories', 'tags'];

  public function __construct()
  {
    parent::__construct();
    $this->translatable[] = 'title';
    $this->translatable[] = 'content';

    $this->casts['title'] = 'array';
    $this->casts['content'] = 'array';

    $this->filterable[] = 'id';
    $this->filterable[] = 'title';
    $this->filterable[] = 'views';
    $this->filterable[] = 'url';

    $this->orderable[] = 'id';
    $this->orderable[] = 'title';
    $this->orderable[] = 'views';

    $this->fillable[] = 'title';
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

  public static function getTableAttribute()
  {
    return config('hive-posts.tables_names.posts');
  }

  public function getShortNameAttribute()
  {
    return Str::limit($this->title,16,'...') ;
  }

  public function getDetailsArray()
  {
    return [
      "headline"     => $this->title,
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
    return 'title';
  }

  public function getRouteKeyName()
  {
      return 'slug';
  }

}
