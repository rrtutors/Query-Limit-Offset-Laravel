<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//import database class
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index()
    {
        return DB::select("SELECT name, email, address FROM  users ORDER BY id  LIMIT 5 OFFSET 3");


 

  /* returns Ony Id value */
  $id = Input::get('id');
    

  /* returns array of entire input query value */
  $query = Input::all();
    }



    public function wall(Request $request)
{
  /* returns Ony Id value */
  $id = $request->input('id');
    

  /* returns array of entire input query value */
  $query = $request->all();
    

 
}
}
