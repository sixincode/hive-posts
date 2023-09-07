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

class HivePostsCategoriesDatabaseSeeder extends Seeder
{
    use FieldsTrait;

    public function run()
    {
      $faker = \Faker\Factory::create();
      $fakerFR = \Faker\Factory::create('fr_FR');

      foreach(range(0, 20)  as $key => $value) {
        Category::create([
          'name' => [
            'en'=> $faker->catchPhrase(),
            'fr'=> $fakerFR->catchPhrase(),
          ],
          'slogan' => [
            'en'=> $faker->catchPhrase(),
            'fr'=> $fakerFR->catchPhrase(),
          ],
          'description' => [
            'en'=> $faker->realText($maxNbChars = 200, $indexSize = 2),
            'fr'=> $fakerFR->realText($maxNbChars = 200, $indexSize = 2),
          ],
         'is_active' => 1,

         ]);
      }
    }

 }
