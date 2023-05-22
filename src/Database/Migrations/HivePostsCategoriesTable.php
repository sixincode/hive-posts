<?php

namespace Sixincode\HivePosts\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Sixincode\HivePosts\Traits\HivePostsDatabase;

class HivePostsCategoriesTable
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

      if(!Schema::hasTable($tableNames['categories'])) {
        Schema::create($tableNames['categories'], function (Blueprint $table) {
          HivePostsDatabase::addCategoriesFields($table);
        });
      }

      if(!Schema::hasTable($tableNames['categoriesx'])) {
        Schema::create($tableNames['categoriesx'], function (Blueprint $table) {
          HivePostsDatabase::addCategoriesXFields($table);
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

      Schema::dropIfExists($tableNames['categoriesx']);
      Schema::dropIfExists($tableNames['categories']);
  }
}
