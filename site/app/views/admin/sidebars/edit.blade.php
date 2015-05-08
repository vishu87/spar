<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Sidebar <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/pages')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/sidebars')}}">Sidebars</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Sidebar
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
  <div class="col-md-4">
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Select Item
        </div>          
      </div>
      <div class="portlet-body">
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            {{Form::text('title','',["class"=>"form-control"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_title">Add Title <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            {{Form::select('add_link',$pages,'',["class"=>"form-control","style"=>"width: 90%;"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_page">Add Link <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
            <a class="btn default blue" id="select_image" data-toggle="modal" href="#full">Select</a>
            <div style="width:50px; float:left" id="img-view"></div>
            {{Form::hidden('image_id','',["class"=>"form-control"])}}
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_image">Add Image <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
        <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
          <div class="col-md-9">
          </div>
          <div class="col-md-3"><button class="btn green pull-right" id="add_html">Add HTML <i class="fa fa-hidden fa-spinner fa-spin"></i></button></div>

        </div>
      </div>
    </div>
  </div>
   <div class="col-md-8">
    {{Form::open(array("url"=>"/admin/sidebars/save/".$sidebar->id,"method"=>"POST"))}}
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          {{$sidebar->sidebar}}
          <input type="hidden" id="sidebar_id" name="sidebar_id" value="{{$sidebar->id}}">
        </div>
      <div class="actions">
          <button type="submit" href="#" class="btn btn-default btn-sm">
          <i class="fa fa-save"></i> Save </button>
        </div>         
      </div>
      <div class="portlet-body">
        <div class="row">
          <div class="col-md-12">
            <div id="sidebar-body">
              @foreach($sidebar_items as $sidebar_item)
                @if($sidebar_item->type == 1)
                  <div class="prim body-div">
                    <a href="javascript:;" class="remove pull-right" data-id="{{$sidebar_item->id}}"><i class="fa fa-remove"></i></a>
                    <input name="order[]" checked type="checkbox" style="display:none" value="{{$sidebar_item->id}}">Page Link: {{$sidebar_item->page_title}}
                  </div>
                @endif
                 @if($sidebar_item->type == 2)
                  <div class="prim body-div">
                    <a href="javascript:;" class="remove pull-right" data-id="{{$sidebar_item->id}}"><i class="fa fa-remove"></i></a>
                    <input name="order[]" checked type="checkbox" style="display:none" value="{{$sidebar_item->id}}">Title: {{$sidebar_item->title}}
                  </div>
                @endif
                @if($sidebar_item->type == 3)
                  <div class="prim body-div">
                    <a href="javascript:;" class="remove pull-right" data-id="{{$sidebar_item->id}}"><i class="fa fa-remove"></i></a>
                    <input name="order[]" checked type="checkbox" style="display:none" value="{{$sidebar_item->id}}"><img src="{{url("/")}}/images/tn_{{$sidebar_item->image}}" style="width:50px; height:auto">
                  </div>
                @endif
                @if($sidebar_item->type == 4)
                  <div class="prim body-div">
                    <a href="javascript:;" class="remove pull-right" data-id="{{$sidebar_item->id}}"><i class="fa fa-remove"></i></a>
                    <input name="order[]" checked type="checkbox" style="display:none" value="{{$sidebar_item->id}}">
                    <textarea class="editor1 form-control" name="textarea_{{$sidebar_item->id}}">{{$sidebar_item->custom_html}}
                    </textarea>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
        
      </div>
    </div>
  {{Form::close()}}

  </div>
</div>