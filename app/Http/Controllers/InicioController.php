<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class InicioController extends Controller
{


public function __construct(){
	$this->middleware('auth');
	$this->middleware('revalidate');
}

public function show()
    {
    	

       return \View::make('dashboard');
       
    }


}
