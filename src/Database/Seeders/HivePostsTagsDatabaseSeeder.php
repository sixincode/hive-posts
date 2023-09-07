<?php

namespace Sixincode\HivePosts\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Sixincode\HivePosts\Models\Post;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Models\Tag;
use Faker\Provider\fr_FR\Text as TextFR;
use Sixincode\HiveHelpers\Traits\FieldsTrait;
use App\Models\User;

class HivePostsTagsDatabaseSeeder extends Seeder
{
    use FieldsTrait;

    public function run()
    {
      $faker = \Faker\Factory::create();
      $fakerFR = \Faker\Factory::create('fr_FR');
      // $fakerFR = \Faker\Factory::create();

      foreach(range(0, 48)  as $key => $value) {
        Tag::create([
          'name' => [
            'en'=> $faker->jobTitle(),
            'fr'=> $fakerFR->jobTitle(),
          ],
          'is_active' => 1,
          // self::globalUserFieldName() => $users->random()->slug,
         ]);
      }

}
