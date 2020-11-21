<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;
use Image;
use Session;

class PortfolioController extends Controller
{
    public function create()
    {
         return view('Admin.page.portfolioadd');
    }
    public function index(Request $request)
    {
        Validator::make($request->all(), [
            'portfolio_image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg',
            'Portfolio_type' => 'required', 
        ])->validate();

        $portfolioadd = new Portfolio;
        if ( $request->hasFile( 'portfolio_image' ) ) {
            $image = $request->file( 'portfolio_image' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 400, 380 )->save( public_path( 'back_end/portfolio_image/' . $filename ) );
            $portfolioadd->portfolio_image = $filename;
        }
        $portfolioadd->Portfolio_type=$request->Portfolio_type;
        $portfolioadd->link=$request->link;
        $portfolioadd->details=$request->details;
        $portfolioadd->save();

        return back()->with('message','Portfolio data Sucessfully added');

    }

    public function getportfolio()
    {
        $allportfolio=Portfolio::all();
        return view('Admin.page.allviewportfolio',compact('allportfolio'));

    }
    public function portfolioUpdate(Request $request)
    {
        if($request->ajax()){
            $data=$request->all();
             if($data['status'] =='Active'){
                 $status = 0;
             }else{
                 $status = 1;
             }
              Portfolio::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }
    }

    public function portfolioDelete($id)
    {
          Portfolio::where('id',$id)->delete();
          $message="profolio sucessfully deleted";
          Session::flash('message',$message);
          return redirect()->back();
 
    }
}
