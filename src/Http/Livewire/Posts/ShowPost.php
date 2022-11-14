<?php

namespace Sixincode\HivePosts\Http\Livewire\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;

class ShowPost extends Component
{
  public Post $post;

  public function mount($post = null)
  {
    $this->post = $post;
  }

  public function render()
  {
    return view('hive-posts::livewire.posts.show-post');
  }

}
