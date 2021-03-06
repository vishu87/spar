<?php

class BrandController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'brand_name' => Input::get('brand_name')   
        ];
        $rules = [
        'brand_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('brand_image')){
                $destinationPath = "images/";
                $extension = Input::file('brand_image')->getClientOriginalExtension();
                   $image = str_replace(' ','-',Input::file('brand_image')->getClientOriginalName());
                    $count = 1;
                    $image_ori = $image;
                    while(File::exists($destinationPath.$image)){
                        $image = $count.'-'.$image_ori;
                        $count++;
                    }
                Input::file('brand_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("brands")->insertGetID(array('brand_name'=>Input::get("brand_name"),'brand_image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('brand_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getbrand($brand_id){
        $this->layout->title = 'Spar | Brand';
        $this->layout->top_active = 4;
        $brand = DB::table('brands')->where('id',$brand_id)->first();
         $categories = DB::table('product_categories')->lists('product_category','id');  
        $this->layout->main = View::make("admin.brands.edit",array("brand"=>$brand,"categories"=>$categories));
    }

    public function getbrands(){
        $this->layout->title = 'All Brands | Spar';
        $this->layout->top_active = 4;
        $brands = DB::table('brands')->get();
        $this->layout->main = View::make("admin.brands.index",array("brands"=>$brands));
    }

    public function getadd(){
        $this->layout->title = 'Add | Brand';
        $this->layout->top_active = 4;
        $categories = DB::table('product_categories')->lists('product_category','id');  
        $this->layout->main = View::make("admin.brands.add",array('categories' =>$categories));
    }

     public function getdelete($brand_id){
        $id = DB::table("brands")->where('id',$brand_id)->delete();
        return Redirect::Back()->with('success', '<b>'.Input::get('brand_name').'</b> has been successfully deleted');                    
    }

    public function putupdate($brand_id){       
        $cre = [
        'brand_name' => Input::get('brand_name')
        ];
        $rules = [
        'brand_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $brand = Brand::find($brand_id);
            if($brand->exists){
                if (Input::hasFile('brand_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('brand_image')->getClientOriginalExtension();
                    $image = str_replace(' ','-',Input::file('brand_image')->getClientOriginalName());
                    $count = 1;
                    $image_ori = $image;
                    while(File::exists($destinationPath.$image)){
                        $image = $count.'-'.$image_ori;
                        $count++;
                    }
                        Input::file('brand_image')->move($destinationPath,$image);
                        $brand->brand_image = $image;
                    }
                $brand->brand_name = Input::get('brand_name');
                $brand->description = Input::get('description');
                $brand->priority = Input::get('priority');
                $brand->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('brand_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Brand not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
