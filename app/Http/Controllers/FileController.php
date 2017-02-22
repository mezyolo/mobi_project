<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	// TODO : Manage a timestamp for deleting from the File Table
	// TimeStamp Constant

   	public function create($name, $link)
   	{
   		// Create entry (with a timestamp)
   	}

   	public function fetchById($id)
   	{
   		// Fetch the file to get the link for the download
   	}

   	public function deleteOldFiles() {
   		// Delete all the old files from the table where the timestamp is over
   	}

  	// TODO : Generate random string for the download link
}
