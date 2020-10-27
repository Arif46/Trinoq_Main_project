<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Ui;
use Image;
Use Session;

class UiController extends Controller
{
    public function create()
    {
       return view('admin.page.ui.uiadd');

    }
    public function index(Request $request)
    {
        Validator::make($request->all(), [
            'portfolio_ui_image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'portfolio_ui_type'=>'required',
        ])->validate();

        $portfoliouiadd = new Ui;
      
        if ( $request->hasFile( 'portfolio_ui_image' ) ) {
            $image = $request->file( 'portfolio_ui_image' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/portfolio_ui_image/' . $filename ) );
            $portfoliouiadd->portfolio_ui_image = $filename;
        }
        $portfoliouiadd->portfolio_ui_type=$request->portfolio_ui_type;
        $portfoliouiadd->link=$request->link;
        $portfoliouiadd->details=$request->details;
       
        $portfoliouiadd->save();

        return back()->with('message','Portfolio UI data Sucessfully added');  
    }

    public function GetUilist()
    {
        $AllUilist=Ui::get();
        return view('admin.page.ui.uilist',compact('AllUilist'));
    }
    public function GetUiliststatus(Request $request)
    {
        if($request->ajax()){
            $data=$request->all();    
             if($data['status'] =='Active'){
                 $status = 0;
             }else{
                 $status = 1;
             }
              Ui::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }
    }

    public function deleteui($id)

    {
        Ui::where('id',$id)->delete();
        $message="Sucessfully Ui Deleted";
        Session::flash('message',$message);
        return redirect()->back();

    }
}
