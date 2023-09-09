<?php

namespace Sixincode\HivePosts;

use Sixincode\HivePosts\Traits\Database as DatabaseTrait;

class HivePosts
{
  use DatabaseTrait\HivePostsMigrationsTrait;
  use DatabaseTrait\HivePostsSeedersTrait;

}
