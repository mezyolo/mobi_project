
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    // Si y'existe pas
    public function create($name) 
    {
        // TODO : get id (SEQ?)
        // TODO : ajouter le field pour la quantit�
    	DB::insert('insert into tag (tag_id, name) values (:id, :name)', ['id' => $id, 
            'name' => $name]);
    }

    // Admin qui delete un tag
	public function delete($id) 
	{
    	$deleted = DB::delete('delete from tag where id = :id', ['id' => $id]);
    }

    // Cr�er le lexique
    public function index()
    {
    	$tags = DB::select('select * from tag');
        return view('tag.index', ['tags' => $tags]);
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