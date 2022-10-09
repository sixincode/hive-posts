<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModel;
use Sixincode\HiveHelpers\Traits\IsActiveTrait;
use Sixincode\HiveHelpers\Traits\IsDefaultTrait;
use Sixincode\HiveHelpers\Traits\IsFeaturedTrait;
use Sixincode\HiveHelpers\Traits\IsPrivateTrait;
use Sixincode\HiveHelpers\Traits\sortOrderTrait;
use Sixincode\HivePosts\Traits\HasCategories;
use Sixincode\HivePosts\Traits\HasTags;

class Post extends HiveModel
{
  use IsActiveTrait;
  use IsDefaultTrait;
  use IsFeaturedTrait;
  use IsPrivateTrait;
  use sortOrderTrait;
  use HasCategories;
  use HasTags;

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

  protected $appends = [
      // 'picture',
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
