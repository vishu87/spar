<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Flyers <small></small>
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
      Flyer
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
    {{Form::open(array("url"=>"/admin/homepage/flyer","method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
      <div class="form-body">
          <div class="row">
            <div class="form-group">
              <label class="col-md-2 control-label">Flyer Image</label>
              <div class="col-md-3">
                {{Form::file('flyer_big',array("class"=>"form-control"))}}
              </div>
              <div class="col-md-4">
                @foreach($params as $param)
                  @if($param->id == 1)
                    @if($param->value != '')
                      <a class="btn blue" href="{{url('images/'.$param->value)}}" target="_blank">View</a>
                      <a class="btn red" href="{{url('/admin/homepage/flyer/delete/'.$param->id)}}">Delete</a>
                    @endif
                  @endif
                @endforeach
              </div>
            </div> 
          </div>
          <div class="row" style="margin-top:10px">
            <div class="form-group">
              <label class="col-md-2 control-label">Mobile Flyer Image</label>
              <div class="col-md-3">
                {{Form::file('flyer_mobile',array("class"=>"form-control"))}}
              </div>
              <div class="col-md-4">
                @foreach($params as $param)
                  @if($param->id == 2)
                    @if($param->value != '')
                      <a class="btn blue" href="{{url('images/'.$param->value)}}" target="_blank">View</a>
                      <a class="btn red" href="{{url('/admin/homepage/flyer/delete/'.$param->id)}}">Delete</a>
                    @endif
                  @endif
                @endforeach
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:10px">
            <div class="form-group">
              <label class="col-md-2 control-label">Flyer (PDF)</label>
              <div class="col-md-3">
                {{Form::file('flyer',array("class"=>"form-control"))}}
              </div>
              <div class="col-md-4">
                @foreach($params as $param)
                  @if($param->id == 3)
                    @if($param->value != '')
                      <a class="btn blue" href="{{url('images/'.$param->value)}}" target="_blank">View</a>
                      <a class="btn red" href="{{url('/admin/homepage/flyer/delete/'.$param->id)}}">Delete</a>
                    @endif
                  @endif
                @endforeach
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
