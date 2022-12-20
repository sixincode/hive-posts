<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasTags
{
  public array $tags;

  public function mountHasTags()
  {
    $this->listsForFields['tags'] = Tag::pluck('name')->toArray();
    $this->tags = [];
  }

  private function saveElementHasTags($elementSaving)
  {
    $elementSaving = $elementSaving->attachTags($this->tags);
    return $elementSaving;
  }

  public function viewElementHasTags($elementViewing)
  {
    $this->tags = $elementViewing->tags();
  }

  public function editElementHasTags($elementEditing)
  {
    $this->listsForFields['tags'] = Tag::pluck('name','slug')->toArray();
    $this->tags = $elementEditing->tags();
  }
}
