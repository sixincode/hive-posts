<?php

namespace Sixincode\HivePosts\Components\Posts;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Category;

class CreatePostAddTaxonomy extends Component
{
  public $categories = [];
  public $listsForFields = [];

  public function __construct(
    $categories = null,
    $listsForFields = null
  )
  {
    $this->categories  = $categories;
    $this->listsForFields  = $listsForFields;
  }
  
  public function render()
  {
      return view('hive-posts::components.posts.create-post-add-taxonomy');
  }
}
