<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend

class FriendController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function createFriendRequest($userId, $friendId)
   	{
      $friend = new Friend;

      $friend->user_id = $userId;
      $friend->friend_id = $friendId;
      $friend->is_friend = false;

      $friend->save();
    }

    public function acceptFriendRequest ($userId, $friendId)
    {
      $friend = Friend::
                  where('$user_id',$userId)
                  ->where('friend_id', $friendId)
                  ->get();

      $friend->is_friend = true;

      $friend->save();
    }

    public function declineFriendRequest ($userId, $friendId){
      $friend = Friend::
                  where('$user_id',$userId)
                  ->where('friend_id', $friendId);
      $friend->delete();
    }
}
