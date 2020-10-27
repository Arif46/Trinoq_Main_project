@extends('admin.maindashboard')
@section('maincontent')

<form method="post" action="{{url('/clientinsert')}}" enctype="multipart/form-data">   
     <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <h2>Client Information Add </h2>
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
                    <label>Company Name</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="company_name"  required id="company_name" class="form-control">
                    </div>


                    <label>company Address</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="company_address"  id="company_address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Company Logo</label>
                        <input type="file" name="company_logo" id="company_logo"  class="form-control my-colorpicker1">
                      </div>

                    <div class="form-group">
                    <label>Company Details</label>
        
                    <textarea class="form-control"   name="details"  id="details" cols="30" rows="10"></textarea>
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