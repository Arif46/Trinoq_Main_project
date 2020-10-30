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
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>company logo</th>
                    <th>details</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($allclient as $view_client )
                    <tr>
                      <td>{{ $view_client->id }}</td>
                      <td>{{ $view_client->company_name }}</td>
                      <td>{{ $view_client->company_address }}</td>
                      <td><img style="width:100px;" src="{{asset('back_end/company_logo/'. $view_client->company_logo) }}"></td>
                      <td>{{ $view_client->details }}</td>
                      <td>
                        @if($view_client->status ==1 )
                        <a class="UpdateClientStatus" id="portfolio-{{$view_client->id}}" portfolio_id="{{$view_client->id}}" href="javascript:void(0)">Active</a> 
                       @else 
                        <a class="UpdateClientStatus" id="portfolio-{{$view_client->id}}" portfolio_id="{{$view_client->id}}" href="javascript:void(0)">InActive</a> 
                       @endif
                      </td>
                     
                      <td>
                        <button type="button" class="btn btn-info">Edit</button>
                      <a href="javascript:void(0)" class="confirmDelete" record="client" recordid="{{$view_client->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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