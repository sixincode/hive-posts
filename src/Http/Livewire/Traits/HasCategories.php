<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

trait HasCategories
{
  public array $categories;

  public function mountHasCategories($categories = null)
  {
    $this->listsForFields['categories'] = Category::all()->pluck('name', 'slug')->toArray();
    $this->categories = Category::take(4)->pluck('slug')->toArray();
  }
}
