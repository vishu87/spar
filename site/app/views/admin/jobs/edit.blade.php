<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Jobs <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/jobs')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/jobs')}}">All Job</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Job
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
  <div class="col-md-8 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Job
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/jobs/update/".$job->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>true))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Job Name</label>
            <div class="col-md-9">
              {{Form::text('job_name',$job->job_title,array("class"=>"form-control", "placeholder"=>"Enter job Name"))}}
                <span class="error">{{$errors->first('job_name')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Job Id</label>
            <div class="col-md-9">
              {{Form::text('job_id',$job->job_id,array("class"=>"form-control", "placeholder"=>"Enter job Name"))}}
                <span class="error">{{$errors->first('job_id')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Job Category</label>
            <div class="col-md-5">
              {{Form::select('category_id',$categories,$job->job_type,array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('category_id')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Department</label>
            <div class="col-md-9">
              {{Form::textarea('job_department',$job->job_department,array("class"=>"form-control", "placeholder"=>"Department"))}}
                <span class="error">{{$errors->first('job_department')}}</span>
            </div>
          </div> 
          <div class="form-group">
            <label class="col-md-2 control-label">Specification</label>
            <div class="col-md-9">
              {{Form::textarea('specification',$job->specifications,array("class"=>"form-control", "placeholder"=>"Enter Preparation Time"))}}
                <span class="error">{{$errors->first('specification')}}</span>
            </div>
          </div>                 
          <div class="form-group">
            <label class="col-md-2 control-label">Qualification</label>
            <div class="col-md-9">
               {{Form::textarea('qualification',$job->qualification,array("class"=>"form-control ", "placeholder"=>"qualification ckeditor"))}}  
               <span class="error">{{$errors->first('qualification')}}</span>          
            </div>
          </div>        
          <div class="form-group">
            <label class="col-md-2 control-label">Skills</label>
            <div class="col-md-9">
             {{Form::textarea('skills',$job->skills,array("class"=>"form-control ", "placeholder"=>"skills"))}} 
             <span class="error">{{$errors->first('skills')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Work Experence</label>
            <div class="col-md-9">
              {{Form::textarea('w_expr',$job->work_ex,array("class"=>"form-control", "placeholder"=>"Enter Cook Time"))}}
             <span class="error">{{$errors->first('w_expr')}}</span>

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

  
  <!-- END SAMPLE FORM PORTLET-->
</div>




    <!-- BEGIN SAMPLE FORM PORTLET-->
    
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>
</div>
