<?php

namespace Sixincode\HivePosts\Components\Owner;

use Illuminate\View\Component;

class AddOwner extends Component
{
  public $owner;

  public function __construct(
    array $owner = []
  )
  {

  }

  public function render()
  {
    return view('hive-posts::components.owner.add-owner');
  }
}
