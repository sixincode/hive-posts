<?php

namespace Sixincode\HivePosts\Http\Livewire\Traits;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

trait HasUrls
{
  public array $urls;

  public function mountHasUrls()
  {
    $this->listsForFields['urls'] = [];
    $this->urls = [];
  }

  public function saveElementHasUrls($elementSaving)
  {
    foreach($this->urls as $url){
      $httpexists = strpos($url, 'http') !== 0 ? "https://".$this->url : $url;
      // Remove all illegal characters from a url
      $url = filter_var($url, FILTER_SANITIZE_URL);

      if(filter_var($url, FILTER_VALIDATE_URL)) {
      //valid
      } else {
          //not valid
      }
    }

    // 'urls.*.link' => Rule::forEach(function ($value, $attribute) {
    //       return [
    //           Rule::exists(Company::class, 'id'),
    //           new HasPermission('manage-company', $value),
    //       ];
    //   }),

    return $elementSaving->urls = $this->urls;
  }

  public function viewElementHasUrls($elementViewing)
  {
    // $this->template = 'default';
  }

  public function editElementHasUrls($elementEditing)
  {

  }
}
