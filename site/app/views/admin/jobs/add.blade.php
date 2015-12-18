<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Jobs <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/recipes')}}" class="btn green">Go Back</a>
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
       <a href="{{url('/admin/recipes')}}">All Job</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Add Job
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

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
   <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption">
                Add Job
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/jobs/store","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Job Name</label>
                    <div class="col-md-9">
                      {{Form::text('job_name','',array("class"=>"form-control", "placeholder"=>"Enter job Name"))}}
                        <span class="error">{{$errors->first('job_name')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Job Id</label>
                    <div class="col-md-9">
                      {{Form::text('job_id','',array("class"=>"form-control", "placeholder"=>"Enter job id"))}}
                        <span class="error">{{$errors->first('job_id')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Job Category</label>
                    <div class="col-md-5">
                      {{Form::select('category_id',$categories,'',array("class"=>"form-control"))}}
                        <span class="error">{{$errors->first('category_id')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Department</label>
                    <div class="col-md-9">
                      {{Form::textarea('job_department','',array("class"=>"form-control", "placeholder"=>"Department"))}}
                        <span class="error">{{$errors->first('job_department')}}</span>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label class="col-md-2 control-label">Specification</label>
                    <div class="col-md-9">
                      {{Form::textarea('specification','',array("class"=>"form-control", "placeholder"=>"Specification"))}}
                        <span class="error">{{$errors->first('specification')}}</span>
                    </div>
                  </div>                 
                  <div class="form-group">
                    <label class="col-md-2 control-label">Qualification</label>
                    <div class="col-md-9">
                       {{Form::textarea('qualification','',array("class"=>"form-control ", "placeholder"=>"Qualification"))}}  
                       <span class="error">{{$errors->first('qualification')}}</span>          
                    </div>
                  </div>        
                  <div class="form-group">
                    <label class="col-md-2 control-label">Skills</label>
                    <div class="col-md-9">
                     {{Form::textarea('skills','',array("class"=>"form-control ", "placeholder"=>"skills"))}} 
                     <span class="error">{{$errors->first('skills')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Work Experence</label>
                    <div class="col-md-9">
                      {{Form::textarea('w_expr','',array("class"=>"form-control", "placeholder"=>"Work Experence"))}}
                     <span class="error">{{$errors->first('w_expr')}}</span>

                    </div>
                  </div>   
                  
                  </div>
                  <div class="form-actions sub-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>   
                {{Form::close()}}
          </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>
</div>