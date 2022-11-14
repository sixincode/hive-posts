<?php

namespace Sixincode\HivePosts\Components\Medias;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class AddImage extends Component
{
  public $image;

  public function __construct(
    $image = null
    )
  {

  }

  public function render()
  {
    return view('hive-posts::components.medias.add-image');
  }
}
