<?php

namespace Sixincode\HivePosts\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HivePostsDaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
              HivePostsPostsDatabaseSeeder::class,
            ]);
    }
}
