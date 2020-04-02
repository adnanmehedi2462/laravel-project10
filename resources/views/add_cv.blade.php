@extends('layouts.app')
@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{route('backend')}}">Adnan</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

        <!-- Start Widget -->
        <div class="row">
    <!-- Basic example --><div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title"> Add CV</h3></div>
                                                                          
                                      @if ($errors->any())
                                          <div class="alert alert-danger">
                                              <ul>
                                                  @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                  @endforeach
                                              </ul>
                                          </div>
                                      @endif


                                    <div class="panel-body">
                                        <form role="form" action="{{url('/insert_cv')}}" method="post" enctype="multipart/form-data">
                                        	@csrf

                                     
                                     <label for="exampleInputPassword11">Title</label>
                                         <textarea class="form-control" cols="50" rows="3" name="title"></textarea>
                                    </div>
                                          
			                                 <div class="form-group">
			                                	<img id="image" src="#" />
			                                    <label for="exampleInputPassword11">CV</label>
			                                    <input type="file"  class="form-control"  name="cv"  required>
			                                </div>
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                          </div> 
                          <!-- End row-->

                    </div> <!-- end row -->

               </div> <!-- container -->
                                 
      </div> <!-- content -->

@endsection