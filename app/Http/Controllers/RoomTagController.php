<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomTagController extends Controller
{
    public function create($roomId, $tagsId) 
    {
    	//foreach Tag — insert(room, tagId)
        foreach ($tagsId as $tag) {
            DB::insert('insert into room_tag (room_id, tag_id) values (:room, :tag)', ['room' => $roomId, 
            'tag' => $tag]);
        }
    }

    public function delete() 
    {

    }

    public function deleteTags($roomId) 
    {
    	DB::delete('delete from tag where room_id = :roomId', ['roomId' => $roomId]);
    }
}