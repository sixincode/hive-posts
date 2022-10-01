<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;

class Category extends HiveModel
{
  $this->translatable[] = 'title';
  $this->translatable[] = 'description';

  $this->casts['title'] = 'array';
  $this->casts['description'] = 'array';
  $this->casts['is_private'] = > 'boolean';
  $this->casts['is_featured'] = 'boolean';

  public $filterable = [
    'id',
    'title',
    'type',
    'slug',
    'description',
    'properties',
  ];

  public $orderable = [
    'id',
    'title',
    'slug',
    'description',
    'type',
    'properties',
  ];

  public $fillable = [
    'title' ,
    'description',
    'type',
    'is_private',
    'is_featured',
  ];

  public function getTable()
  {
    return config('hive-posts.tables_names.categories');
  }

  public function slugOriginElement()
  {
    return 'title';
  }


}
