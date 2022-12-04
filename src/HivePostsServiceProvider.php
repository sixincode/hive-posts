<?php

namespace Sixincode\HivePosts;

use Livewire\Livewire;
use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HivePosts\Commands\HivePostsCommand;
use Illuminate\Database\Eloquent\Relations\Relation;
use Sixincode\HivePosts\Http\Livewire as HivePostsLivewire;
use Sixincode\HivePosts\Components as HivePostsComponents;
use Sixincode\HivePosts\Http\Middlewares as HivePostsMiddlewares;
use Illuminate\Routing\Router;

class HivePostsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-posts')
            ->hasConfigFile('hive-posts')
            ->hasViews()
            ->hasRoutes(['web','user','api'])
            ->hasViewComponents(
              'hive-posts',
              HivePostsComponents\Posts\CreatePostAddTaxonomy::class,
              HivePostsComponents\Posts\CreatePostOverview::class,
              HivePostsComponents\Posts\CreatePostStickyPanel::class,
              HivePostsComponents\Categories\AddCategory::class,
              HivePostsComponents\Fragements\AddFragment::class,
              HivePostsComponents\Media\AddMedia::class,
              HivePostsComponents\Seo\AddSeo::class,
              HivePostsComponents\Tags\AddTag::class,
              HivePostsComponents\Owner\AddOwner::class,
              HivePostsComponents\Urls\AddUrl::class,
              HivePostsComponents\Media\AddImage::class,
              )
            ->hasMigration('create_hive-posts_table')
            ->hasCommand(HivePostsCommand::class);
    }

    public function bootingPackage()
    {
      $this->bootHivePostsLivewireComponents();
      $this->bootHivePostsMiddlewares();
      Relation::enforceMorphMap([
          'HivePosts\Post' => 'Sixincode\HivePosts\Models\Post',
          'HivePosts\Category' => 'Sixincode\HivePosts\Models\Category',
          'HivePosts\Tag' => 'Sixincode\HivePosts\Models\Tag',
          'HivePosts\Tagx' => 'Sixincode\HivePosts\Models\Tag',
      ]);
    }

    public function bootHivePostsMiddlewares()
    {
      $router = $this->app->make(Router::class);
      $router->aliasMiddleware('has_post', HivePostsMiddlewares\HiveCommunityUserHasPost::class);
      $router->aliasMiddleware('allow_posts', HivePostsMiddlewares\HiveCommunityUserAllowPosts::class);
    }

    public function bootHivePostsLivewireComponents()
    {
      Livewire::component('hive-posts-index-post', HivePostsLivewire\Posts\IndexPost::class);
      Livewire::component('hive-posts-create-post', HivePostsLivewire\Posts\CreatePost::class);
      Livewire::component('hive-posts-show-post', HivePostsLivewire\Posts\ShowPost::class);
      Livewire::component('hive-posts-edit-post', HivePostsLivewire\Posts\EditPost::class);
      Livewire::component('hive-posts-create-category', HivePostsLivewire\Categories\CreateCategory::class);
      Livewire::component('hive-posts-show-category', HivePostsLivewire\Categories\ShowCategory::class);
      Livewire::component('hive-posts-edit-category', HivePostsLivewire\Categories\EditCategory::class);
      Livewire::component('hive-posts-index-category', HivePostsLivewire\Categories\IndexCategory::class);
    }
}
