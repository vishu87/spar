<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Member <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/members')}}" class="btn green">Go Back</a>
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
       <a href="{{url('/admin/members')}}">All Pages</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Add Member
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
                Add Member
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/members/store","method" => "POST","role"=>"form","class" => "form-horizontal"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-9">
                      {{Form::text('name','',array("class"=>"form-control", "placeholder"=>"Enter Name"))}}
                        <span>{{$errors->first('name')}}</span>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-2 control-label">Email</label>
                    <div class="col-md-9">
                      {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"EnterEmail","autocomplete"=>"off"))}}
                        <span>{{$errors->first('email')}}</span>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-md-2 control-label">Password</label>
                    <div class="col-md-9">
                    {{Form::password('password', array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","type"=>"password","placeholder"=>"New Password"))}}
                     <span>{{$errors->first('password')}}</span>
                   </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-2 control-label">Phone</label>
                    <div class="col-md-9">
                     {{Form::text('phone','',array("class"=>"form-control", "placeholder"=>"Phone"))}} 
                     <span>{{$errors->first('phone')}}</span>
                   </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-2 control-label">Priviledge</label>
                    <div class="col-md-9">
                     {{Form::text('priviledge','',array("class"=>"form-control", "placeholder"=>"Priviledge"))}} 
                     <span>{{$errors->first('priviledge')}}</span>
                   </div>
                  </div>
                  <div class="form-actions sub-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>   
                {{Form::close()}}
            </div>
          </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>