<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function create($name, $link, $size)
   	{
   		// Create entry (with a timestamp)
         $file = new File;
         $file->name = $name;
         $file->link = $link;
         $file->size = $size;
         $file->save();
   	}

   	public function fetchById($id)
   	{
   		// Fetch the file to get the link for the download
         $file = App\File::find($id);
   	}

   	public function deleteOldFiles() {
   		// Delete all the old files from the table where the timestamp is over
         // $deleted = DB::delete('delete from files');
   	}

  	// TODO : Generate random string for the download link
}
