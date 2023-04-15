<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasOwner
{
  public $author;

  public function mountHasOwner()
  {
    $this->listsForFields['authors'] = [];
    $this->author = auth()->user();
  }

  public function saveElementHasOwner($elementSaving)
  {
    // $elementSaving = $elementSaving->update(['views' => $this->author]);
    // return $elementSaving->owner()->save($this->author);
    // $this->author->posts()->save($elementSaving);
      return $elementSaving;
  }

  public function viewElementHasOwner($elementViewing)
  {
    // $elementSaving = $elementSaving->update(['views' => $this->author]);
    return $this->author = $elementViewing->owner();
  }

  public function editElementHasOwner($elementEditing)
  {
    $this->listsForFields['authors'] = [];
    return $this->author = $elementViewing->owner();
  }
}
