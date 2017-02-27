<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
	// Création d'une room
	// parameters : Nom de room, limit, publicOrPrivate
    public function create($name, $limit, $public) // - 1
    {
        // TODO : Get ID (from SEQ?)
    	DB::insert('insert into room (room_id, name, is_public, limit_users) values (:id, :name, :public, :limit)', ['id' => $id, 
            'name' => $name, 'public' => $public, 'limit' => $limit]);
    }

    // Suppression d'une room
    public function delete($id) 
    {
    	$deleted = DB::delete('delete from room where id = :id', ['id' => $id]);
    }

    // Modification d'une room
    public function edit($id, $name, $limit, $public)
    {
        $affected = DB::update('update room set name = :name, limit_users = :limit, is_public = :public where id = :id',
         ['name' => $name, 'limit' => $limit, 'public' => $public, 'id' => $id]);	
    }

    public function getById($id)
    {
    	$room = DB::select('select * from room where id = :id', ['id' => $id]);
        return view('room.index', ['room' => $room]);
    }

    // Sélectionner tous les rooms
    public function index()
    {
        $rooms = DB::select('select * from room');
        return view('room.index', ['rooms' => $rooms]);
    }

    // Sélectionner les plus récentes (10?)
    public function indexRecent()
    {
    	
    }

    // Sélectionner les plus populaires (10?)
    public function indexPopular()
    {

    }
}