<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HivePosts\Traits\HasCategories;
use Sixincode\HivePosts\Traits\HasTags;

class Post extends HiveModel
{
  use HasCategories;
  use HasTags;

  $this->translatable[] = 'title';
  $this->translatable[] = 'content';

  $this->casts['title'] = 'array';
  $this->casts['content'] = 'array';
  $this->casts['is_private'] = 'boolean';
  $this->casts['is_featured'] = 'boolean';

  public $filterable = [
    'id',
    'title',
    'slug',
    'views',
    'url',
    'is_private',
    'is_featured',
    'sort_order',
    'user_global',
    'properties',
  ];

  public $orderable = [
    'id',
    'title',
    'slug',
    'views',
    'url',
    'sort_order',
    'user_global',
    'properties',
  ];

  protected $appends = [
      // 'picture',
  ];

   protected $fillable = [
     'title',
     'content',
     'url',
     'is_private',
     'is_featured',
     'sort_order',
  ];

  public function getTable()
  {
    return config('hive-posts.tables_names.posts');
  }

  public function slugOriginElement()
  {
    return 'title';
  }
}
