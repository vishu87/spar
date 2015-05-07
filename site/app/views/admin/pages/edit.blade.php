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
      <a href="{{url('/admin/pages')}}">All Page</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Page
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
  <div class="col-md-9 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Page
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/pages/update/".$page->id,"method" => "PUT","role"=>"form","class" => "form-horizontal"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Page Title</label>
            <div class="col-md-9">
              {{Form::text('page_title',$page->page_title,array("class"=>"form-control", "placeholder"=>"Enter Page Title"))}}
              <span>{{$errors->first('page_title')}}</span>
            </div>
          </div>             
          <div class="form-group">
            <label class="col-md-2 control-label">Page Content</label>
            <div class="col-md-9">
             {{Form::textarea('page_content',$page->page_content,array("class"=>"ckeditor form-control", "placeholder"=>"Page Content"))}}  
             <span>{{$errors->first('page_content')}}</span>          
           </div>
         </div>          
       <div class="sub-center">
        <button type="submit" class="btn btn-success">Update</button>
      </div>   
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>

<div class="col-md-3 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Sidebars
        </div>           
      </div>
      <div class="portlet-body form" >
        <div class="form-body">
          <div class="form-group  ">
            <label class="col-md-3 control-label">Left</label>
            <div class="col-md-9">
              {{Form::select('left_sidebar',$sidebars,$page->left_sidebar,array("class"=>"form-control"))}}
            </div>
            
          </div>
          <div class="form-group " style="margin-top:50px">
            <label class="col-md-3 control-label">Right</label>
            <div class="col-md-9">
              {{Form::select('right_sidebar',$sidebars,$page->right_sidebar,array("class"=>"form-control"))}}
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
      {{Form::close()}}
  <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>

</div>