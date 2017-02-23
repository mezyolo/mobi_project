<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function createFriendRequest($userId, $friendId)
   	{
   		// Create entry (with a timestamp)
   	}

    public function acceptFriendRequest ($userId, $friendId)
    {
      // Request to accept friend Request
    }

    public function declineFriendRequest ($userId, $friendId){
      // Request to decline friend request
    }
}
