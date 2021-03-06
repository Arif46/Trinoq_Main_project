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
                    <th>Portfolio Ui image</th>
                    <th>Portfolio Ui Type</th>
                    <th>link</th>
                    <th>Details</th>
                    <th>status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($AllUilist as $view_uilist )
                    <tr>
                      <td>{{ $view_uilist->id }}</td>

                      <td><img style="width:100px;" src="{{asset('back_end/portfolio_ui_image/'. $view_uilist->portfolio_ui_image ) }}"></td>
                      <td>{{ $view_uilist->portfolio_ui_type }}</td>
                      <td>{{ $view_uilist->link }}</td>
                      <td>{{ $view_uilist->details }}</td>
                      <td>
                        @if($view_uilist->status ==1 )
                        <a class="UpdatePortfolioUiStatus" id="portfolio-{{$view_uilist->id}}" portfolio_id="{{$view_uilist->id}}" href="javascript:void(0)">Active</a> 
                       @else 
                        <a class="UpdatePortfolioUiStatus" id="portfolio-{{$view_uilist->id}}" portfolio_id="{{$view_uilist->id}}" href="javascript:void(0)">InActive</a> 
                       @endif
                      </td>
                     
                      <td>
                        <button type="button" class="btn btn-info">Edit</button>
                      <a href="javascript:void(0)" class="confirmDelete" record="Ui" recordid="{{$view_uilist->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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