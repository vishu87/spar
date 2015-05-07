<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Kids Corner <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/kids-corner')}}" class="btn green">Go Back</a>
  </div>
</div>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{url('/admin')}}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="{{url('/admin/kids-corner')}}">All Kids Corner</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Kids Corner
    </li>    
  </ul>
</div>
<!-- END PAGE HEADER-->

@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Success!</strong> {{Session::get('success')}} </a>
</div>
@endif

@if(Session::has('failure'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Error!</strong> {{Session::get('success')}} </a>
</div>
@endif

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Kids corner
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/kids-corner/update/".$kids->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-9">
              {{Form::text('title',$kids->title,array("class"=>"form-control", "placeholder"=>"Enter Title"))}}
              <span>{{$errors->first('title')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Content</label>
            <div class="col-md-9">
              {{Form::textarea('content',$kids->content,array("class"=>"form-control editor1", "placeholder"=>"Enter Content"))}}
              <span>{{$errors->first('content')}}</span>
            </div>
          </div>
           <div class="form-group">
          <label class="col-md-2 control-label">Kids corner Image</label>
          <div class="col-md-5">
           {{Form::file('kids_image',array("class"=>"form-control"))}} 
           </div>
           <div class="col-md-4">
             @if($kids->kids_image == '')
              There is no image uploaded for this kids corner
            @else
              {{HTML::image('images/'.$kids->kids_image,"",["style"=>"width:100%"])}}
            @endif
           </div>
        </div>  
       <div class="sub-center">
        <button type="submit" class="btn btn-success">Update</button>
      </div>   
      {{Form::close()}}
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>