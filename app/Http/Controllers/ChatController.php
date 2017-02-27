<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat

class ChatController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function createChatPeople($senderId, $receiverId)
   	{
      $chat = new Chat

      $chat->sender_id = $senderId;
      $chat->receiver_id = $receiverId;
      $chat->room_id = null;

      $chat->save();
   	}

    public function createChatRoom($senderId, $roomId)
   	{
      $chat = new Chat

      $chat->sender_id = $senderId;
      $chat->receiver_id = null;
      $chat->room_id = $roomId;

      $chat->save();
    }

    public function deleteChatById($chatId)
    {
      $user = User::find($chatId);
      $user->delete();
    }

}
