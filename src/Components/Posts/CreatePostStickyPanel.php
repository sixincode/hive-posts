<?php

namespace Sixincode\HivePosts\Components\Posts;

use Illuminate\View\Component;

class CreatePostStickyPanel extends Component
{
  public function __construct(

  )
  {

  }
  public function render()
  {
      return view('hive-posts::components.posts.create-post-sticky-panel');
  }
}
