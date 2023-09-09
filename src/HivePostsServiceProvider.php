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
use Sixincode\HivePosts\Traits\Database as DatabaseTraits;
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

            $this->registerHivePostsDatabaseMethods();
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

    public function bootHivePostsMiddlewares()
    {
      $router = $this->app->make(Router::class);
      $router->aliasMiddleware('has_post', HivePostsMiddlewares\HivePostsUserHasPost::class);
      $router->aliasMiddleware('allow_posts', HivePostsMiddlewares\HivePostsAllowPosts::class);
      $router->aliasMiddleware('allow_categories', HivePostsMiddlewares\HivePostsAllowCategories::class);
    }

     private function registerHivePostsDatabaseMethods(): void
     {
       Blueprint::macro('addTagsFields', function (Blueprint $table, $properties = []) {
         DatabaseTraits\HivePostsDatabaseDefinitions::addTagsFields($table, $properties);
       });

       Blueprint::macro('addCategoriesFields', function (Blueprint $table, $properties = []) {
        DatabaseTraits\HivePostsDatabaseDefinitions::addCategoriesFields($table, $properties);
       });

       Blueprint::macro('addPostsFields', function (Blueprint $table, $properties = []) {
         DatabaseTraits\HivePostsDatabaseDefinitions::addPostsFields($table, $properties);
       });

       Blueprint::macro('addTagsXFields', function (Blueprint $table, $properties = []) {
         DatabaseTraits\HivePostsDatabaseDefinitions::addTagsXFields($table, $properties);
       });

       Blueprint::macro('addCategoriesXFields', function (Blueprint $table, $properties = []) {
         DatabaseTraits\HivePostsDatabaseDefinitions::addCategoriesXFields($table, $properties);
       });
      }


}
