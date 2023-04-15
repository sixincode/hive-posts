<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Categories;

use Livewire\Component;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Http\Livewire\Traits\HasTags;
use Sixincode\HivePosts\Http\Livewire\Traits\HasImage;
use Sixincode\HivePosts\Http\Livewire\Traits\HasOwner;

class CreateCategory extends Component
{
  use HasTags;
  use HasImage;
  use HasOwner;

  public Category $category;
  public $category_name;
  public $category_description;
  public array $listsForFields;

  public function mount($category = null)
  {
    $this->mountHasOwner();
    $this->mountHasTags();
    $this->mountHasImage();
  }

  private function saveElement($element)
  {
    $elementSetHasOwner = $this->saveElementHasOwner($element);
    $elementSetHasTags  = $this->saveElementHasTags($elementSetHasOwner);
    // $element = $this->saveElementHasImage($element);
    return $element;
  }

  public function render()
  {
    return view('hive-posts::livewire.user.categories.create-category');
  }

  public function saveCategory()
  {
    $validatedData = $this->validate([
      'category_name'        => 'required|string|min:2',
      'category_description' => 'required',
    ]);
    return $this->savingCategory($validatedData);
  }

  private function savingCategory(array $categoryData)
  {
    $newCategory = Category::create([
      'name'        => $categoryData['category_name'],
      'description' => $categoryData['category_description'],
      'color'       => $categoryData['category_name'],
    ]);
    // $newCategory->color = 'bbb';
    // $newCategory->properties->color = 'xxx';
    // $newCategory->properties->set(['color' ='ttt']);
    // $newCategory->save();
    $elementWithRelations = $this->saveElement($newCategory);

    return redirect()->route('user.categories.index');
  }
}
