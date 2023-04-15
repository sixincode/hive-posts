<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;

class ShowPost extends Component
{
  public $post;

  public function mount(Post $post = null)
  {
    $this->post = $post;
  }

  public function render()
  {
    return view('hive-posts::livewire.user.posts.show-post');
  }

}
