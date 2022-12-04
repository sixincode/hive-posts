<?php

namespace Sixincode\HivePosts\Http\Controllers\Posts;

use Illuminate\Routing\Controller;
use Sixincode\HivePosts\Models\Post;

class PostsUserController extends Controller
{
  public function indexUserPost()
  {
    return view('hive-posts::user.posts.indexUserPost');
  }

  public function createUserPost()
  {
    return view('hive-posts::user.posts.createUserPost');
  }

  public function showUserPost()
  {
    return view('hive-posts::user.posts.showUserPost');
  }

  public function deleteUserPost()
  {

  }

}
