<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supervisor_controller extends Controller
{
    
     public function create()  {  
          
      return view('supervisor.register');
      
    }  
}
