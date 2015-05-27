<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Pages <small></small>
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
       <a href="{{url('/admin/pages')}}">Pages</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Add page
    </li>   
  </ul>
</div>
<!-- END PAGE HEADER-->

@if(Session::has('success'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <strong>Success!</strong> {{Session::get('success')}}
  </div>
@endif

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
   <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption">
                Add Page
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/pages/store","method" => "POST","role"=>"form","class" => "form-horizontal"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Page Title</label>
                    <div class="col-md-9">
                      {{Form::text('page_title','',array("class"=>"form-control", "placeholder"=>"Enter Page Title","id"=>"page_title","onkeyup"=>"slug_make()"))}}
                        <span>{{$errors->first('page_title')}}</span>
                    </div>
                  </div>   
                   <div class="form-group">
                    <label class="col-md-2 control-label">Page Slug (- separated)</label>
                    <div class="col-md-9">
                      {{Form::text('page_slug','',array("class"=>"form-control", "placeholder"=>"Enter Page Slug","id"=>"page_slug"))}}
                        <span>{{$errors->first('page_slug')}}</span>
                    </div>
                  </div>               
                  <div class="form-actions sub-center">
                    <button type="submit" class="btn btn-success">Proceed</button>
                  </div>   
                </div>
              {{Form::close()}}
          </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>
</div>
