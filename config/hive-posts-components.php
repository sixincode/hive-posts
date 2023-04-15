<?php

use Sixincode\HivePosts\Http\Livewire as HivePostsLivewire;
use Sixincode\HivePosts\Components as HivePostsComponents;

return [
  /*
  |--------------------------------------------------------------------------
  | Blade Components
  |--------------------------------------------------------------------------
  | Below are listed all the blade components that should be loaded
  | by the packageBooted method on the package ServiceProder.
  */

  'blade' => [
      // Global Components
      'user-create-post-add-category'  => HivePostsComponents\Categories\AddCategory::class,
      'user-create-post-add-tag'       => HivePostsComponents\Tags\AddTag::class,
      'user-create-post-add-seo'       => HivePostsComponents\Seo\AddSeo::class,

      // Posts Components
      'user-create-post-overview'  => HivePostsComponents\Posts\User\CreatePostOverview::class,
      'user-create-post-header'    => HivePostsComponents\Posts\User\CreatePostHeader::class,
      'user-create-post-audience'  => HivePostsComponents\Posts\User\CreatePostAudience::class,
      'user-create-post-seo'       => HivePostsComponents\Posts\User\CreatePostSeo::class,
      'user-create-post-taxonomy'  => HivePostsComponents\Posts\User\CreatePostTaxonomy::class,

      // Categories Components
      'user-create-category-header'    => HivePostsComponents\Categories\User\CreateCategoryHeader::class,
      'user-create-category-overview'  => HivePostsComponents\Categories\User\CreateCategoryOverview::class,
      'user-create-category-seo'       => HivePostsComponents\Categories\User\CreateCategorySeo::class,

    ],
  /*
  |--------------------------------------------------------------------------
  | Livewire Components
  |--------------------------------------------------------------------------
  | Below are listed all the Livewire components that should be loaded
  | by the bootingPackage method on the package ServiceProder.
  */
  'livewire' => [
    'central-posts-index'  => HivePostsLivewire\Central\Posts\IndexCentralPost::class,

    'user-posts-index'     => HivePostsLivewire\User\Posts\IndexPost::class,
    'user-posts-create'    => HivePostsLivewire\User\Posts\CreatePost::class,
    'user-posts-show'      => HivePostsLivewire\User\Posts\ShowPost::class,
    'user-posts-edit'      => HivePostsLivewire\User\Posts\EditPost::class,

    'user-categories-index'     => HivePostsLivewire\User\Categories\IndexCategory::class,
    'user-categories-create'    => HivePostsLivewire\User\Categories\CreateCategory::class,
    'user-categories-show'      => HivePostsLivewire\User\Categories\ShowCategory::class,
    'user-categories-edit'      => HivePostsLivewire\User\Categories\EditCategory::class,

],

  /*
  |--------------------------------------------------------------------------
  | Components Prefix
  |--------------------------------------------------------------------------
  |
  | This value will set a prefix for all Shopper Admin components.
  | By default it's shopper. This is useful if you want to avoid
  | collision with components from other libraries.
  |
  | For example, it's reference components like:
  |
  | <x-hive-index />
  | <livewire:hive-index />
  |
  */
  'prefix' => 'hive-posts',
];
