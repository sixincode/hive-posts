<?php

namespace Sixincode\HivePosts\Traits\Database;

use Sixincode\HivePosts\Database\Migrations as Migrations;

trait HivePostsMigrationsTrait
{
  public function migrateUp(): void
  {
    $this->migrateTagsUp();
    $this->migrateCategoriesUp();
    $this->migratePostsUp();
  }

  public function migrateDown(): void
  {
    $this->migrateTagsDown();
    $this->migrateCategoriesDown();
    $this->migratePostsDown();
  }

  public function migratePostsUp(): void
  {
    $migration = new Migrations\HivePostsPostsTables;
    $migration->up();
  }

  public function migratePostsDown(): void
  {
    $migration = new Migrations\HivePostsPostsTables;
    $migration->down();
  }

  public function migrateCategoriesUp(): void
  {
    $migration = new Migrations\HivePostsCategoriesTables;
    $migration->up();
  }

  public function migrateCategoriesDown(): void
  {
    $migration = new Migrations\HivePostsCategoriesTables;
    $migration->down();
  }

  public function migrateTagsUp(): void
  {
    $migration = new Migrations\HivePostsTagsTables;
    $migration->up();
  }

  public function migrateTagsDown(): void
  {
    $migration = new Migrations\HivePostsTagsTables;
    $migration->down();
  }

}
