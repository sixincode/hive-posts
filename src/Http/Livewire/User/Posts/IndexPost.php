<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;
use Sixincode\HivePosts\Models\Tag;

class IndexPost extends Component
{
  public $posts;

  public function mount($posts = null)
  {
    $this->posts = Post::all()->sortByDesc('created_at');
  }

  public function render()
  {
    return view('hive-posts::livewire.user.posts.index-post');
  }

}
