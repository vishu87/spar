<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Homepage Deals <small></small>
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
      Deals
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
  <div class="col-md-12">
    {{Form::open(array("url"=>"admin/homepage/offers/add","mothod"=>"POST"))}}
      <div class="form-body">
          <div class="form-group">
            <div class="col-md-6">
              {{Form::select('deal_id',$deals,'',["class"=>"form-control"])}}
              <span class="error">{{$errors->first('deal_id')}}</span>
            </div>
            <div>
              <button type="submit" class="btn">Add</button>
            </div>
          </div>            
        </div>
      {{Form::close()}}
  </div>
</div>

{{Form::open(array("url"=>"admin/homepage/offers/order","mothod"=>"POST"))}}
  <div class="row">
    <div class="col-md-12" id="sortable1">
      @foreach($homepage_deals as $deal)
        <div class="prim body-div">
          <a href="{{url('/admin/homepage/offers/delete')}}/{{$deal->id}}" class="pull-right" data-id="{{$deal->id}}"><i class="fa fa-remove"></i></a>
          <input name="order[]" type="checkbox" style="display:none" value="{{$deal->id}}" checked>{{$deal->deal_name}}
      </div>
      @endforeach
    </div>
    @if(sizeof($homepage_deals > 1))
      <div class="col-md-12">
        <button type="Submit" class="btn pull-right blue">Save Order</button>
      </div>
    @endif
  </div>
{{Form::close()}}

<!-- BEGIN PAGE CONTENT-->
