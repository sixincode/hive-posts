<?php

namespace Sixincode\HivePosts\Traits;

use ArrayAccess;
use Sixincode\HivePosts\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use InvalidArgumentException;

trait HasCategories
{
  public static function getCategoryClassName(): string
  {
      return config('hive-posts.models.category', Category::class)
  }

  public function categories(): Collection
  {
      return $this->morphToMany(
                      self::getCategoryClassName(),
                      config('hive-posts.column_names.category_identifier'),
                      config('hive-posts.tables_names.categoriesx')
                  )->withPivot(
                      config('hive-alpha.column_names.properties')
                  );
   }

}
