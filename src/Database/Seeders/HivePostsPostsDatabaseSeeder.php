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

class HivePostsPostsDatabaseSeeder extends Seeder
{
    use FieldsTrait;

    public function run()
    {
      $faker = \Faker\Factory::create();
      $fakerFR = \Faker\Factory::create('fr_FR');
      // $fakerFR = \Faker\Factory::create();
      $users = User::all();


      $categories = Category::all();
      $tags = Tag::all();
      foreach(range(0, 28)  as $key => $value) {
       $post = Post::create([
              'title' => [
                'en'=> $faker->catchPhrase(),
                'fr'=> $faker->catchPhrase(),
              ],
              'content' => [
                'en'=> $faker->paragraphs(4, true),
                'fr'=> $fakerFR->paragraphs(4, true),
              ],
              'url' => $faker->url(),
              'is_active' => 1,
              'views' => rand(5, 150),
              self::globalUserFieldName() => $users->random()->slug,
            ]);

            $post->categories()->syncWithoutDetaching($categories->random(4));
            $post->attachTags($tags->random(8));
      }
    }
}
