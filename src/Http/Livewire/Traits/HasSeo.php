<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Tag;

trait HasSeo
{
  public $seo_title;
  public $seo_description;

  public function mountHasSeo()
  {
    $this->seo_title = '';
    $this->seo_description = '';
  }

  public function saveElementHasSeo()
  {
    $elementSaving->seo_title = $this->seo_title ;
    $elementSaving->seo_description = $this->seo_description ;
  }

  public function viewElementHasSeo($elementViewing)
  {
    $this->seo_title = $elementViewing->seo_title;
    $this->seo_description = $elementViewing->seo_description;
  }

  public function editElementHasSeo($elementEditing)
  {
    $this->seo_title = $elementEditing->seo_title;
    $this->seo_description = $elementEditing->seo_description;
  }
}
