<?php

namespace Sixincode\HivePosts\Components\Posts;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class CreatePostOverview extends Component
{
  public string $title;
  public $content;

  public function __construct(
    $title = '',
    $content = '',
    )
  {
    $this->title = $title;
    $this->content = $content;
  }
  public function render()
  {
    return view('hive-posts::components.posts.create-post-overview');
  }
}
