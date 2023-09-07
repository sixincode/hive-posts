<?php

namespace Sixincode\HivePosts\Traits\Database;

use Sixincode\HivePosts\Database\Seeders as Seeders;

trait HivePostsSeedersTrait
{
  public function seed(): void
  {
    $seeder = new Seeders\HivePostsDatabaseSeeder;
    return $seeder->run();
  }

  public function seedPosts(): void
  {
    $seeder = new Seeders\HivePostsPostsDatabaseSeeder;
    return $seeder->run();
  }

  public function seedCategories(): void
  {
    $seeder = new Seeders\HivePostsCategoriesDatabaseSeeder;
    return $seeder->run();
  }

  public function seedTags(): void
  {
    $seeder = new Seeders\HivePostsTagsDatabaseSeeder;
    return $seeder->run();
  }
}
