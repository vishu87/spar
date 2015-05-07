<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      All Images <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/media/add')}}" class="btn green">Add New</a>
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
      All Images
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
    @foreach($media as $image)
      <div class="col-md-3 banner-image">     
         <div class="banner-pro">
          <h4>{{$image->caption}}</h4>
           <div style="background:url({{URL("/")}}/images/{{$image->image}}); width:100%; min-height:150px; background-size:cover;" >
            @if(Auth::user()->priviledge == 1)
            <a href="{{url('/admin/media/delete/'.$image->id)}}" class="banner-del btn btn-danger pull-right">
            <i class="fa fa-remove"></i></a>
           @endif
           <a class="fancybox btn blue pull-right" href="{{URL("/")}}/images/{{$image->image}}">
                  <i class="fa fa-search"></i>
            </a>
          </div>
        </div>
      </div>
    @endforeach  
  </div>
</div>
{{Form::close()}}
<!-- BEGIN PAGE CONTENT-->
