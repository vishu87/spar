<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Products <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/products')}}" class="btn green">Go Back</a>
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
      <a href="{{url('/admin/products')}}">All Products</a>
      <i class="fa fa-angle-right"></i>
    </li>  
    <li>
      Edit Product
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
<div class="alert alert-alert alert-dismissable">
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
          Edit Product
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/products/update/".$product->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Product Name</label>
            <div class="col-md-9">
              {{Form::text('product_name',$product->product_name,array("class"=>"form-control", "placeholder"=>"Enter Product Name"))}}
              <span>{{$errors->first('product_name')}}</span>
            </div>
          </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Brand Name</label>
            <div class="col-md-9">
              {{Form::select('brand_id',$brands,$product->brand_id,array("class"=>"form-control", "placeholder"=>"Enter Brand Name"))}}
              <span>{{$errors->first('brand_id')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Product Price</label>
            <div class="col-md-9">
              {{Form::text('product_price',$product->product_price,array("class"=>"form-control", "placeholder"=>"Enter Product Price"))}}
              <span>{{$errors->first('product_price')}}</span>
            </div>
          </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Product Details</label>
            <div class="col-md-9">
              {{Form::text('product_detail',$product->product_detail,array("class"=>"form-control", "placeholder"=>"Enter Product Details"))}}
              <span>{{$errors->first('product_detail')}}</span>
            </div>
          </div>
          <div class="form-group">
          <label class="col-md-2 control-label">Product Image</label>
          <div class="col-md-5">
           {{Form::file('product_image',array("class"=>"form-control"))}} 
           </div>
           <div class="col-md-4">
             @if($product->product_image == '')
              There is no image uploaded for this product
            @else
              {{HTML::image('images/'.$product->product_image,"",["class"=>"img-brand"])}}
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

<!-- BEGIN PAGE CONTENT-->
<div class="row" style="display:none">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Related Product
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/products/related/save/".$product->id,"method" => "POST","role"=>"form","class" => "form-horizontal"))}}
        <div class="form-body">
          <div class="form-group">
            <label class="col-md-2 control-label">Related Product</label>
            <div class="col-md-8">
               {{Form::select('related_product_id',$all_products,'',array("class"=>"form-control"))}}
               <span>{{$errors->first('related_product_id')}}</span>
            </div>
            <div class="col-md-2">
          </div>
          </div>
         
       <div class="sub-center">
        <button type="submit" class="btn btn-success">Add</button>
      </div>   
      {{Form::close()}}
      @foreach($related_products as $pro)
         <div class="row" style="margin-top:10px;"> 
            <div class="col-md-4">{{$pro->product_name}} </div>     
            <div class="col-md-8"><a href="{{url('/admin/products/related/del/'.$pro->id)}}"><span class="btn btn-danger">Delete </span></a></div>          
            <br>        
        </div> 
      @endforeach
    </div>
  </div>
  <!-- END SAMPLE FORM PORTLET-->
</div>
</div>
</div>

