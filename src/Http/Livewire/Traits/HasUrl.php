<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasUrl
{
  public $url;

  public function mountHasUrl()
  {
    $this->listsForFields['urls'] = [];

    $this->url = '';

  }

  public function saveElementHasUrl($elementSaving)
  {
    // dd($elementSaving);
    // $elementSaving = $elementSaving->update(['views' => $author]);
    return $elementSaving;

  }

  public function setUrl()
  {
    // $this->template = 'default';
  }
}
