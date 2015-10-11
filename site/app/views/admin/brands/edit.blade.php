<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Brands <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/brands')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/brands')}}">All Brand</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Brand
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
          Edit Brand
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/brands/update/".$brand->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Brand Name</label>
            <div class="col-md-9">
              {{Form::text('brand_name',$brand->brand_name,array("class"=>"form-control", "placeholder"=>"Enter Brand Name"))}}
              <span>{{$errors->first('brand_name')}}</span>
            </div>
          </div>
          <div class="form-group">
          <label class="col-md-2 control-label">Brand Image</label>
          <div class="col-md-5">
           {{Form::file('brand_image',array("class"=>"form-control"))}} 
           </div>
           <div class="col-md-4">
             @if($brand->brand_image == '')
              There is no image uploaded for this brand
            @else
              {{HTML::image('images/'.$brand->brand_image,"",["class"=>"img-brand","style"=>"width:150px"])}}
            @endif

           </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Description</label>
            <div class="col-md-9">
              {{Form::text('description',$brand->description,array("class"=>"form-control", "placeholder"=>"Enter Description"))}}
              <span>{{$errors->first('description')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Order</label>
            <div class="col-md-9">
              {{Form::text('priority',$brand->priority,array("class"=>"form-control", "placeholder"=>"Enter Order"))}}
              <span>{{$errors->first('priority')}}</span>
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