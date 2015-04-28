<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Banners <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/banners/add')}}" class="btn green">Add New</a>
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
      All Banner
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
  <div id="sortable1" class="banner-image">
    @foreach($banners as $banner)
      <div class="col-md-12 banner-image banner-col12">     
         <div class="col-md-3"><input type="checkbox" name="order[]" checked>{{$banner->banner_name}} </div>
         <div class="col-md-7">{{HTML::image('/images/'.$banner->banner_image,'',["class"=>"img-banner"])}} </div>
         <a href="{{url('/admin/banners/edit/'.$banner->id)}}"><span class="btn yellow">Edit </span></a>
         <a href="{{url('/admin/banners/delete/'.$banner->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
      </div>
      @endforeach  
    </div>
</div>
<!-- BEGIN PAGE CONTENT-->
