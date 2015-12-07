<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Form Data <small></small>
    </h3>
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
      Form Data
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
  <div class="col-md-12" style="overflow-x:auto">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>
               Form Type
            </th>
            <th>Form Data</th>   
            <th></th>
        </tr>  
      </thead>

      <tbody>
        <?php $count = 0; ?>
        @foreach($forms as $form)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{(isset($types[$form->type]))?$types[$form->type]:''}}                       
            </td>
            <td>
              {{$form->message}}                       
            </td>
            <td>
              @if(Auth::user()->priviledge == 1)
              <a href="{{url('/admin/forms/delete/'.$form->id)}}" style="margin-left:2px;"><span class="btn btn-danger">Delete </span></a>
             @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
