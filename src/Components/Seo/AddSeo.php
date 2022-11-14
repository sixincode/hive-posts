<?php

namespace Sixincode\HivePosts\Components\Seo;

use Illuminate\View\Component;

class AddSeo extends Component
{
  public $meta;

  public function __construct(
    array $meta = []
  )
  {

  }

  public function render()
  {
    return view('hive-posts::components.seo.add-seo');
  }
}
