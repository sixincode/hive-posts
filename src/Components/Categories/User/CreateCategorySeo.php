<?php

namespace Sixincode\HivePosts\Components\Categories\User;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Category;

class CreateCategorySeo extends Component
{

  public function __construct(

  ){

  }

  public function render()
  {
    return view('hive-posts::components.categories.user.create-category-seo');
  }
}
