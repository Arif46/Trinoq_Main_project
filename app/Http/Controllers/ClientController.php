<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Validator;
use Image;
use Session;

class ClientController extends Controller
{
    public function pageadd()
    {
         return view('Admin.page.client.clientadd');
    }
    public function create(Request $request)
    {
        Validator::make($request->all(), [
            'company_name'=>'required',
            'company_address'=>'required',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'details'=>'required',

        ])->validate();

        $clientinformationadd = new Client;
        $clientinformationadd->company_name=$request->company_name;
        $clientinformationadd->company_address=$request->company_address;
        if ( $request->hasFile( 'company_logo' ) ) {
            $image = $request->file( 'company_logo' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 90, 44 )->save( public_path( 'back_end/company_logo/' . $filename ) );
            $clientinformationadd->company_logo = $filename;
        }
        $clientinformationadd->details=$request->details;
        $clientinformationadd->save();

        return back()->with('message','Client information Sucessfully added'); 
        
    }


    public function getallclient()

    {
        $allclient=Client::get();
        return view('Admin.page.client.allclient',compact('allclient'));
    }

    public function changeclientstatus(Request $request)
    {
        if($request->ajax()){
            $data=$request->all();
             if($data['status'] =='Active'){
                 $status = 0;
             }else{
                 $status = 1;
             }
              Client::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }

    }


    public function deleteclient($id)
    {
        Client::where('id',$id)->delete();
        $message="Sucessfully Delete Client Information";
        Session::flash('message',$message);
        return redirect()->back();

    }
}
