<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use Validator;
use Image;
use Session;

class MobileController extends Controller
{
    public function create()
    {
        return view('admin.page.mobile.mobileadd');
    }
    public function index(Request $request)
    {
        Validator::make($request->all(), [
            'portfolio_mobile_image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'portfolio_mobile_Type'=>'required',
        ])->validate();

        $portfolioweb = new Mobile;
        if ( $request->hasFile( 'portfolio_mobile_image' ) ) {
            $image = $request->file( 'portfolio_mobile_image' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/portfolio_mobile_image/' . $filename ) );
            $portfolioweb->portfolio_mobile_image = $filename;
        }
        $portfolioweb->portfolio_mobile_Type=$request->portfolio_mobile_Type;
        $portfolioweb->link=$request->link;
        $portfolioweb->details=$request->details;
       
        $portfolioweb->save();

        return back()->with('message','Portfolio Web data Sucessfully added');   

    }

    public function GetMobilelist()
    {
        $allmobilelist=Mobile::get();
        return view('admin.page.mobile.mobilelist',compact('allmobilelist'));
    }
    public function GetMobileliststatus(Request $request)
    {
        if($request->ajax()){
            $data=$request->all();
             if($data['status'] =='Active'){
                 $status = 0;
             }else{
                 $status = 1;
             }
              Mobile::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }
    }
    public function deletemobile($id)
    {
        Mobile::where('id',$id)->delete();
        $message="profolio Mobile sucessfully deleted";
        Session::flash('message',$message);
        return redirect()->back();
    }
}
