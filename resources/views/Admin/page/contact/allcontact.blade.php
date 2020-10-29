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
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>message</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($allcontactinfo as $view_contact )
                    <tr>
                      <td>{{ $view_contact->id }}</td>
                      <td>{{ $view_contact->name }}</td>
                      <td>{{ $view_contact->email }}</td>
                      <td>{{ $view_contact->phone }}</td>
                      <td>{{ $view_contact->message }}</td>
                    
                      <td>
                      
                      <a href="javascript:void(0)" class="confirmDelete" record="Contact" recordid="{{$view_contact->id}}"><button type="button" class="btn btn-danger">Delete</button></a>   
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