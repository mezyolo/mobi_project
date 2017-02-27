<?php

namespace App\Http\Controllers;

use App\RoomTag;
use Illuminate\Http\Request;

class RoomTagController extends Controller
{
    public function create($roomId, $tagsId) 
    {
        foreach ($tagsId as $tagId) {
            $roomTag = new RoomTag;
            $roomTag->room_id = $roomId;
            $roomTag->tag_id = $tagId;
            $roomTag->save();
        }
    }

    public function deleteTags($roomId) 
    {
        $roomTags = App\RoomTag::where('room_id', $roomId)
               ->get();
        foreach ($roomTags as $roomTag) {
            App\RoomTag::destroy($roomTags->id)
        }
    }
}