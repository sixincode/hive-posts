<?php

namespace Sixincode\HivePosts\Database\Seeders;

use Illuminate\Database\Seeder;

class HivePostsDatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call([
      HivePostsCategoriesDatabaseSeeder::class,
      HivePostsTagsDatabaseSeeder::class,
      HivePostsPostsDatabaseSeeder::class,
    ]);
  }
}
