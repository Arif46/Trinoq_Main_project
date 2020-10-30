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
                    <th>Portfolio Mobile image</th>
                    <th>Portfolio Mobile type</th>
                    <th>link</th>
                    <th>Details</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($allmobilelist as $view_weblist )
                    <tr>
                      <td>{{ $view_weblist->id }}</td>

                      <td><img style="width:100px;" src="{{asset('back_end/portfolio_mobile_image/'. $view_weblist->portfolio_mobile_image ) }}"></td>
                      <td>{{ $view_weblist->portfolio_mobile_Type }}</td>
                      <td>{{ $view_weblist->link }}</td>
                      <td>{{ $view_weblist->details }}</td>
                      <td>
                        @if($view_weblist->status ==1 )
                        <a class="UpdatePortfolioWebStatus" id="portfolio-{{$view_weblist->id}}" portfolio_id="{{$view_weblist->id}}" href="javascript:void(0)">Active</a> 
                       @else 
                        <a class="UpdatePortfolioWebStatus" id="portfolio-{{$view_weblist->id}}" portfolio_id="{{$view_weblist->id}}" href="javascript:void(0)">InActive</a> 
                       @endif
                      </td>
                     
                      <td>
                        <button type="button" class="btn btn-info">Edit</button>
                      <a href="javascript:void(0)" class="confirmDelete" record="Mobile" recordid="{{$view_weblist->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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