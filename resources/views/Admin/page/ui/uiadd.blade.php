@extends('Admin.maindashboard')
@section('maincontent')

<form method="post" action="{{url('/UiInsert')}}" enctype="multipart/form-data">   
     <div class="col-lg-9 col-md-9 col-12 text-center" style="font-family:Comic Sans MS, cursive, sans-serif">
        <h2>Portfolio UI Add </h2>
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
                    <label>Portfolio UI Image Add</label>
                    <input type="file" name="portfolio_ui_image" id="portfolio_ui_image"  class="form-control my-colorpicker1">
                  </div>
                  <div class="form-group">
                    <label>Portfolio Ui Type </label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="portfolio_ui_type"  id="portfolio_ui_type" class="form-control">
  
                    </div>

    
                  </div>
                  <div class="form-group">
                    <label>Link Add (Optional)</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" name="link"  id="link" class="form-control">
  
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Portfolio Ui  Details</label>
        
                    <textarea class="form-control"  name="details"  id="" cols="30" rows="10"></textarea>
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