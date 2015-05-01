<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Mid Banners <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/mid-banners/add')}}" class="btn green">Add New</a>
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
      All Mid Banner
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
{{Form::open(array("url"=>"/admin/mid-banners/saveorder","method" => "POST","role"=>"form"))}}
<div class="row">
   <div id="sortable1">
    @foreach($mid_banners as $mid_banner)
      <div class="col-md-4 banner-image">     
         <div class="banner-pro">
          <input type="checkbox" name="order[]" value="{{$mid_banner->id}}" checked><h3>{{$mid_banner->mid_banner_name}}</h3>
          {{HTML::image('/images/'.$mid_banner->mid_banner_image,'',["class"=>"img-banner"])}}
          @if(Auth::user()->priviledge == 1)
          <a href="{{url('/admin/mid-banners/delete/'.$mid_banner->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
          @endif
        </div>
      </div>
    @endforeach  
  </div>
</div>
<button type="submit" class="btn blue" style="float: right; margin-top: 20px;">Save order</button>
  {{Form::close()}}
<!-- BEGIN PAGE CONTENT-->
