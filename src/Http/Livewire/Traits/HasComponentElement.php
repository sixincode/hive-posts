<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasComponentElement
{
  public array $components;

  public function mountHasComponentElement()
  {
    $this->components = [];
  }
}
