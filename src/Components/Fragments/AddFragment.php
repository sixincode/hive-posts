<?php

namespace Sixincode\HivePosts\Components\Fragments;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class AddFragment extends Component
{
  public Post $post;

  public function __construct(
    $post = null
    )
  {

  }

  public function render()
  {
    return view('hive-posts::components.fragments.add-fragment');
  }
}
