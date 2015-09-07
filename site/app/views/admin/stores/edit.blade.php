<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Stores <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/stores')}}" class="btn green">Go Back</a>
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
       <a href="{{url('/admin/stores')}}">All Stores</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Edit Store
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
                Edit Store
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/stores/update/".$store->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Store Name</label>
                    <div class="col-md-9">
                      {{Form::text('name',$store->name,array("class"=>"form-control", "placeholder"=>"Enter Name"))}}
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Store Address</label>
                    <div class="col-md-9">
                      {{Form::text('address',$store->address,array("class"=>"form-control", "placeholder"=>""))}}
                        <span class="error">{{$errors->first('address')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Store Latitude</label>
                    <div class="col-md-9">
                      {{Form::text('lat',$store->lat,array("class"=>"form-control", "placeholder"=>""))}}
                        <span class="error">{{$errors->first('lat')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Store Longitude</label>
                    <div class="col-md-9">
                      {{Form::text('lng',$store->lng,array("class"=>"form-control", "placeholder"=>""))}}
                        <span class="error">{{$errors->first('lng')}}</span>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-2 control-label">Store Telephone</label>
                    <div class="col-md-9">
                      {{Form::text('telephone',$store->telephone,array("class"=>"form-control", "placeholder"=>""))}}
                        <span class="error">{{$errors->first('telephone')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">City</label>
                    <div class="col-md-9">
                      {{Form::select('city_id',$cities,$store->city_id,array("class"=>"form-control", "placeholder"=>"Select City"))}}                        
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Status</label>
                    <div class="col-md-9">
                      {{Form::select('upcoming',["0"=>"Running","1"=>"Upcoming"],$store->upcoming,array("class"=>"form-control", "placeholder"=>"Select City"))}}                        
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