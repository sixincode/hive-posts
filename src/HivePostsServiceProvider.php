<?php

namespace Sixincode\HivePosts;

use Livewire\Livewire;
use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HivePosts\Commands\HivePostsCommand;
use Sixincode\HivePosts\Http\Livewire\Categories\CreateCategory;
use Sixincode\HivePosts\Http\Livewire\Categories\ShowCategory;
use Sixincode\HivePosts\Http\Livewire\Categories\EditCategory;
use Sixincode\HivePosts\Http\Livewire\Categories\IndexCategory;
use Sixincode\HivePosts\Http\Livewire\Posts\IndexPost;
use Sixincode\HivePosts\Http\Livewire\Posts\CreatePost;
use Sixincode\HivePosts\Http\Livewire\Posts\ShowPost;
use Sixincode\HivePosts\Http\Livewire\Posts\EditPost;
use Sixincode\HivePosts\Components\Posts\CreatePostAddTaxonomy;
use Sixincode\HivePosts\Components\Posts\CreatePostOverview;
use Sixincode\HivePosts\Components\Posts\CreatePostStickyPanel;
use Sixincode\HivePosts\Components\Categories\AddCategory;
use Sixincode\HivePosts\Components\Tags\AddTag;
use Sixincode\HivePosts\Components\Seo\AddSeo;
use Sixincode\HivePosts\Components\Owner\AddOwner;
use Sixincode\HivePosts\Components\Urls\AddUrl;
use Sixincode\HivePosts\Components\Medias\AddImage;
use Sixincode\HivePosts\Components\Medias\AddMedia;
use Sixincode\HivePosts\Components\Fragments\AddFragment;
use Illuminate\Database\Eloquent\Relations\Relation;

class HivePostsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('hive-posts')
            ->hasConfigFile('hive-posts')
            ->hasViews()
            ->hasViewComponents(
              'hive-posts',
              CreatePostAddTaxonomy::class,
              CreatePostOverview::class,
              CreatePostStickyPanel::class,
              AddCategory::class,
              AddFragment::class,
              AddMedia::class,
              AddSeo::class,
              AddTag::class,
              AddOwner::class,
              AddUrl::class,
              AddImage::class,
              )
            ->hasMigration('create_hive-posts_table')
            ->hasCommand(HivePostsCommand::class);
    }

    public function bootingPackage()
    {
      Livewire::component('hive-posts-index-post', IndexPost::class);
      Livewire::component('hive-posts-create-post', CreatePost::class);
      Livewire::component('hive-posts-show-post', ShowPost::class);
      Livewire::component('hive-posts-edit-post', EditPost::class);
      Livewire::component('hive-posts-create-category', CreateCategory::class);
      Livewire::component('hive-posts-show-category', ShowCategory::class);
      Livewire::component('hive-posts-edit-category', EditCategory::class);
      Livewire::component('hive-posts-index-category', IndexCategory::class);

      Relation::enforceMorphMap([
          'HivePosts\Post' => 'Sixincode\HivePosts\Models\Post',
          'HivePosts\Category' => 'Sixincode\HivePosts\Models\Category',
          'HivePosts\Tag' => 'Sixincode\HivePosts\Models\Tag',
          'HivePosts\Tagx' => 'Sixincode\HivePosts\Models\Tag',
      ]);
    }
}
