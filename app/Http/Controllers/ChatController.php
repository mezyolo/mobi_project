<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function createChatPeople($senderId, $receiverId)
   	{
   		// Request create chat with someone
   	}

    public function createChatRoom($senderId, $roomId)
   	{
   		// Request create chat with someone
   	}

    public function deleteChatById($chatId)
    {
      // Request delete a chat
    }

}
