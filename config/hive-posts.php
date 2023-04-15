<?php

// config for Sixincode/HivePosts
return [
    'name' => 'hivePosts',
    'identification' => 'hive-posts',
    'models'  => [
        'bookmark'                    => Sixincode\HivePosts\Models\Bookmark::class,
        'collection'                  => Sixincode\HivePosts\Models\Collection::class,
        'collection_rule'             => Sixincode\HivePosts\Models\CollectionRule::class,
        'category'                    => Sixincode\HivePosts\Models\Category::class,
        'categoryx'                   => Sixincode\HivePosts\Models\Categoryx::class,
        'post'                        => Sixincode\HivePosts\Models\Post::class,
        'tag'                         => Sixincode\HivePosts\Models\Tag::class,
        'tagx'                        => Sixincode\HivePosts\Models\Tagx::class,
    ],
    'table_names'     => [
        'bookmarks'                   => 'bookmarks',
        'collections'                 => 'collections',
        'collection_rules'            => 'collection_rules',
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
    'routes' => [
      'central' =>   [
              'posts' => [
                'posts'  => 'posts',
                'index'  => false,
                'show'   => false,
                'create' => false,
                'delete' => false,
              ],
              'categories' => [
                'prefix' => 'categories',
                'index'  => true,
                'show'   => true,
                'create' => true,
                'edit' => true,
                'delete' => true,
              ],
       ],
      'admin' =>   [
              'posts' => [
                'posts'  => 'posts',
                'index'  => true,
                'show'   => true,
                'create' => true,
                'delete' => true,
              ],
              'categories' => [
                'prefix' => 'categories',
                'index'  => true,
                'show'   => true,
                'create' => true,
                'delete' => true,
              ],
              'bookmarks' => [
                'prefix' => 'bookmarks',
                'index'  => true,
                'show'   => true,
                'create' => true,
                'delete' => true,
              ],
      ],
       'user' =>   [
             'middlewares' =>[
               'allow_posts' => ['allow_posts'],
               'has_post' => ['has_post'],
               'allow_categories' => ['allow_categories'],
               'has_category' => ['has_category'],
               'allow_collections' => ['allow_collections'],
               'has_collection' => ['has_collection'],
               'allow_bookmarks' => ['allow_bookmarks'],
               'has_bookmark' => ['has_bookmark'],
             ],
             'posts' => [
               'prefix' => 'posts',
               'index'  => true,
               'show'   => true,
               'create' => true,
               'delete' => true,
             ],
             'categories' => [
               'prefix' => 'categories',
               'index'  => true,
               'show'   => true,
               'create' => true,
               'edit' => true,
               'delete' => true,
             ],
             'bookmarks' => [
               'prefix' => 'bookmarks',
               'index'  => true,
               'show'   => true,
               'create' => true,
               'delete' => true,
             ],
             'collections' => [
               'prefix' => 'collections',
               'index'  => true,
               'show'   => true,
               'create' => true,
               'delete' => true,
             ],
        ],
   ],

];
