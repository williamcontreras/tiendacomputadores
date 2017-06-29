<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class CerrarController extends Controller
{
    //


    

    
    public function salir()
    	{

return redirect()->route('login');
    	}
}
