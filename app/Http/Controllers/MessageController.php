<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create($content, $date_send, $chat_id, $file_id)
    {
    	// Create entry for message depends the content if it's a string message or a file
    }

    public function fecthByChat($chat_id)
    {
    	// Fetch all messages from chat id
    }

}
