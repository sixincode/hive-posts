<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;

class Category extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use sortOrderTrait;

  $this->translatable[] = 'title';
  $this->translatable[] = 'description';

  $this->casts['title'] = 'array';
  $this->casts['description'] = 'array';

  $this->filterable[] = 'id';
  $this->filterable[] = 'title';
  $this->filterable[] = 'type';
  $this->filterable[] = 'description';

  $this->orderable[] = 'id';
  $this->orderable[] = 'title';
  $this->orderable[] = 'slug';
  $this->orderable[] = 'description';
  $this->orderable[] = 'type';

  $this->fillable[] = 'title';
  $this->fillable[] = 'description';
  $this->fillable[] = 'type';

  protected $appends = [
      // 'picture',
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
