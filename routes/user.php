<?php
use Illuminate\Support\Facades\Route;
use Sixincode\HiveCalendar\Http\Controllers\User as Controllers;
use Sixincode\HiveCalendar\Http\Livewire as Livewires;
use Sixincode\HiveCalendar\Http\Middlewares as Middlewares;

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
      config('hive-calendar.routes.user.middlewares.allow_schedules', ['allow_schedules']),
    )->prefix(
      config('hive-calendar.routes.user.calendars.prefix', 'calendar')
    )->group(function () {

      if(config('hive-calendar.routes.user.schedules.index', false))
        {
          Route::get('/',  [Controllers\Schedules\SchedulesUserController::class, 'indexUserSchedule'])
               ->name('schedules.index');
        }

      if(config('hive-calendar.routes.user.schedules.show', false))
        {
          Route::get('/{schedule}',  [Controllers\Schedules\SchedulesController::class, 'showUserSchedule'])
               ->name('schedules.show');
        }

    });

    Route::middleware(
      config('hive-calendar.routes.user.middlewares.allow_events', ['allow_events']),
    )->prefix(
      config('hive-calendar.routes.user.events.prefix', 'events')
    )->group(function () {

    if(config('hive-calendar.routes.user.events.index', false))
      {
        Route::get('/',  [Controllers\Events\EventsController::class, 'indexUserEvent'])
              ->name('events.index');
      }

    if(config('hive-calendar.routes.user.events.create', false))
      {
        Route::get('/create',  [Controllers\Events\EventsController::class, 'createUserEvent'])
              ->name('events.create');
      }

    if(config('hive-calendar.routes.user.events.show', false))
      {
        Route::get('/{event}',  [Controllers\Events\EventsController::class, 'showUserEvent'])
              ->name('events.show');
      }

    if(config('hive-calendar.routes.user.events.delete', false))
      {
        Route::get('/{event}/delete',  [Controllers\Events\EventsController::class, 'deleteUserEvent'])
              ->name('events.delete');
      }
  });


});
