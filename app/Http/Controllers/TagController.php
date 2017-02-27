
<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Si y'existe pas
    public function create($name) 
    {
        $tag = new Tag;
        $tag->name = $name;
        $tag->quantity = 1;
        $tag->save();
    }

    // Admin qui delete un tag
	public function delete($id) 
	{
        App\Tag::destroy($id);
    }

    // Créer le lexique
    public function index()
    {
    	$tags = App\Tag::all();
        return view('tag.index', ['tags' => $tags]);
    }

    // Lors de la création d'une room, incrémente les compteurs
    public function increment($tags) {
        foreach ($tags as $tag) {
            $dbTag = App\Room::find($tag->id);
            $dbTag->quantity = $tag->quantity + 1;
            $dbTag.save();
        }
    }

    // Lors de la suppression d'une room, décrémente
    public function decrement($tags) {
        foreach ($tags as $tag) {
            $dbTag = App\Room::find($tag->id);
            $dbTag->quantity = $tag->quantity - 1;
            $dbTag.save();
        }
    }

    // Vérifie si un tag existe
    public function exists($tag) {

    }
}