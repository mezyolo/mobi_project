<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

   	public function createUser($info)
   	{
   		// Send information in an array to the database
   	}

   	public function fetchById($id)
   	{
   		// Request fetch user by his id
   	}

   	public function deleteById($id)
    {
      // Request delete a user by his id
   	}

    public function UpdateUser($id,$newInfo)
    {
      // Send updated information to database
    }

}
