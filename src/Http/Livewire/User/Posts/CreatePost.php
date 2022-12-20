<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;
use Sixincode\HivePosts\Models\Category;
use Sixincode\HivePosts\Http\Livewire\Traits\HasCategories;
use Sixincode\HivePosts\Http\Livewire\Traits\HasComponentElement;
use Sixincode\HivePosts\Http\Livewire\Traits\HasImage;
use Sixincode\HivePosts\Http\Livewire\Traits\HasOwner;
use Sixincode\HivePosts\Http\Livewire\Traits\HasPreview;
use Sixincode\HivePosts\Http\Livewire\Traits\HasSeo;
use Sixincode\HivePosts\Http\Livewire\Traits\HasTags;
use Sixincode\HivePosts\Http\Livewire\Traits\HasUrls;

class CreatePost extends Component
{
  use HasCategories;
  use HasComponentElement;
  use HasImage;
  use HasOwner;
  use HasPreview;
  use HasSeo;
  use HasTags;
  use HasUrls;

  public Post $post;
  public $title;
  public $content;
  public array $listsForFields;

  public function mount($post = null)
  {
    $this->mountHasPreview();
    $this->mountHasComponentElement();
    $this->mountHasTags();
    $this->mountHasCategories();
    $this->mountHasSeo();
    $this->mountHasOwner();
    $this->mountHasImage();
    $this->mountHasUrls();
  }

  public function saveElement($element)
  {
    $element = $this->saveElementHasCategories($element);
    $element = $this->saveElementHasTags($element);
    $element = $this->saveElementHasOwner($element);
    $element = $this->saveElementHasUrls($element);
    // $element = $this->saveElementHasImage($element);

    return $element;
  }

  public function render()
  {
    return view('hive-posts::livewire.user.posts.create-post');
  }

  public function savePost()
  {
     $validatedData = $this->validate([
        'title'   => 'required|string|min:2',
        'content' => 'required',
        'url'     => 'nullable|url',
     ]);
     return $this->savingPost($validatedData);
  }

  private function savingPost(array $postData)
  {
     $newPost = Post::create($postData);
     $elementWithRelations = $this->saveElement($newPost);
     return redirect()->route('user.posts.index');
  }
}
