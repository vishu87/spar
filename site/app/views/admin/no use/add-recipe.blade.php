<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Title <small>some information</small>
    </h3>
  </div>
  <div class="col-md-6" style="text-align:right">
    <a href="#" class="btn yellow">Some Link</a>
  </div>
</div>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="#">All Recipe</a>
    </li>   
  </ul>
        <a href="{{url('/admin/add-recipe')}}" style="float: right; padding: 10px 15px 10px 10px;">Add New</a>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
   <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-cogs font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">Horizontal Form</span>
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
                <a href="#portlet-config" data-toggle="modal" class="config">
                </a>
                <a href="javascript:;" class="reload">
                </a>
                <a href="javascript:;" class="remove">
                </a>
              </div>
            </div>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/admin/add-recipe/addrecipe","method" => "POST","role"=>"form","class" => "form-horizontal"))}}
                <div class="form-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Recipe Name</label>
                    <div class="col-md-9">
                      {{Form::text('recipe_name','',array("class"=>"form-control", "placeholder"=>"Enter Recipe Name"))}}
                        <span>{{$errors->first('recipe_name')}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Preparation Time</label>
                    <div class="col-md-9">
                      {{Form::text('preparation_time','',array("class"=>"form-control", "placeholder"=>"Enter Preparation Timee"))}}
                        <span>{{$errors->first('preparation_time')}}</span>
                    </div>
                  </div>                 
                  <div class="form-group">
                    <label class="col-md-3 control-label">Description</label>
                    <div class="col-md-9">
                       {{Form::textarea('description','',array("class"=>"form-control", "placeholder"=>"Description"))}}  
                       <span>{{$errors->first('description')}}</span>          
                    </div>
                  </div>        
                  <div class="form-group">
                    <label class="col-md-3 control-label">Ingredients</label>
                    <div class="col-md-9">
                     {{Form::textarea('ingredient','',array("class"=>"form-control", "placeholder"=>"Ingredient"))}} 
                     <span>{{$errors->first('ingredient')}}</span>
                    </div>
                  </div>
                  <div style="margin:20px 0;">
                    <button type="submit" class="btn default">Submit</button>
                  </div>   
                {{Form::close()}}
            </div>
          </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>