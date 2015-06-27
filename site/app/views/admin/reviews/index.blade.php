<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Reviews <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new"> </div>
</div>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{url('/admin')}}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      All Reviews
    </li>   
  </ul>
</div>
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12 .pro-table">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>Name</th>
            <th>
               Email
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
        @foreach($reviews as $review)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$review->username}}                       
            </td> 
            <td>
              {{$review->email}}
            </td>
            <td>
              <a href="{{url('/admin/customer-reviews/'.$review->id)}}"><span class="btn yellow">View </span></a>                 
                @if($review->allow == 0)
                  <a href="javascript:;" class="btn green allowreviewbtn" data-id="{{$review->id}}" >Allow</a>
                @else
                  <a href="javascript:;" class="btn red allowreviewbtn" data-id="{{$review->id}}">Disallow</a>
                @endif                   
             @if(Auth::user()->priviledge == 1)
              <a href="javascript:;" class="reviewremove" data-id="{{$review->id}}" class="del"><span class="btn btn-danger">Delete </span></a>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
