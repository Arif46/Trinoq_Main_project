@extends('Admin.maindashboard')
@section('maincontent')

<form method="post" action="{{url('/TeamdataAdd')}}" enctype="multipart/form-data">   
     <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <h2>Trinoq Member  Add </h2>
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

                    <label>position</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="position"  id="position" class="form-control">
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