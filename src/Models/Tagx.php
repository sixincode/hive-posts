<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModelMin;

class Tagx extends HiveModelMin
{
  public function getTable()
  {
    return config('hive-posts.table_names.tagsx');
  }
}
