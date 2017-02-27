<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create($content, $date_send, $chat_id, $file_id)
    {
    	// Create entry for message depends the content if it's a string message or a file
   		DB::insert('insert into messages (content, date_time, chat_id, file_id) values (:content, :date_time, :chat_id, :file_id)', ['content' => $content, 'date_time' => $date_send, 'chat_id' => $chat_id, 'file_id' => $file_id]);
    	
    }

    public function fecthByChat($chat_id)
    {
    	// Fetch all messages from chat id
         $files = DB::select('select * from messages where chat_id = :chat_id', ['chat_id' => $chat_id]);
    }

}
