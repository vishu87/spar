<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Recipes <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/users_recipe')}}" class="btn green">Go Back</a>
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
      View Recipe
    </li>    
  </ul>
</div>
<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12">
  <div class="portlet box green-meadow">
    <div class="portlet-title">
      <div class="caption">
        <i class="fa fa-cutlery"></i>View Recipe
      </div>
    </div>
    <div class="portlet-body">
      <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Recipe Name :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$recipe->recipe_name}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Ingredients :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$recipe->ingred}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Cook Time :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$recipe->cook_time}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Method :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$recipe->method}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Recipe Image :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{HTML::image('images/'.$recipe->recipe_image,"",["class"=>"recipe-img"])}} 
        </div>
      </div>
    </div>
  </div>
</div>
 
</div>




