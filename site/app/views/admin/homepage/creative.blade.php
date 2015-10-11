<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Left Creative <small></small>
    </h3>
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
      Left Creative
    </li>   
  </ul>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Success!</strong> {{Session::get('success')}} </a>
</div>
@endif
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12">
    {{Form::open(array("url"=>"/admin/homepage/left-creative","method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
      <div class="form-body">
          <div class="row">
            <div class="form-group">
              <label class="col-md-2 control-label">Left Creative Image</label>
              <div class="col-md-3">
                {{Form::file('left_creative',array("class"=>"form-control"))}}
              </div>
              <div class="col-md-4">
                @if($params[4] != '')
                  <a class="btn blue" href="{{url('images/'.$params[4])}}" target="_blank">View</a>
                @endif
              </div>
            </div> 
          </div>
          <div class="row" style="margin-top:10px">
            <div class="form-group">
              <label class="col-md-2 control-label">Creative Link</label>
              <div class="col-md-6">
                {{Form::text('left_creative_link',$params[5],array("class"=>"form-control"))}}
              </div>
            </div>
          </div>

          <div class="row" style="margin:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
         
      {{Form::close()}}
  </div>
</div>

<!-- BEGIN PAGE CONTENT-->
