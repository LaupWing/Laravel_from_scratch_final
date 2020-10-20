<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
   public function store(User $user)
   {
      current_user()->toggleFollower($user);

      return back();
   }
}
