<?php

namespace Sixincode\HivePosts\Components\Seo;

use Illuminate\View\Component;

class AddSeo extends Component
{
  // public $meta = [
  //   'title' => '',
  //   'content' => '',
  //   'url' => '',
  //   'slug' => '',
  // ];

  public function __construct(
    // $title = null,
    // $content = null,
    // $slug = null,
    // $url = null,
  )
  {
    // $this->meta = [
    //   'title'   => $title,
    //   'content' => $content,
    //   'slug'    => $slug,
    //   'url'     => $url,
    // ];
    // if(!$this->meta['url']){
    //   $this->meta['url'] = env('APP_URL');
    // }
  }

  public function render()
  {
    return view('hive-posts::components.seo.add-seo');
  }
}
