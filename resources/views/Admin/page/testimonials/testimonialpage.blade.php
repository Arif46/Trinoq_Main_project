@extends('Admin.maindashboard')
@section('maincontent')

<form method="post" action="{{url('/TestimonialInsert')}}" enctype="multipart/form-data">   
     <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <h2>Testimonials Add </h2>
    </div>
    <div class="container-fulid">
        <div class="col-lg-9 col-md-9 col-12">
            <div class="card card-info">
                @if(Session::has('message'))
                <div class="card-header" style="color:rgb(33, 26, 144)">
                  {{ Session::get('message') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                @csrf
                <div class="card-body">
                 
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label> Name</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="name"  required id="name" class="form-control">
                    </div>


                    <label>title</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="title"  id="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Comment details</label>
            
                        <textarea class="form-control"   name="comment_details"  id="comment_details" cols="30" rows="10"></textarea>
                        </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" id="image"  class="form-control my-colorpicker1">
                      </div>

                  
                    <!-- /.input group -->
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->
               
              </div>
            

        </div>

    </div>
    <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <button type="submit" class="btn btn-success btn-lg btn-block">Save</button>
    </div>
</form>
    
@endsection