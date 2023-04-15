<?php

namespace Sixincode\HivePosts\Traits;

use ArrayAccess;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Models\Categoryx;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use InvalidArgumentException;

trait HasCategories
{
  public static function getCategoryClassName(): string
  {
      return config('hive-posts.models.category', Category::class);
  }

  public function categories(): MorphToMany
  {
      return $this->morphToMany(
                      self::getCategoryClassName(),
                      config('hive-posts.column_names.category_identifier'),
                      config('hive-posts.table_names.categoriesx')
                  )->withPivot(
                      config('hive-helpers.column_names.properties_schema')
                  );
   }


   public function attachCategories(array | ArrayAccess | Category $categories): static
   {
       $className = static::getCategoryClassName();
       // $categoriesIds = Category::whereIn('slug',$categories)->pluck('id')->toArray();
       $categoriesIds = Category::whereIn('slug',$categories)->get();
       $this->categories()->syncWithoutDetaching($categoriesIds);
       return $this;
   }

   public function getCategories( )
   {
       return $this->categories()->pluck('name','slug')->toArray();
   }

}
