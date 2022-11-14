<?php

namespace Sixincode\HivePosts\Components\Categories;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Category;

class AddCategory extends Component
{
  public $categories = [];
  public $listsForFields;

  public function __construct(
    $categories = null,
    $listsForFields = null
    )
   {
    // if(!$categories){
    //   $categories  = Category::all();
    // }
    $this->listsForFields  = $listsForFields;
    $this->categories  = $categories;
  }

  public function render()
  {
    return view('hive-posts::components.categories.add-category');
  }
}
