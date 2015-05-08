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
            
            $id = DB::table("products")->insertGetID(array('product_name'=>Input::get("product_name"),'category_id'=>Input::get("category_id"),'product_image'=>$image,'product_price'=>Input::get("product_price"),'product_detail'=>Input::get("product_detail")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('product_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function postCategory(){
        $cre = [
        'product_category' => Input::get('product_category'),
        ];
        $rules = [
        'product_category' => 'required',
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('image')){
                $destinationPath = "images/";
                $extension = Input::file('image')->getClientOriginalExtension();
                $image = Input::file('image')->getClientOriginalName();
                Input::file('image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("product_categories")->insertGetID(array('product_category'=>Input::get("product_category"),'image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('product_category').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getproduct($product_id){
        $this->layout->title = 'Spar | Product';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 1;
        $product_categories = DB::table('product_categories')->lists('product_category','id'); 
        $all_products = DB::table('products')->lists('product_name','id');
        $related_products = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.product_name')->get();
        $brand_get = DB::table('product_categories')->select('product_category','id')->get();   
        $product = DB::table('products')->where('id',$product_id)->first();
        $this->layout->main = View::make("admin.products.edit",array("product"=>$product,'product_categories'=>$product_categories,'brand_get'=>$brand_get,'all_products'=>$all_products,'related_products'=>$related_products));
    }

     public function editCategory($id){
        $this->layout->title = 'Spar | Product';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 2;
          
        $category = DB::table('product_categories')->where('id',$id)->first();
        $this->layout->main = View::make("admin.products.editCategory",array("category"=>$category));
    }

    public function getproducts(){
        $this->layout->title = 'All Products | Spar';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 1;
        $products = DB::table('products')->join('product_categories','products.category_id','=','product_categories.id')->select('products.*','product_categories.product_category')->get();
        $this->layout->main = View::make("admin.products.index",array("products"=>$products));
    }
     public function getCategories(){
        $this->layout->title = 'All Products Categories | Spar';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 2;
        $categories = DB::table('product_categories')->get();
        $this->layout->main = View::make("admin.products.categories",array("categories"=>$categories));
    }

    public function getadd(){
        $this->layout->title = 'Add | Product';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 1;
        $product_categories = DB::table('product_categories')->lists('product_category','id');
        $this->layout->main = View::make("admin.products.add",array('product_categories' =>$product_categories));
    }
    
    public function addCategory(){
        $this->layout->title = 'Add | Product';
        $this->layout->top_active = 6;
        $this->layout->sub_active = 2;
        $product_categories = DB::table('product_categories')->lists('product_category','id');
        $this->layout->main = View::make("admin.products.addcategory",array('product_categories' =>$product_categories));
    }

     public function getdelete($product_id){
        $id = DB::table("products")->where('id',$product_id)->delete();
        return Redirect::Back()->with('success', 'Product has been successfully deleted');                    
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
                $product->category_id = Input::get('category_id');
                $product->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('product_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>product not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function updateCategory($id){       
        $cre = [
        'product_category' => Input::get('product_category')
        ];
        $rules = [
        'product_category' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            DB::table('product_categories')->where('id',$id)->update(array('product_category'=>Input::get("product_category")));
                if (Input::hasFile('image')){
                    $destinationPath = "images/";
                    $extension = Input::file('image')->getClientOriginalExtension();
                    $image = Input::file('image')->getClientOriginalName();
                    Input::file('image')->move($destinationPath,$image);
                    DB::table('product_categories')->where('id',$id)->update(array('image'=>$image));
                }
                return Redirect::Back()->with('success', '<b>'.Input::get('product_name').'</b> has been successfully updated');
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

    public function deleteCategory($id){
        DB::table("product_categories")->where('id',$id)->delete();
        return Redirect::Back()->with('success', 'Product Category has been successfully deleted');                    
    }

}
