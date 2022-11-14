<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasPreview
{
  public string $template;

  public function mountHasPreview()
  {
    $this->template = 'default';
  }

  public function previewContent()
  {
    // $this->template = 'default';
  }
}
