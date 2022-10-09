<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModelMin;

class Categoryx extends HiveModelMin
{
  public function getTable()
  {
    return config('hive-posts.tables_names.categoriesx');
  }
}
