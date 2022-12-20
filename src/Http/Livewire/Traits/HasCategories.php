<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;

trait HasCategories
{
  public array $categories;

  public function mountHasCategories($categories = null)
  {
    $this->listsForFields['categories'] = Category::all()->pluck('name', 'slug')->toArray();
    $this->categories = [];
  }

  private function saveElementHasCategories($elementSaving)
  {
    // dd($elementSaving);
    $elementSaving = $elementSaving->attachCategories($this->categories);
    return $elementSaving;
  }

  public function viewElementHasCategories($elementViewing)
  {
    $this->categories = $elementViewing->getCategories();
  }

  public function editElementHasCategories($elementEditing)
  {
    $this->listsForFields['categories'] = Category::all()->pluck('name', 'slug')->toArray();
    $this->categories = $elementEditing->getCategories();
  }
}
