<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
	// Cr�ation d'une room
	// parameters : Nom de room, limit, publicOrPrivate
    public function create($name, $limit, $public) // - 1
    {
        $room = new Room;
        $room->name = $name;
        $room->is_public = $public;
        $room->limit_users = $limit;
        $room->save();
    }

    // Suppression d'une room
    public function delete($id) 
    {
        App\Room::destroy($id);
    }

    // Modification d'une room
    public function edit($id, $name, $limit, $public)
    {
        $room = App\Room::find($id);
        $room->name = $name;
        $room->limit_users = $limit;
        $room->is_public = $public;
        $room->save();
    }

    public function getById($id)
    {
        $room = App\Room::find($id);
        return view('room.index', ['room' => $room]);
    }

    // S�lectionner tous les rooms
    public function index()
    {
        $rooms = Room::all();
        return view('home')->with('rooms', $rooms);
    }

    // S�lectionner les plus r�centes (10?)
    public function indexRecent()
    {
    	
    }

    // S�lectionner les plus populaires (10?)
    public function indexPopular()
    {

    }
}