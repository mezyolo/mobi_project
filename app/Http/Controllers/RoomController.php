<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
	// Cr�ation d'une room
	// parameters : Nom de room, limit, publicOrPrivate
    public function create($nom, $limit, $public) // - 1
    {
    	
    	// G�re tags
    }

    // Suppression d'une room
    public function delete() 
    {
    	// G�re tags
    }

    // Modification d'une room
    public function edit($nom, $limit, $public)
    {
    	
    }

    public function getById($id)
    {
    	// Retourne la room avec l'ID correspondant
    }

    // S�lectionner tous les rooms
    public function index()
    {

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