<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Validator;
use Session;
use Image;

class AboutController extends Controller
{
    public function about()
    {
        return view('front_end.layouts.page.about');
    }
    public function contact()
    {
      return view('front_end.layouts.page.contact');  
    }

    public function create(Request $request)
    {
        $Contactadd= new About;
        $Contactadd->name =$request->name;
        $Contactadd->email =$request->email;
        $Contactadd->phone =$request->phone;
        $Contactadd->message =$request->message; 
        $Contactadd->save();
        return back()->with('message','Thank You!Your Information Sucessfully Added');

    }

    public function getallContactuser()
    {
        $allcontactinfo=About::all();
        return view('Admin.page.contact.allcontact',compact('allcontactinfo'));
    }
    public function deletecontact($id)
    {
        About::where('id',$id)->delete();
        $message="Contact info sucessfully deleted";
        Session::flash('message',$message);
        return redirect()->back();
    }
}
