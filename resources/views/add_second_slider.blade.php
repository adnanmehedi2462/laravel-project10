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
                                    <div class="panel-heading"><h3 class="panel-title"> Add Slider Image</h3></div>
                                                                          
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
                                        <form role="form" action="{{url('/insert_second_slider')}}" method="post" enctype="multipart/form-data">
                                        	@csrf

                                       <div class="form-group">
                                           
                                          <label for="exampleInputPassword11">Welcome About</label>
                                         <textarea class="form-control" cols="50" rows="3" name="about"></textarea>
                                      </div>
                                    
                                    </div>
                                          
			                                 <div class="form-group">
			                                	<img id="image" src="#" />
			                                    <label for="exampleInputPassword11">Photo</label>
			                                    <input type="file"  class="form-control"  name="photo" accept="image/*"  required onchange="readURL(this);" required>
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
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection