<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLogin;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
    

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function procesa(StoreLogin $request)
    {
        //

 $credenciales = [
        'email' => $request['email'],
        'password' => $request['password'],
    ];

     $user = User::find(1);

    if (Auth::attempt($credenciales) ){


    $useri = Auth::user()->idrol;

    switch ($useri){

    case 3:
    return redirect()->intended('inicio');

    case 4:
    return redirect()->intended('bandalo');

    


    }
   }
   else
   {
    Session::flush();
    Auth::logout();
    return redirect('/')->withErrors(['fallo comuniquese con administrador william contreras']);
   }
 }

       // return dd(Auth::attempt($credenciales));
            // Authentication passed...
    
        //(Auth::attempt(['email' => $request['email'],'password' => $request['password']])) ;
   
      //Auth::attempt($credentials))
        //Auth::loginUsingId(1)

        //Auth::validate($credenciales)

public function show()
    {
       return \View::make('login');
    }

    public function salir()
        {
            Auth::logout();
     
            
            return redirect()->route('login');
        }

    }

  

