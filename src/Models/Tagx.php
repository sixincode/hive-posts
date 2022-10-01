<?php

namespace Sixincode\HivePosts\Models;

use Sixincode\HiveAlpha\Models\HiveModelx;

class Tagx extends HiveModelx
{
  public function getTable()
  {
    return config('hive-posts.tables_names.tagsx');
  }
}
