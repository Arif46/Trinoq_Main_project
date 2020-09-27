<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthController extends Controller
{
 
   // contructor function use kora hoice reload dawar por jeno change na hoi
    public function __construct() {

        $this->middleware('guest');

     }

    public function index()
    {
        return view('Admin.login.mainlogin');

    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        // dd($credentials);die;

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/dashboard');
        }
          Session::flash('success_message',' Your Email Or PassWord Incorect!');
         return redirect('/login');


    }
   
}
