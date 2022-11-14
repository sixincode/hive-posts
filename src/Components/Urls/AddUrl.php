<?php

namespace Sixincode\HivePosts\Components\Urls;

use Illuminate\View\Component;
use Sixincode\HivePosts\Models\Post;

class AddUrl extends Component
{
  public $url;

  public function __construct(
    $url = null
    )
  {

  }

  public function render()
  {
    return view('hive-posts::components.urls.add-url');
  }
}
