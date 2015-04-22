<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Recipes <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/recipes/add')}}" class="btn green">Add New</a>
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
      All Recipe
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
  <div class="col-md-12 .pro-table">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>
               Recipe Name
            </th>
            <th>
               Recipe Category
            </th>
            <th>
               Preparation Time
            </th>
            <th>
               Cook Time
            </th>
            <th></th>
        </tr>  
      </thead>
      <tfoot>
        <tr>
           <th>
              
            </th>
            <th>
               
            </th>
            <th>
               
            </th>
            <th>
               
            </th>
            <th>
              
            </th>
        </tr>
        <tr>
          <th colspan="8" class="ts-pager form-horizontal">
            <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
            <button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
            <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
            <button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
            <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
            <select class="pagesize input-mini" title="Select page size">
              <option selected="selected" value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
            </select>
            <select class="pagenum input-mini" title="Select page number"></select>
          </th>
        </tr>
      </tfoot>
      <tbody>
        <?php $count = 0; ?>
        @foreach($recipes as $recipe)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$recipe->recipe_name}}                       
            </td> 
            <td>
              {{$recipe->recipe_category}}                       
            </td>            
            <td>
              {{$recipe->preparation_time}}                       
            </td>
            <td>
              {{$recipe->cook_time}}
            </td>
            <td>
              <a href="{{url('/admin/recipes/edit/'.$recipe->id)}}"><span class="btn yellow">Edit </span></a>
              <a href="{{url('/admin/recipes/delete/'.$recipe->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
