<?php

namespace Sixincode\HivePosts\Traits;

use Illuminate\Database\Schema\Blueprint;
use Sixincode\HiveHelpers\Traits\FieldsTrait;
use Sixincode\HiveAlpha\Traits\HiveAlphaDatabase;
use Sixincode\HivePosts\Database\Seeders\HivePostsDaseSeeder;
use Sixincode\HivePosts\Database\Migrations\HivePostsTagsTable;
use Sixincode\HivePosts\Database\Migrations\HivePostsCategoriesTable;
use Sixincode\HivePosts\Database\Migrations\HivePostsPostsTable;

trait HivePostsDatabase
{
  use FieldsTrait, HiveAlphaDatabase;

  public static function addTagsFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->string('type')->nullable();
    $table->isActiveField();
    $table->isDefaultField();
  }

  public static function addTagsXFields(Blueprint $table , $properties =[]): void
  {
    $table->foreignId(config('hive-posts.column_names.tags_morph_tag'))->constrained($tableNames['tags'])->onDelete('cascade');
    $table->morphs(config('hive-posts.column_names.tag_identifier'));

    $table->unique([
      config('hive-posts.column_names.tags_morph_tag'),
      config('hive-posts.column_names.tags_morph_id'),
      config('hive-posts.column_names.tags_morph_type')
    ]);
  }

  public static function addCategoriesFields(Blueprint $table , $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->descriptionFieldJson('slogan');
    $table->morphToOwner();
    $table->integer('level')->nullable();
    $table->string('type')->nullable();
    $table->isFeaturedField();
    $table->isPrivateField();
    $table->isActiveField();
    $table->isDefaultField();
    $table->sortOrderField();
    $table->seoField();
  }

  public static function addCategoriesXFields(Blueprint $table , $properties =[]): void
  {
    $table->foreignId(config('hive-posts.column_names.categories_morph_category'))
          ->constrained($tableNames['categories'])
          ->onDelete('cascade');

    $table->morphs(config('hive-posts.column_names.category_identifier'));
    $table->propertiesSchemaField();

    $table->unique([
      config('hive-posts.column_names.categories_morph_category'),
      config('hive-posts.column_names.categories_morph_id'),
      config('hive-posts.column_names.categories_morph_type')
    ]);
  }

  public static function addPostsFields(Blueprint $table , $properties =[]): void
  {
    $table->descriptionFieldJson('content');
    $table->integer('views')->nullable();
    $table->string('url')->nullable();
    $table->morphToOwner();
    $table->isFeaturedField();
    $table->isPrivateField();
    $table->isActiveField();
    $table->sortOrderField();
  }

  public function seed()
  {
    return HivePostsDaseSeeder::class;
  }

  public function migrateUp()
  {
    HivePostsTagsTable::up();
    HivePostsCategoriesTable::up();
    HivePostsPostsTable::up();
  }

  public function migrateDown()
  {
    HivePostsPostsTable::down();
    HivePostsCategoriesTable::down();
    HivePostsTagsTable::down();
  }

  // Tags
  public function migrateTagsUp()
  {
    return HivePostsTagsTable::up();
  }

  public function migrateTagsDown()
  {
    return HivePostsTagsTable::down();
  }

  // Categories
  public function migrateCategoriesUp()
  {
    return HivePostsCategoriesTable::up();
  }

  public function migrateCategoriesDown()
  {
    return HivePostsCategoriesTable::down();
  }

  // Posts
  public function migratePostsUp()
  {
    return HivePostsPostsTable::up();
  }

  public function migratePostsDown()
  {
    return HivePostsPostsTable::down();
  }

}
