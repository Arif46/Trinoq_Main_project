@extends('admin.maindashboard')
@section('maincontent')
<form method="post" action="{{url('/Portfolioinsert')}}" enctype="multipart/form-data">   
     <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <h2>Portfolio Web Add </h2>
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
                    <label>Portfolio Web image Add</label>
                    <input type="file" name="portfolio_image" id="portfolio_image" class="form-control my-colorpicker1">
                  </div>
                  <!-- /.form group -->
  
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Portfolio Type</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="Portfolio_type"  id="Portfolio_type" class="form-control">   
                    </div>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label>Link Add </label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="link"  id="link" class="form-control">   
                    </div>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label>details</label>
        
                    <textarea class="form-control"   name="details"  id="details" cols="30" rows="10"></textarea>
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