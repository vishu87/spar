<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
     Jobs Categories <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/jobs/categories')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/jobs/categories')}}">Jobs Categories</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Job Category
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
          Edit Category
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/jobs/categories/update/".$category->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Category Name</label>
            <div class="col-md-9">
              {{Form::text('category_name',$category->job_type,array("class"=>"form-control", "placeholder"=>"Enter Category Name"))}}
              <span>{{$errors->first('category_name')}}</span>
            </div>
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
</div>

