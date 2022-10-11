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

  public function bootCategory()
  {
    $this->translatable[] = 'name';
    $this->translatable[] = 'slug';
    $this->translatable[] = 'slogan';
    $this->translatable[] = 'description';

    $this->casts['name'] = 'array';
    $this->casts['slug'] = 'array';
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
  protected $appends = [
      // 'picture',
  ];

  protected $orderable = [
      // 'picture',
  ];

  protected $filterable = [
      // 'picture',
  ];

  protected $fillable = [
      // 'slug',
  ];

  protected $translatable = [
      'name',
      'slogan',
      'slug',
      'description'
  ];

  public static function getTableAttribute()
  {
    return config('hive-posts.tables_names.categories');
  }

  public static function slugOriginElement()
  {
    return 'name';
  }


}
