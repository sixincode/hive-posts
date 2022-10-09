<?php

// config for Sixincode/HivePosts
return [
    'name' => 'hivePosts',
    'identification' => 'hive-posts',
    'models'  => [
        'category'                    => Sixincode\HivePosts\Models\Category::class,
        'categoryx'                   => Sixincode\HivePosts\Models\Categoryx::class,
        'post'                        => Sixincode\HivePosts\Models\Post::class,
        'tag'                         => Sixincode\HivePosts\Models\Tag::class,
        'tagx'                        => Sixincode\HivePosts\Models\Tagx::class,
    ],
    'table_names'     => [
        'categories'                  => 'categories',
        'categoriesx'                 => 'categoriesx',
        'posts'                       => 'posts',
        'tags'                        => 'tags',
        'tagsx'                       => 'tagsx',
      ],
    'column_names'    => [
      'categories_morph_category'     => 'category_id',
      'categories_morph_id'           => 'categoryx_id',
      'categories_morph_type'         => 'categoryx_type',
      'category_identifier'           => 'categoryx',

      'tags_morph_tag'                => 'tag_id',
      'tags_morph_id'                 => 'tagx_id',
      'tags_morph_type'               => 'tagx_type',
      'tag_identifier'                => 'tagx',
    ],
    'cache'              => [
        'expiration_time'             => \DateInterval::createFromDateString('24 hours'),
        'key'                         => 'sixincode.hive-posts.cache',
        'model_key'                   => 'name',
        'store'                       => 'default',
    ],

];
