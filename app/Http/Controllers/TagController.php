<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    // Si y'existe pas
    public function create() 
    {
    	echo "Creation de tag";
    }

    // Admin qui delete un tag
	public function delete() 
	{
    	echo "Supression de tag";
    }

    // Créer le lexique
    public function index()
    {
    	echo "Sélectionner tous les tags";
    }

    // Lors de la création d'une room, incrémente les compteurs
    public function incrementer($tags) {

    }

    // Lors de la suppression d'une room, décrémente
    public function decrement($tags) {

    }

    // Vérifie si un tag existe
    public function exists($tag) {

    }
}
