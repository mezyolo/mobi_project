<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create($content, $date_send, $chat_id, $file_id)
    {
    	// Create entry for message depends the content if it's a string message or a file
        $message = new Message;
        $message->content = $content;
        $message->date_time = $date_send;
        $message->caht_id = $chat_id;
        $message->file_id = $file_id;
        $message->save();
    	
    }

    public function fecthByChat($chat_id)
    {
    	// Fetch all messages from chat id
        $messages = App\Message::where('chat_id', $chat_id)
               ->get();
    }

}
