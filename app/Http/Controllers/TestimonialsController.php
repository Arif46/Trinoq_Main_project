<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Testimonials;
use Image;
use Session;

class TestimonialsController extends Controller
{
    public function testimonialspageadd()
    {
        return view('Admin.page.testimonials.testimonialpage');
    }
    public function create(Request $request)
    {
        Validator::make($request->all(), [
            'name'=>'required',
            'title'=>'required',
            'comment_details'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
        ])->validate();

        $testimonialsadd = new Testimonials;
        $testimonialsadd->name=$request->name;
        $testimonialsadd->title=$request->title;
        $testimonialsadd->comment_details=$request->title;
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make( $image )->resize( 1900, 1140 )->save( public_path( 'back_end/image/' . $filename ) );
            $testimonialsadd->image = $filename;
        }
   
        $testimonialsadd->save();

        return back()->with('message','Testimonials information Sucessfully added');    

    }

    public function GetAllTestimonials()
    {
        $alltestimonials=Testimonials::all();
        return view('Admin.page.testimonials.alltestimonials',compact('alltestimonials'));
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
              Testimonials::where('id',$data['portfolio_id'])->update(['status' =>$status]);
             return response()->json(['status'=>$status,'id' =>$data['portfolio_id']]);
        }

    }
    public function delettestimonials($id)
    {
        Testimonials::where('id',$id)->delete();
        $message="Testimonials sucessfully deleted";
        Session::flash('message',$message);
        return redirect()->back();
    }
}
