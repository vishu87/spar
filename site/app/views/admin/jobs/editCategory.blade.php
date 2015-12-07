<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
     Recipes Categories <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/recipes/categories')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/recipes/categories')}}">Recipes Categories</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Recipe Category
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
          Edit Category
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/recipes/categories/update/".$category->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Category Name</label>
            <div class="col-md-9">
              {{Form::text('recipe_category',$category->recipe_category,array("class"=>"form-control", "placeholder"=>"Enter Category Name"))}}
              <span>{{$errors->first('recipe_category')}}</span>
            </div>
          </div>
          <div class="form-group">
          <label class="col-md-2 control-label">Image</label>
          <div class="col-md-5">
           {{Form::file('image',array("class"=>"form-control"))}} 
           </div>
           <div class="col-md-4">
             @if($category->image == '')
              There is no image uploaded for this product
            @else
              {{HTML::image('images/'.$category->image,"",["class"=>"img-brand"])}}
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
</div>

