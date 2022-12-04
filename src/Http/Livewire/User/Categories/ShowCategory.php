<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

class ShowCategory extends Component
{
  public Category $category;

  public function mount($category = null)
  {
    $this->category = $category;
  }

  public function render()
  {
    return view('hive-posts::livewire.user.categories.show-category');
  }

}
