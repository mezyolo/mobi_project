
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

    // Cr�er le lexique
    public function index()
    {
    	echo "S�lectionner tous les tags";
    }

    // Lors de la cr�ation d'une room, incr�mente les compteurs
    public function incrementer($tags) {

    }

    // Lors de la suppression d'une room, d�cr�mente
    public function decrement($tags) {

    }

    // V�rifie si un tag existe
    public function exists($tag) {

    }
}