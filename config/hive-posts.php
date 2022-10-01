<?php

// config for Sixincode/HivePosts
return [
    'name'    => 'Engine',
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
      'global_key'                    => 'global',
      'owner_morph_key'               => 'owner_id',
      'owner_morph_type'              => 'owner_type',
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
        'key'                         => 'sixincode.package-post.cache',
        'model_key'                   => 'name',
        'store'                       => 'default',
    ],

];
