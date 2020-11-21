<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Validator;
use Image;
use Session;

class TeamController extends Controller
{
    public function teampageadd()
    {
        return view('Admin.page.team.teamadd');
    }

    public function create(Request $request)
    {
        Validator::make($request->all(),[
            
            'name'=>'required',
             'position'=>'required',
             'image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ])->validate();


        $teamadd= new Team;
        $teamadd->name =$request->name;
        $teamadd->position=$request->position;
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 600, 560 )->save( public_path( 'back_end/team_image/image/' . $filename ) );
            $teamadd->image = $filename;
        }
        $teamadd->save();
        return back()->with('message','Team Member Data Successfully add');


    }

    public function GetAllMember()
    {
        $allteammember=Team::get();
        return view('Admin.page.team.allteammember',compact('allteammember'));
    }

    public function changestatus(Request $request)
    {
        
        if($request->ajax()){
            $data=$request->all();
             if($data['status'] =='Active'){
                 $status = 0;
             }else{
                 $status = 1;
             }
              Team::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }
    }

    public function deleteteam($id)
    {
        Team::where('id',$id)->delete();
        $message="Team Member data sucessfully deleted";
        Session::flash('message',$message);
        return redirect()->back();

    }
}
