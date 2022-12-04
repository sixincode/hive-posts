<?php

namespace Sixincode\HivePosts\Http\Middlewares;

use Illuminate\Http\Request;
use Closure;

class HiveCommunityUserAllowPosts
{
  public function handle(Request $request, Closure $next)
  {
    if(auth()->user())
    {
      return $next($request);
    }
    return redirect()->route('user.home');
  }
}
