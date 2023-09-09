<?php

namespace Sixincode\HivePosts\Traits\Database;

use Illuminate\Database\Schema\Blueprint;
use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait HivePostsDatabaseDefinitions
{
  use FieldsTrait;

  public static function addTagsFields(Blueprint $table, $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->string('type')->nullable();
    $table->isActiveField();
    $table->isDefaultField();
  }

  public static function addTagsXFields(Blueprint $table, $properties =[]): void
  {
    $table->foreignId(config('hive-posts.column_names.tags_morph_tag'))->constrained(config('hive-posts.table_names.tags'))->onDelete('cascade');
    $table->morphs(config('hive-posts.column_names.tag_identifier'));

    $table->unique([
      config('hive-posts.column_names.tags_morph_tag'),
      config('hive-posts.column_names.tags_morph_id'),
      config('hive-posts.column_names.tags_morph_type')
    ]);
  }

  public static function addCategoriesFields(Blueprint $table, $properties =[]): void
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

  public static function addCategoriesXFields(Blueprint $table, $properties =[]): void
  {
    $table->foreignId(config('hive-posts.column_names.categories_morph_category'))
          ->constrained(config('hive-posts.table_names.categories'))
          ->onDelete('cascade');

    $table->morphs(config('hive-posts.column_names.category_identifier'));
    $table->propertiesSchemaField();

    $table->unique([
      config('hive-posts.column_names.categories_morph_category'),
      config('hive-posts.column_names.categories_morph_id'),
      config('hive-posts.column_names.categories_morph_type')
    ]);
  }

  public static function addPostsFields(Blueprint $table, $properties =[]): void
  {
    $table->addAlphaModelFields($table);
    $table->codeField();
    $table->referenceField();
    $table->descriptionFieldJson('content');
    $table->integer('views')->nullable();
    $table->string('url')->nullable();
    $table->morphToOwner();
    $table->isFeaturedField();
    $table->isPrivateField();
    $table->isActiveField();
    $table->sortOrderField();
  }

}
