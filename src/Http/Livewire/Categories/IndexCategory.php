<?php

namespace Sixincode\HivePosts\Http\Livewire\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

class IndexCategory extends Component
{
  public $categories;

  public function mount($categories = null)
  {
    $this->categories = Category::all();
  }

  public function render()
  {
    return view('hive-posts::livewire.categories.index-category');
  }

}
