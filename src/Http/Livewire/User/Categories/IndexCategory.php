<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

class IndexCategory extends Component
{
  public $categories;

  public function mount($categories = null)
  {
    $this->categories = Category::all()->sortByDesc('created_at');
  }

  public function render()
  {
    return view('hive-posts::livewire.user.categories.index-category');
  }

}
