<?php

namespace Sixincode\HivePosts\Components\Posts\User;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class CreatePostSeo extends Component
{

  public function __construct(

  ){

  }

  public function render()
  {
    return view('hive-posts::components.posts.user.create-post-seo');
  }
}
