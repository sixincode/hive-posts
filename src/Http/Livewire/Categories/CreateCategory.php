<?php

namespace Sixincode\HivePosts\Http\Livewire\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Http\Livewire\Traits\HasTags;

class CreateCategory extends Component
{
  use HasTags;

  public Category $category;
  public $name;
  public $content;
  public array $listsForFields;

  public function mount($category = null)
  {
    $this->mountTags();
  }

  public function render()
  {
    return view('hive-posts::livewire.categories.create-category');
  }

  public function saveCategory()
  {
    $validatedData = $this->validate([
      'name'   => 'required|string|min:2',
      'content' => 'required',
      'url'     => 'nullable|url',
    ]);
    return $this->savingCategory($validatedData);
  }

  private function savingCategory(array $categoryData)
  {
    $newCategory = Category::create($categoryData);
    return redirect()->route('categories.index');
  }
}
