<?php

namespace Sixincode\HivePosts\Components\Tags;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Tag;

class AddTag extends Component
{
  public $tags = [];

  public function __construct(

  )
  {
    // if(!$tags){
    //   $tags  = Tag::all();
    // }
    // $this->tags  = $tags;
  }

  public function render()
  {
    return view('hive-posts::components.tags.add-tag');
  }
}
