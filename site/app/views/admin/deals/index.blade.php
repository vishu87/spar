<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Deals <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/deals/add')}}" class="btn green">Add New</a>
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
      All Deal
    </li>   
  </ul>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Success!</strong> {{Session::get('success')}} </a>
</div>
@endif
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12 pro-table">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>
               Deal Name
            </th>
            <th>
               Category
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
        @foreach($deals as $deal)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$deal->deal_name}}                       
            </td>
             <td>
              {{$deal->product_category}}                       
            </td>
            <td>
              <a href="{{url('/admin/deals/edit/'.$deal->id)}}"><span class="btn yellow">Edit </span></a>
              @if(Auth::user()->priviledge == 1)
              <a href="{{url('/admin/deals/delete/'.$deal->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
