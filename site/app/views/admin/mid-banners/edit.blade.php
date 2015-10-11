<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
     Mid Banners <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/mid-banners')}}" class="btn green">Go Back</a>
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
       <a href="{{url('/admin/mid-banners')}}">Mid Banners</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Edit Banner
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
                Edit Banner
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/mid-banners/update/".$banner->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Mid Banner Name</label>
                    <div class="col-md-9">
                      {{Form::text('mid_banner_name',$banner->mid_banner_name,array("class"=>"form-control", "placeholder"=>"Enter Mid Banner Name"))}}
                        <span>{{$errors->first('mid_banner_name')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Mid Banner Link</label>
                    <div class="col-md-9">
                      {{Form::text('link',$banner->link,array("class"=>"form-control", "placeholder"=>"Enter Mid Banner Link"))}}
                        <span>{{$errors->first('link')}}</span>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-2 control-label">Mid Banner Image</label>
                    <div class="col-md-9">
                     {{Form::file('mid_banner_image',array("class"=>"form-control"))}}
                     <div style="margin-top:20px">
                        @if($banner->mid_banner_image == '')
                          There is no image uploaded for this banner
                        @else
                          {{HTML::image('images/'.$banner->mid_banner_image,"",["class"=>"img-brand","style"=>"width:200px"])}}
                        @endif
                     </div> 
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