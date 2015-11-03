<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Deals <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/deals')}}" class="btn green">Go Back</a>
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
       <a href="{{url('/admin/deals')}}">All Deal</a>
       <i class="fa fa-angle-right"></i>
    </li>
    <li>
      Add Deal
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
                Add Deal
              </div>           
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/deals/store","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Deal Name</label>
                    <div class="col-md-9">
                      {{Form::text('deal_name','',array("class"=>"form-control", "placeholder"=>"Enter Deal Name"))}}
                        <span class="error">{{$errors->first('deal_name')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Category</label>
                    <div class="col-md-9">
                      {{Form::select('category_id',$categories,'',array("class"=>"form-control", "placeholder"=>"Select Category"))}}                        
                    </div>
                  </div>
                  <div class="form-group">
            <label class="col-md-2 control-label">Deal Type</label>
            <div class="col-md-9">
              {{Form::select('type',$deal_types,'',array("class"=>"form-control", "placeholder"=>"Enter Category Name"))}}             
            </div>
          </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Deal Description</label>
                    <div class="col-md-9">
                     {{Form::textarea('deal_content','',array("class"=>"form-control editor1", "placeholder"=>"Deal Description"))}}  
                     <span class="error">{{$errors->first('deal_content')}}</span>          
                  </div>
                  </div> 
                   <div class="form-group">
                    <label class="col-md-2 control-label">Deal Image</label>
                    <div class="col-md-9">
                     {{Form::file('image',array("class"=>"form-control"))}} 
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