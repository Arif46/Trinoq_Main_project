@extends('admin.maindashboard')
@section('maincontent')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
       
            <div class="card">
              @if(Session::has('message'))
              <div class="card-header">
                <h3 class="card-title"> {{ Session::get('message') }}</h3>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th> Name</th>
                    <th>title</th>
                    <th>Comment details</th>
                    <th>image</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($alltestimonials as $view_testimonials )
                    <tr>
                      <td>{{ $view_testimonials->id }}</td>
                      <td>{{ $view_testimonials->name }}</td>
                      <td>{{ $view_testimonials->title }}</td>
                      <td>{{ $view_testimonials->comment_details }}</td>
                      <td><img style="width:100px;" src="{{asset('back_end/image/'. $view_testimonials->image) }}"></td>
                     
                      <td>
                        @if($view_testimonials->status ==1 )
                        <a class="UpdateTestiminialsStatus" id="portfolio-{{$view_testimonials->id}}" portfolio_id="{{$view_testimonials->id}}" href="javascript:void(0)">Active</a> 
                       @else 
                        <a class="UpdateTestiminialsStatus" id="portfolio-{{$view_testimonials->id}}" portfolio_id="{{$view_testimonials->id}}" href="javascript:void(0)">InActive</a> 
                       @endif
                      </td>
                     
                      <td>
                        <button type="button" class="btn btn-info">Edit</button>
                      <a href="javascript:void(0)" class="confirmDelete" record="Testimonials" recordid="{{$view_testimonials->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
                      </td>
                    </tr>  
                    @endforeach
                
                
                  </tfoot>
                </table>
             
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
    
@endsection