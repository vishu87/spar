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
    <!-- BEGIN RECIPE TABLE-->
   <div class="portlet light">
            <div class="portlet-title">
              <div class="caption">
                <span class="caption-subject font-green-sharp bold uppercase">All Recipe</span>
              </div>
            <div class="portlet-body">
              <div class="table-scrollable">
                <table class="table table-hover">
                <thead>                  
                <tr>
                  <th>
                     #
                  </th>
                  <th>
                     Recipe Name
                  </th>
                  <th>
                     Preparation Time
                  </th>
                  <th>
                     Description
                  </th>
                  <th>
                     Ingredients
                  </th>
                </tr>
                </thead>
                <tbody>
                  <?php $count = 0; ?>
                  @foreach($recipes as $recipe)
                    <tr>
                     <td>
                        {{++$count}}
                      </td>
                      <td>
                        {{$recipe->recipe_name}}                       
                      </td>
                      <td>
                        {{$recipe->preparation_time}}                       
                      </td>
                      <td>
                        {{$recipe->description}}                       
                      </td>
                      <td>
                        {{$recipe->ingredient}}
                      </td>
                      <td>
                      <a href="{{url('/admin/edit-recipe')}}"><span class="label label-sm label-success">Edit </span></a>
                      <a href="" style="margin-left:2px;"><span class="label label-sm label-success">Delete </span></a>
                      </td>
                    </tr>   
                  @endforeach             
                </tbody>
                </table>
              </div>
            </div>
          </div>
    <!-- END TABLE-->
  </div>
</div>