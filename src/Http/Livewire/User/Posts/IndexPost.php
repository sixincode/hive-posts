<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;
use Sixincode\HivePosts\Models\Tag;

class IndexPost extends Component
{
  public $posts;
  public $tags;

  public function mount($posts = null)
  {
    $this->posts = Post::all();
    $this->tags  = Tag::all();
  }

  public function render()
  {
    return view('hive-posts::livewire.user.posts.index-post');
  }

}
