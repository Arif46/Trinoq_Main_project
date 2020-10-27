@extends('admin.maindashboard')
@section('maincontent')

 {{-- </section> --}}
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
                  <th>Portfolio image</th>
                  <th>Portfolio type</th>
                  <th>link</th>
                  <th>Details</th>
                  <th>status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($allportfolio as $view_portfolio )
                  <tr>
                    <td>{{ $view_portfolio->id }}</td>
                    <td><img style="width:200px;" src="{{asset('back_end/portfolio_image/'. $view_portfolio->portfolio_image) }}"></td>
                    <td>{{ $view_portfolio->Portfolio_type }}</td>
                    <td>{{ $view_portfolio->link }}</td>
                    <td>{{ $view_portfolio->details }}</td>
                    <td>
                      @if($view_portfolio->status ==1 )
                      <a class="UpdatePortfolioStatus" id="portfolio-{{$view_portfolio->id}}" portfolio_id="{{$view_portfolio->id}}" href="javascript:void(0)">Active</a> 
                     @else 
                      <a class="UpdatePortfolioStatus" id="portfolio-{{$view_portfolio->id}}" portfolio_id="{{$view_portfolio->id}}" href="javascript:void(0)">InActive</a> 
                     @endif
                    </td>
                   
                    <td>
                      <button type="button" class="btn btn-info">Edit</button>
                    <a href="javascript:void(0)" class="confirmDelete" record="portfolio" recordid="{{$view_portfolio->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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



