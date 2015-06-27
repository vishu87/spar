<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Reviews <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/customer-reviews')}}" class="btn green">Go Back</a>
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
      Customer Review
    </li>    
  </ul>
</div>
<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12">
  <div class="portlet box green-meadow">
    <div class="portlet-title">
      <div class="caption">
        <i class="fa fa-comment-o"></i>View Review
      </div>
    </div>
    <div class="portlet-body">
      <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Name :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->username}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
           Email :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->email}}
        </div>
      </div>
      <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
           Phone :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->phone}}
        </div>
      </div>
      <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
           Store Visited :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->name}}
        </div>
      </div>
      <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
           Date Visited :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->date_visited}}
        </div>
      </div>
       <div class="row margin-0 padding-10">
        <div class="col-md-4 padding-5 recipe-text">
          Review :
        </div>
        <div class="col-md-8 padding-5 recipe-border">
           {{$review->review}}
        </div>
      </div>
    </div>
  </div>
</div>
 
</div>




