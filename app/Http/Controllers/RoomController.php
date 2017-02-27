<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
	// Création d'une room
	// parameters : Nom de room, limit, publicOrPrivate
    public function create($nom, $limit, $public) // - 1
    {
    	
    	// Gère tags
    }

    // Suppression d'une room
    public function delete() 
    {
    	// Gère tags
    }

    // Modification d'une room
    public function edit($nom, $limit, $public)
    {
    	
    }

    public function getById($id)
    {
    	// Retourne la room avec l'ID correspondant
    }

    // Sélectionner tous les rooms
    public function index()
    {

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