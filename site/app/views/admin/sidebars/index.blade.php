<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Sidebars <small></small>
    </h3>
  </div>
  <div class="col-md-6" style="text-align:right">
    <!-- <a href="{{url('/admin/Sidebars/add')}}" class="btn green">Add New</a> -->
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
      All Sidebars
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
  <div class="col-md-8" style="overflow-x:auto">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>
               Sidebar
            </th>          
            <th></th>
        </tr>  
      </thead>
      <tfoot>
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
        @foreach($sidebars as $sidebar)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$sidebar->sidebar}}                       
            </td>
            <td>
              <a href="{{url('/admin/sidebars/'.$sidebar->id)}}"><span class="btn yellow">Edit </span></a>
              @if(Auth::user()->priviledge == 1)
              <a href="{{url('/admin/sidebars/delete/'.$sidebar->id)}}" style="margin-left:2px;"><span class="btn btn-danger">Delete </span></a>
             @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-md-4 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Add New Sidebar
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/sidebars/store","method" => "POST","role"=>"form","class" => "horizontal-form",))}}
        <div class="form-body">
          <div class="form-group">
            <label class="control-label">Sidebar Name</label>
            <div class="row">
              <div class="col-md-8">
               {{Form::text('sidebar','',array("class"=>"form-control"))}}
               <span class="error">{{$errors->first('sidebar')}}</span>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-success pull-right">Proceed</button>
                
              </div>
          </div>
          </div>
         
       <div class="sub-center">
      </div>   
      {{Form::close()}}
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>
</div>
<!-- BEGIN PAGE CONTENT-->
