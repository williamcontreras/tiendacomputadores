<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    //
public function __construct(){
	$this->middleware('auth');
	$this->middleware('revalidate');
}

public function show()
    {
    	

       return \View::make('bandalo');
       
    }


}
