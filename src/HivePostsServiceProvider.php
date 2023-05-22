<?php

namespace Sixincode\HivePosts;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HivePosts\Commands\HivePostsCommand;
use Illuminate\Database\Eloquent\Relations\Relation;
use Sixincode\HivePosts\Http\Middlewares as HivePostsMiddlewares;
use Livewire\Livewire;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Sixincode\HivePosts\Traits\HivePostsDatabase;
use Illuminate\Database\Schema\Blueprint;

class HivePostsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-posts')
            ->hasConfigFile(['hive-posts','hive-posts-components'])
            ->hasRoutes(['web','user','api'])
            ->hasViews()
            ->hasMigration('create_hive-posts_table')
            ->hasCommand(HivePostsCommand::class);
        $this->bootHivePostsBladeAndLivewireComponents();
    }

    public function bootingPackage()
    {
      $this->bootHivePostsMiddlewares();
      Relation::morphMap([
          'HivePosts\Post' => 'Sixincode\HivePosts\Models\Post',
          'HivePosts\Category' => 'Sixincode\HivePosts\Models\Category',
          'HivePosts\Tag' => 'Sixincode\HivePosts\Models\Tag',
          'HivePosts\Tagx' => 'Sixincode\HivePosts\Models\Tag',
      ]);
    }

    public function packageBooted()
    {
      $this->bootHivePostsBladeAndLivewireComponents();
    }

    public function bootHivePostsMiddlewares()
    {
      $router = $this->app->make(Router::class);
      $router->aliasMiddleware('has_post', HivePostsMiddlewares\HivePostsUserHasPost::class);
      $router->aliasMiddleware('allow_posts', HivePostsMiddlewares\HivePostsAllowPosts::class);
      $router->aliasMiddleware('allow_categories', HivePostsMiddlewares\HivePostsAllowCategories::class);
    }

    public function bootHivePostsBladeAndLivewireComponents()
    {
       $prefix = config('hive-posts-components.prefix', 'hive-calendar');

       foreach (config('hive-posts-components.livewire', []) as $alias => $component)
       {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Livewire::component($alias, $component);
        }

       foreach (config('hive-posts-components.blade', []) as $alias => $component)
       {
          $alias = $prefix ? "$prefix-$alias" : $alias;
          Blade::component($alias, $component);
        }
     }

     private function registerHivePostsDatabaseMethods(): void
     {
       Blueprint::macro('addTagsFields', function (Blueprint $table, $properties = []) {
         HivePostsDatabase::addTagsFields($table, $properties);
       });

       Blueprint::macro('addCategoriesFields', function (Blueprint $table, $properties = []) {
         HivePostsDatabase::addCategoriesFields($table, $properties);
       });

       Blueprint::macro('addPostsFields', function (Blueprint $table, $properties = []) {
         HivePostsDatabase::addPostsFields($table, $properties);
       });

       Blueprint::macro('addTagsXFields', function (Blueprint $table, $properties = []) {
         HivePostsDatabase::addTagsXFields($table, $properties);
       });

       Blueprint::macro('addCategoriesXFields', function (Blueprint $table, $properties = []) {
         HivePostsDatabase::addCategoriesXFields($table, $properties);
       });
      }


}
