<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomTagController extends Controller
{
    public function create($roomId, $tagsId) 
    {
    	//foreach Tag � insert(room, tagId)
    }

    public function delete() 
    {

    }

    public function deleteTags($roomId) 
    {
    	// Retourne les Id des Tags supprim�s, ils seront d�cr�ment�s
    }
}