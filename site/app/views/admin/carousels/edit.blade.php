<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Carousel <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/pages')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/carousels')}}">Carousels</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Carousel
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
  <div class="col-md-4">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Carousel
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/carousels/update/".$carousel->id,"method"=>"PUT"))}}
          <div class="form body">
            <div class="form-body">
                <label class="control-label">Carousel Name</label>
                <div class="row">
                  <div class="col-md-8">
                   {{Form::text('name',$carousel->name,array("class"=>"form-control"))}}
                   <span class="error">{{$errors->first('name')}}</span>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                  </div>
              </div>
            </div>
          </div>
        {{Form::close()}}
      </div>
    </div>
  </div>
   <div class="col-md-8">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Carousel Images
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/carousels/save/".$carousel->id,"method"=>"POST"))}}
          <div class="form body">
            <div class="form-body">
                <label class="control-label">Carousel Name</label>
                <div class="row">
                  <div class="col-md-8">
                   {{Form::text('caption','',array("class"=>"form-control"))}}
                   <span class="error">{{$errors->first('caption')}}</span>
                  </div>
                  <div class="col-md-4">
                  </div>
              </div>
              <div class="row" style="margin-top:20px">
                  <div class="col-md-8">
                   {{Form::file('image',array("class"=>"form-control"))}}
                   <span class="error">{{$errors->first('image')}}</span>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-success">Upload</button>
                  </div>
              </div>
            </div>
          </div>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>