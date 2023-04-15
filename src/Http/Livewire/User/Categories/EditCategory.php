<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

class EditCategory extends Component
{
  public $category;

  public function mount(Category $category = null)
  {
    $this->category = $category;
  }

  public function render()
  {
    return view('hive-posts::livewire.user.categories.edit-category');
  }

}
