<?php

class ProductController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'product_name' => Input::get('product_name'),
        'product_price' => Input::get('product_price'),
        'product_detail' => Input::get('product_detail')
        ];
        $rules = [
        'product_name' => 'required',
        'product_price' => 'required',
        'product_detail' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('product_image')){
                $destinationPath = "images/";
                $extension = Input::file('product_image')->getClientOriginalExtension();
                $image = Input::file('product_image')->getClientOriginalName();
                Input::file('product_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("products")->insertGetID(array('product_name'=>Input::get("product_name"),'brand_id'=>Input::get("brand_id"),'product_image'=>$image,'product_price'=>Input::get("product_price"),'product_detail'=>Input::get("product_detail")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('product_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getproduct($product_id){
        $this->layout->title = 'Spar | Product';
        $this->layout->top_active = 6;
        $brands = DB::table('brands')->lists('brand_name','id'); 
        $all_products = DB::table('products')->lists('product_name','id');
        $related_products = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.product_name')->get();
        $brand_get = DB::table('brands')->select('brand_name','id')->get();   
        $product = DB::table('products')->where('id',$product_id)->first();
        $this->layout->main = View::make("admin.products.edit",array("product"=>$product,'brands'=>$brands,'brand_get'=>$brand_get,'all_products'=>$all_products,'related_products'=>$related_products));
    }

    public function getproducts(){
        $this->layout->title = 'All Products | Spar';
        $this->layout->top_active = 6;
        $products = DB::table('products')->join('brands','products.brand_id','=','brands.id')->select('products.*','brands.brand_name')->get();
        $this->layout->main = View::make("admin.products.index",array("products"=>$products));
    }

    public function getadd(){
        $this->layout->title = 'Add | Product';
        $this->layout->top_active = 6;
        $brands = DB::table('brands')->lists('brand_name','id');
        $this->layout->main = View::make("admin.products.add",array('brands' =>$brands));
    }

     public function getdelete($product_id){
        $id = DB::table("products")->where('id',$product_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('product_name').'</b> has been successfully deleted');                    
    }

    public function putupdate($product_id){       
        $cre = [
        'product_name' => Input::get('product_name'),
        'product_price' => Input::get('product_price'),
        'product_detail' => Input::get('product_detail')
        ];
        $rules = [
        'product_name' => 'required',
        'product_price' => 'required',
        'product_detail' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $product = Product::find($product_id);
            if($product->exists){
                if (Input::hasFile('product_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('product_image')->getClientOriginalExtension();
                    $image = Input::file('product_image')->getClientOriginalName();
                    Input::file('product_image')->move($destinationPath,$image);
                    $product->product_image = $image;
                }
                $product->product_name = Input::get('product_name');
                $product->product_price = Input::get('product_price');
                $product->product_detail = Input::get('product_detail');
                $product->brand_id = Input::get('brand_id');
                $product->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('product_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>product not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

      public function postAddrelated($product_id){
        $id = DB::table("related_products")->insertGetID(array('product_id'=>$product_id,'related_product_id'=>Input::get("related_product_id")));               
        return Redirect::Back()->with('success', 'Related product has been successfully added');            
    }

     public function getdelpro($id){
        DB::table("related_products")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'product has been successfully deleted');                    
    }

}
