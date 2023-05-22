<?php

namespace Sixincode\HivePosts\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Sixincode\HivePosts\Traits\HivePostsDatabase;

class HivePostsTagsTable
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

      if(!Schema::hasTable($tableNames['tags'])) {
        Schema::create($tableNames['tags'], function (Blueprint $table) {
          HivePostsDatabase::addTagsFields($table);
        });
      }

      if(!Schema::hasTable($tableNames['tagsx'])) {
        Schema::create($tableNames['tagsx'], function (Blueprint $table) {
          HivePostsDatabase::addTagsXFields($table);
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

      Schema::dropIfExists($tableNames['tagsx']);
      Schema::dropIfExists($tableNames['tags']);
  }
}
