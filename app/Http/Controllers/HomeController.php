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
        $trinoqteam=Team::where('status',1)->OrderBy('id','ASC')->take(8)->get();
        $trinoqclient=Client::where('status',1)->OrderBy('id','DESC')->take(6)->get();
        $uidesign=Ui::where('status',1)->OrderBy('id','DESC')->take(2)->get();
        $Mobiledesign=Mobile::where('status',1)->OrderBy('id','DESC')->take(2)->get();
        $PortfolioWebdesign=Portfolio::where('status',1)->OrderBy('id','DESC')->take(2)->get();
        $testimonialsview=Testimonials::where('status',1)->OrderBy('id','DESC')->take(4)->get();
        return view('front_end.layouts.page.content',compact('trinoqteam','trinoqclient','uidesign','Mobiledesign','PortfolioWebdesign','testimonialsview'));

    }
    public function getuiallinfo($id)
    {
        $uidetails=Ui::where('id',$id)->get();
         
       return view('front_end.layouts.page.uidetails',compact('uidetails'));
      
    }
    public function getmobileallinfo($id)
    {
        $mobiledetails=Mobile::where('id',$id)->get();
        return view('front_end.layouts.page.mobiledetails',compact('mobiledetails'));
    }
    public function getweballinfo($id)
    {
        $webdetails=Portfolio::where('id',$id)->get();
        return view('front_end.layouts.page.webdetails',compact('webdetails'));
    }

  public function portfolioindividualpage()
  {
    $uidesign=Ui::where('status',1)->OrderBy('id','DESC')->take(10)->get();
    $Mobiledesign=Mobile::where('status',1)->OrderBy('id','DESC')->take(10)->get();
    $PortfolioWebdesign=Portfolio::where('status',1)->OrderBy('id','DESC')->take(10)->get();
    return view('front_end.layouts.page.portfolio',compact('uidesign','Mobiledesign','PortfolioWebdesign'));  
  }
  public function teamindividualpage()
  {

    return view('front_end.layouts.page.team'); 

  }


    
}
