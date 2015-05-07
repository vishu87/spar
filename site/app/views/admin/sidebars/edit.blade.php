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
<div class="alert alert-alert alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Error!</strong> {{Session::get('success')}} </a>
</div>
@endif

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-6">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Select Item
        </div>           
      </div>
      <div class="portlet-body">
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-4"><button class="btn green">Add Link <i class="fa fa-plus"></i></button></div>
          <div class="col-md-8">
            {{Form::select('page_link',$pages,'',["class"=>"form-control"])}}
          </div>
        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-4"><button class="btn green">Add Title <i class="fa fa-plus"></i></button></div>
          <div class="col-md-8">
            {{Form::text('title','',["class"=>"form-control"])}}
          </div>
        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-4"><button class="btn green">Add Image <i class="fa fa-plus"></i></button></div>
          <div class="col-md-8">
            {{Form::text('title','',["class"=>"form-control"])}}
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-6">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          {{$sidebar->sidebar}}
        </div>           
      </div>
      <div class="portlet-body form">
        
      </div>
    </div>
  </div>
</div>