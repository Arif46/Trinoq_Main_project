<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Team;
use App\Ui;
use App\Mobile;
use App\Portfolio;
use App\Testimonials;


class HomeController extends Controller
{
    public function index()
    {
        $trinoqteam=Team::where('status',1)->OrderBy('id','DESC')->get();
        $trinoqclient=Client::where('status',1)->OrderBy('id','DESC')->take(6)->get();
        $uidesign=Ui::where('status',1)->OrderBy('id','DESC')->take(8)->get();
        $Mobiledesign=Mobile::where('status',1)->OrderBy('id','DESC')->take(8)->get();
        $PortfolioWebdesign=Portfolio::where('status',1)->OrderBy('id','DESC')->take(8)->get();
        $testimonialsview=Testimonials::where('status',1)->OrderBy('id','DESC')->take(4)->get();
        return view('front_end.layouts.page.content',compact('trinoqteam','trinoqclient','uidesign','Mobiledesign','PortfolioWebdesign','testimonialsview'));

    }
  


    
}
