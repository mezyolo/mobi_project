<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User

class UserController extends Controller
{

   	public function createUser($info)
   	{
      $user = new User;

      $user->username = $info[0];
      $user->password = $info[1];
      $user->alias = $info[2];
      $user->email = $info[3];

      $user->save();
   	}

   	public function fetchById($userId)
   	{
      $user = User::find($userId);
      //return view('user.index', ['users' => $users]);

   	}

   	public function deleteById($userId)
    {
      $user = User::find($userId);
      $user->delete();
       	}

    public function UpdateUser($userId,$newInfo)
    {
      $user = User::find($userId);

      $user->username = $newInfo[0];
      $user->password = $newInfo[1];
      $user->alias = $newInfo[2];
      $user->email = $newInfo[3];

      $user->save();
    }

}
