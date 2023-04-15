<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Http\Livewire\Traits\HasTags;

trait HasTaxonomies
{
  public array $categories;
  use HasTags;

  public function mountHasTaxonomies($categories = null)
  {
    $this->listsForFields['categories'] = Category::all()->pluck('name', 'slug')->toArray();
    $this->categories = [];
    $this->mountHasTags();

  }

  private function saveElementHasTaxonomies($elementSaving)
  {
    // dd($elementSaving);
    $elementSaving = $elementSaving->attachCategories($this->categories);
    $elementSaving = $this->saveElementHasTags($elementSaving);

    return $elementSaving;
  }

  public function viewElementHasCategories($elementViewing)
  {
    return $this->categories = $elementViewing->getCategories();
  }

  public function editElementHasCategories($elementEditing)
  {
    $this->listsForFields['categories'] = Category::all()->pluck('name', 'slug')->toArray();
    // $this->categories = $elementEditing->getCategories();
    $this->viewElementHasCategories($elementEditing);
  }
}
