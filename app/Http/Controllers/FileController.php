<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function create($name, $link, $size)
   	{
   		// Create entry (with a timestamp)
         DB::insert('insert into files (name, link, size) values (:name, :link, :size)', ['name' => $name, 'link' => $link, 'size' => $size]);
   	}

   	public function fetchById($id)
   	{
   		// Fetch the file to get the link for the download
         $file = DB::select('select * from files where id = :id', ['id' => $id]);
   	}

   	public function deleteOldFiles() {
   		// Delete all the old files from the table where the timestamp is over
         // $deleted = DB::delete('delete from files');
   	}

  	// TODO : Generate random string for the download link
}
