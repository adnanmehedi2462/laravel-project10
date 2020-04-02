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
                        <li><a href="#">Adnan</a></li>
                        <li class="active">IT</li>
                    </ol>
                </div>
            </div>

            <!-- Start Widget -->
            <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">All Info image</h3>
                          <a href="{{ route('add_cv') }}" class="btn btn-sm btn-info pull-right">Add New</a>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                  <table id="datatable" class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>Title</th>
                                            
                                              <th>CV File</th>
                                           
                                              <th>Action</th>
                                          </tr>
                                      </thead>

                               
                                      <tbody>
                                        @foreach($all_cvs as $row)
                                          <tr>
                                              <td>{{ $row->title}}</td>
                                            
                                              <td>{{ $row->cv }}</td>
                                              
                                             <td>
                                                <a href="{{ URL::to('delete_cv')}}/{{\Crypt::encrypt($row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                              
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