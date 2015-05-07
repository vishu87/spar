<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Sidebar <small></small>
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
      <a href="{{url('/admin/sidebars')}}">All Sidebars</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Sidebar
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
  <div class="col-md-8">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Select Item
        </div>           
      </div>
      <div class="portlet-body">
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            {{Form::text('title','',["class"=>"form-control"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_title">Add Title <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            {{Form::select('add_link',$pages,'',["class"=>"form-control"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_page">Add Link <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            <a class="btn default" id="select_image" data-toggle="modal" href="#full">Select</a>
            <div style="width:50px; float:left" id="img-view"></div>
            {{Form::hidden('image_id','',["class"=>"form-control"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_image">Add Image <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            {{Form::textarea('custom_html','',["class"=>"form-control editor1"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_html">Add HTML <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
      </div>
    </div>
  </div>
   <div class="col-md-4">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          {{$sidebar->sidebar}}
          <input type="hidden" id="sidebar_id" value="{{$sidebar->id}}">
        </div>           
      </div>
      <div class="portlet-body">
        <div class="row">
          <div class="col-md-12">
            <div id="sidebar-body">

            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>