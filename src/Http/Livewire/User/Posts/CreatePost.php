<?php

namespace Sixincode\HivePosts\Http\Livewire\User\Posts;

use Livewire\Component;
use Sixincode\HivePosts\Models\Post;
use Sixincode\HivePosts\Http\Livewire\Traits\HasTaxonomies;
use Sixincode\HivePosts\Http\Livewire\Traits\HasComponentElement;
use Sixincode\HivePosts\Http\Livewire\Traits\HasImage;
use Sixincode\HivePosts\Http\Livewire\Traits\HasOwner;
use Sixincode\HivePosts\Http\Livewire\Traits\HasPreview;
use Sixincode\HivePosts\Http\Livewire\Traits\HasSeo;
use Sixincode\HivePosts\Http\Livewire\Traits\HasUrls;

class CreatePost extends Component
{
  use HasTaxonomies;
  use HasComponentElement;
  use HasImage;
  use HasOwner;
  use HasPreview;
  use HasSeo;
  use HasUrls;

  public Post $post;
  public $post_title;
  public $post_content;
  public array $listsForFields;

  public function mount($post = null)
  {
    $this->mountHasPreview();
    $this->mountHasComponentElement();
    $this->mountHasTaxonomies();
    $this->mountHasSeo();
    $this->mountHasOwner();
    $this->mountHasImage();
    $this->mountHasUrls();
  }

  public function saveElement($element)
  {
    $element = $this->saveElementHasTaxonomies($element);
    $element = $this->saveElementHasOwner($element);
    // $element = $this->saveElementHasUrls($element);
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
        "post_title"   => "bail|required|string|min:2",
        "post_content" => "required|min:12",
        // 'urls.*'   => 'url',
        // 'urls'    => 'nullable|array',
     ]);
     return $this->savingPost($validatedData);
  }

  private function savingPost(array $postData)
  {
     $newPost = Post::create([
       'title'   => $postData['post_title'],
       'content' => $postData['post_content']
     ]);
     $elementWithRelations = $this->saveElement($newPost);
     return redirect()->route('user.posts.index');
  }
}
