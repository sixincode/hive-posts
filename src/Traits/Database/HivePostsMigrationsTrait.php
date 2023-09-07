<?php

namespace Sixincode\HivePosts\Traits\Database;

use Sixincode\HivePosts\Database\Migrations\HivePostsPostsTables;
use Sixincode\HivePosts\Database\Migrations\HivePostsCategoriesTables;
use Sixincode\HivePosts\Database\Migrations\HivePostsTagsTables;

trait HivePostsMigrationsTrait
{
  public function migrateUp(): void
  {
    HivePostsCategoriesTables::up();
    HivePostsTagsTables::up();
    HivePostsPostsTables::up();
  }

  public function migrateDown(): void
  {
    HivePostsPostsTables::down();
    HivePostsTagsTables::down();
    HivePostsCategoriesTables::down();
  }
}
