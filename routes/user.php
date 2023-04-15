<?php
use Illuminate\Support\Facades\Route;
use Sixincode\HivePosts\Http\Controllers\User as Controllers;
use Sixincode\HivePosts\Http\Livewire as Livewires;
use Sixincode\HivePosts\Http\Middlewares as Middlewares;

Route::middleware(
  config('hive-stream.routes.user.middlewares.default', ['web','auth:web']),
)->prefix(
  config('hive-stream.routes.user.prefix', 'home')
)->name('user.')->group(function () {

    Route::middleware(
      config('hive-posts.routes.user.middlewares.allow_posts', ['allow_posts']),
    )->prefix(
      config('hive-posts.routes.user.posts.prefix', 'posts')
    )->group(function () {

      if(config('hive-posts.routes.user.posts.index', false))
        {
          Route::get('/',  [Controllers\Posts\PostsUserController::class, 'indexUserPost'])
               ->name('posts.index');
        }

      if(config('hive-posts.routes.user.posts.create', false))
        {
          Route::get('/create',  [Controllers\Posts\PostsUserController::class, 'createUserPost'])
               ->name('posts.create');
        }

      if(config('hive-posts.routes.user.posts.show', false))
        {
          Route::get('/{post}',  [Controllers\Posts\PostsUserController::class, 'showUserPost'])
               ->name('posts.show');
        }

        if(config('hive-posts.routes.user.posts.delete', false))
          {
            Route::get('/{post}/delete',  [Controllers\Posts\PostsUserController::class, 'deleteUserPost'])
                 ->name('posts.delete');
          }
    });

    Route::middleware(
      config('hive-posts.routes.user.middlewares.allow_categories', ['allow_categories']),
    )->prefix(
      config('hive-posts.routes.user.categories.prefix', 'categories')
    )->name('categories.')->group(function () {

      if(config('hive-posts.routes.user.categories.index', false))
        {
          Route::get('/',  [Controllers\Categories\CategoriesUserController::class, 'indexUserCategory'])
               ->name('index');
        }

      if(config('hive-posts.routes.user.categories.create', false))
        {
          Route::get('/create',  [Controllers\Categories\CategoriesUserController::class, 'createUserCategory'])
               ->name('create');
        }

      if(config('hive-posts.routes.user.categories.show', false))
        {
          Route::get('/{category}',  [Controllers\Categories\CategoriesUserController::class, 'showUserCategory'])
               ->name('show');
        }

        if(config('hive-posts.routes.user.categories.edit', false))
          {
            Route::get('/{category}/edit',  [Controllers\Categories\CategoriesUserController::class, 'editUserCategory'])
                 ->name('edit');
          }

        if(config('hive-posts.routes.user.categories.delete', false))
          {
            Route::get('/{category}/delete',  [Controllers\Categories\CategoriesUserController::class, 'deleteUserCategory'])
                 ->name('delete');
          }
    });
  });
