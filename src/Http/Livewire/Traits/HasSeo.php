<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasSeo
{
  public array $seo;

  public function mountHasSeo()
  {
    $this->seo = [
      'title' => '',
      'body' => '',
      'url' => '',
    ];
  }
}
