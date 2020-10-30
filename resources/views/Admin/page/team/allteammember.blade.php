@extends('Admin.maindashboard')
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
                    <th>Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($allteammember as $view_teammember )
                    <tr>
                      <td>{{ $view_teammember->id }}</td>
                      <td>{{ $view_teammember->name }}</td>
                      <td>{{ $view_teammember->position }}</td>
                      <td><img style="width:100px;" src="{{asset('back_end/team_image/image/'. $view_teammember->image) }}"></td>
                      <td>
                        @if($view_teammember->status ==1 )
                        <a class="UpdateTeamStatus" id="portfolio-{{$view_teammember->id}}" portfolio_id="{{$view_teammember->id}}" href="javascript:void(0)">Active</a> 
                       @else 
                        <a class="UpdateTeamStatus" id="portfolio-{{$view_teammember->id}}" portfolio_id="{{$view_teammember->id}}" href="javascript:void(0)">InActive</a> 
                       @endif
                      </td>
                     
                      <td>
                        <button type="button" class="btn btn-info">Edit</button>
                      <a href="javascript:void(0)" class="confirmDelete" record="Team" recordid="{{$view_teammember->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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