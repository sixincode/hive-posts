<?php

namespace Sixincode\HivePosts\Traits\Database;

use Sixincode\HivePosts\Database\Seeders as Seeders;

trait HivePostsSeedersTrait
{
  public function seed(): void
  {
    $thid->seedTags();
    $thid->seedCategories();
    $thid->seedPosts();
  }

  public function seedPosts(): void
  {
    $seeder = new Seeders\HivePostsPostsDatabaseSeeder;
    $seeder->run();
  }

  public function seedCategories(): void
  {
    $seeder = new Seeders\HivePostsCategoriesDatabaseSeeder;
    $seeder->run();
  }

  public function seedTags(): void
  {
    $seeder = new Seeders\HivePostsTagsDatabaseSeeder;
    $seeder->run();
  }
}
