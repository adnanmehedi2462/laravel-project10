@extends('layouts.app')
@section('content')
<div class="content-page">
  <div class="content">
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{route('backend')}}">Adnan</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div> 
            </div>

            <!-- Start Widget -->
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">All Second Slider Here!!</h3>
                          <a href="{{ route('add_second_slider') }}" class="btn btn-sm btn-info pull-right">Add New</a>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                  <table id="datatable" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>about</th>
                                              <th>Photo</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>

                               
                                      <tbody>
                                        @foreach($all_second as $row)
                                          <tr>
                                              <td>{{ $row->about }}</td>
                                              <td><img src="{{ $row->photo }}" style="height: 60px; width: 60px; border-radius: 60px;"></td>
                                              
                                             <td>
                                                <a href="{{ URL::to('edit_second_slider') }}/{{\Crypt::encrypt($row->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{ URL::to('delete_second_slider')}}/{{\Crypt::encrypt($row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                              
                                             </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div> <!-- container -->            
    </div> <!-- content -->
</div>


@endsection