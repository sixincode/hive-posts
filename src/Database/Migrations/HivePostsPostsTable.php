<?php

namespace Sixincode\HivePosts\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Sixincode\HivePosts\Traits\HivePostsDatabase;

class HivePostsPostsTable
{
  public static function up()
  {
      $tableNames  = config('hive-posts.table_names');
      $columnNames = config('hive-posts.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/hive-posts.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/hive-posts.php not loaded. Run [php artisan config:clear] and try again.');
      }

      if(!Schema::hasTable($tableNames['posts'])) {
        Schema::create($tableNames['posts'], function (Blueprint $table) {
          HivePostsDatabase::addPostsFields($table);
        });
      }

  }

  public static function down()
  {
      $tableNames  = config('hive-posts.table_names');
      $columnNames = config('hive-posts.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/hive-posts.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/hive-posts.php not loaded. Run [php artisan config:clear] and try again.');
      }

      Schema::dropIfExists($tableNames['posts']);
  }
}
