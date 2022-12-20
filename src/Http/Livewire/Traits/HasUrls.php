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
  }

  public function saveElementHasUrls($elementSaving)
  {
    $url = strpos($url, 'http') !== 0 ? "https://$this->url" : $this->url;
    if(filter_var($url, FILTER_VALIDATE_URL)) {
    //valid
    } else {
        //not valid
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
