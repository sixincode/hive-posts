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

    $this->tags = [
      "red",
      "tru"
    ];
  }

  private function saveElementHasTags($elementSaving)
  {
    // dd($elementSaving);
    $elementSaving = $elementSaving->attachTags($this->tags);
    return $elementSaving;
  }
}
