<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Recipes <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/recipes')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/recipes')}}">All Recipe</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Recipe
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
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Error!</strong> {{Session::get('success')}} </a>
</div>
@endif

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Recipe
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/recipes/update/".$recipe->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>true))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Recipe Name</label>
            <div class="col-md-9">
              {{Form::text('recipe_name',$recipe->recipe_name,array("class"=>"form-control", "placeholder"=>"Enter Recipe Name"))}}
              <span>{{$errors->first('recipe_name')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Recipe Category</label>
            <div class="col-md-9">
              {{Form::select('category_id',$categories,$recipe->category_id,array("class"=>"form-control"))}}
              <span>{{$errors->first('category_id')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Preparation Time</label>
            <div class="col-md-9">
              {{Form::text('preparation_time',$recipe->preparation_time,array("class"=>"form-control", "placeholder"=>"Enter Preparation Time"))}}
              <span>{{$errors->first('preparation_time')}}</span>
            </div>
          </div>                 
          <div class="form-group">
            <label class="col-md-2 control-label">Description</label>
            <div class="col-md-9">
             {{Form::textarea('description',$recipe->description,array("class"=>"form-control", "placeholder"=>"Description"))}}  
             <span>{{$errors->first('description')}}</span>          
           </div>
         </div>        
         <div class="form-group">
          <label class="col-md-2 control-label">Ingredients</label>
          <div class="col-md-9">
           {{Form::textarea('ingredient',$recipe->ingredient,array("class"=>"form-control", "placeholder"=>"Ingredient"))}} 
           <span>{{$errors->first('ingredient')}}</span>
         </div>
       </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Cook Time Time</label>
            <div class="col-md-9">
              {{Form::text('cook_time',$recipe->cook_time,array("class"=>"form-control", "placeholder"=>"Enter Cook Time"))}}
            </div>
          </div>   
           <div class="form-group">
            <label class="col-md-2 control-label">To Serve</label>
            <div class="col-md-9">
              {{Form::text('to_serve',$recipe->to_serve,array("class"=>"form-control", "placeholder"=>"Enter To Serve"))}}
            </div>
          </div>   
        <div class="form-group">
          <label class="col-md-2 control-label">Method</label>
          <div class="col-md-9">
           {{Form::textarea('method',$recipe->method,array("class"=>"form-control", "placeholder"=>"Method"))}} 
         </div>
       </div>
       <div class="form-group">
          <label class="col-md-2 control-label">Recipe Image</label>
          <div class="col-md-5">
           {{Form::file('recipe_image',array("class"=>"form-control"))}} 
           </div>
           <div class="col-md-4">
             @if($recipe->recipe_image == '')
              There is image uploaded for this recipe
            @else
              {{HTML::image('images/'.$recipe->recipe_image,"",["class"=>"img-brand"])}}
            @endif

           </div>
        </div>
       <div class="sub-center">
        <button type="submit" class="btn btn-success">Update</button>
      </div>   
      {{Form::close()}}
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>