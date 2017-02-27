
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    // Si y'existe pas
    public function create($name) 
    {
        // TODO : get id (SEQ?)
        // TODO : ajouter le field pour la quantité
    	DB::insert('insert into tag (tag_id, name) values (:id, :name)', ['id' => $id, 
            'name' => $name]);
    }

    // Admin qui delete un tag
	public function delete($id) 
	{
    	$deleted = DB::delete('delete from tag where id = :id', ['id' => $id]);
    }

    // Créer le lexique
    public function index()
    {
    	$tags = DB::select('select * from tag');
        return view('tag.index', ['tags' => $tags]);
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