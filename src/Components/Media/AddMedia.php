<?php

namespace Sixincode\HivePosts\Components\Media;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class AddMedia extends Component
{
  public $post;

  public function __construct(
    $post = null
    )
  {

  }

  public function render()
  {
    return view('hive-posts::components.medias.add-media');
  }
}
