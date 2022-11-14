<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasOwner
{
  public $author;

  public function mountHasOwner()
  {
    $this->listsForFields['owners'] = [];

    $this->author = 'johndoe';

  }

  public function saveElementHasOwner($elementSaving)
  {
    // dd($elementSaving);
    // $elementSaving = $elementSaving->update(['views' => $this->author]);
    return $elementSaving;

  }

  public function setAuthor()
  {
    // $this->template = 'default';
  }
}
