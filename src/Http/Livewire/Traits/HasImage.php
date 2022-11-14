<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasImage
{
  public $image;

  public function mountHasImage()
  {
    $this->listsForFields['images'] = [];

    $this->image = '';

  }

  public function saveElementHasImage($elementSaving)
  {
    // dd($elementSaving);
    // $elementSaving = $elementSaving->update(['views' => $author]);
    return $elementSaving;

  }

  public function setImage()
  {
    // $this->template = 'default';
  }
}
