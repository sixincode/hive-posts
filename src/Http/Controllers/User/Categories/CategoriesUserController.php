<?php

namespace Sixincode\HivePosts\Http\Controllers\User\Categories;

use Illuminate\Routing\Controller;
use Sixincode\HivePosts\Models\Category;

class CategoriesUserController extends Controller
{
  public function indexUserCategory()
  {
    return view('hive-posts::user.categories.indexUserCategory');
  }

  public function createUserCategory()
  {
    return view('hive-posts::user.categories.createUserCategory');
  }

  public function editUserCategory($category)
  {
    return view('hive-posts::user.categories.editUserCategory',[
      'category' => $category
    ]);
  }

  public function showUserCategory($category)
  {
    return view('hive-posts::user.categories.showUserCategory',[
      'category' => $category
    ]);
  }

  public function deleteUserCategory($category)
  {

  }

}
