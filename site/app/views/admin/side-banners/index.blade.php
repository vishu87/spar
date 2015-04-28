<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Side Banners <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/side-banners/add')}}" class="btn green">Add New</a>
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
      All Side Banner
    </li>   
  </ul>
</div>

@if(Session::has('delete'))
<div class="alert alert-alert alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Delete!</strong> {{Session::get('success')}} </a>
</div>
@endif
<!-- END PAGE HEADER-->
<div class="row">
  @foreach($side_banners as $side_banner)
    <div class="col-md-12 banner-col12">     
     <div class="col-md-3"><input type="checkbox" name="order[]">{{$side_banner->side_banner_name}} </div>
     <div class="col-md-7">{{HTML::image('/images/'.$side_banner->side_banner_image,'',["class"=>"img-banner"])}} </div>
     <a href="{{url('/admin/side-banners/delete/'.$side_banner->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
    </div>
  @endforeach  
</div>
<!-- BEGIN PAGE CONTENT-->
