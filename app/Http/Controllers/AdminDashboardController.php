<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminDashboard;
use Validator;
use Auth;

class AdminDashboardController extends Controller
{
//     public function __construct() {

//         $this->middleware('auth'); 

//   }

    public function dashboard()
    {
        return  view('Admin.maindashboard');
    }
    public function logout()    
    {
        Auth::logout();

      return redirect('/login');
    }
 
    
}
