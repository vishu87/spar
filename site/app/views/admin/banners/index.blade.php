<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Home Page Main Banners <small></small>
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
      Main Banners
    </li>   
  </ul>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Success!</strong> {{Session::get('success')}} </a>
</div>
@endif
<!-- END PAGE HEADER-->
{{Form::open(array("url"=>"/admin/banners/saveorder","method" => "POST","role"=>"form"))}}
  <div class="row">
    <div id="sortable1" style="padding: 0 10px">
      @foreach($banners as $banner)
        <div class="col-md-4 banner-image">     
           <div class="banner-pro">
              <input type="checkbox" name="order[]" value="{{$banner->id}}" checked><h3>{{$banner->banner_name}}</h3>

              <div style="background:url({{URL("/")}}/images/{{$banner->banner_image}}); width:100%; min-height:150px; background-size:cover;" >
                @if(Auth::user()->priviledge == 1)
               <a href="{{url('/admin/banners/delete/'.$banner->id)}}" class="banner-del btn btn-danger pull-right">
                <i class="fa fa-remove"></i></a>
                <a href="{{url('/admin/banners/edit/'.$banner->id)}}" class="btn btn-warning pull-right">
                <i class="fa fa-edit"></i></a>
                <a class="fancybox btn blue pull-right" href="{{URL("/")}}/images/{{$banner->banner_image}}">
                  <i class="fa fa-search"></i>
                </a>
               @endif
              </div>
               
           </div>
        </div>
        @endforeach  
      </div>
  </div>
  <button type="submit" class="btn blue" style="float: right; margin-top: 20px;">Save order</button>
  {{Form::close()}}
<!-- BEGIN PAGE CONTENT-->
