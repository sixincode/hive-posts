<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModelx;

class Categoryx extends HiveModelx
{
  public function getTable()
  {
    return config('hive-posts.tables_names.categoriesx');
  }
}
