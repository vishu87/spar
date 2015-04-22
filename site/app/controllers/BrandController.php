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
                $image = Input::file('brand_image')->getClientOriginalName();
                Input::file('brand_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("brands")->insertGetID(array('brand_name'=>Input::get("brand_name"),'brand_image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('brand_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getbrand($brand_id){
        $this->layout->title = 'Admin | Brand';
        $this->layout->top_active = 3;
        $brand = DB::table('brands')->where('id',$brand_id)->first();
        $this->layout->main = View::make("admin.brands.edit",array("brand"=>$brand));
    }

    public function getbrands(){
        $this->layout->title = 'All Brands | Admin';
        $this->layout->top_active = 3;
        $brands = DB::table('brands')->get();
        $this->layout->main = View::make("admin.brands.index",array("brands"=>$brands));
    }

    public function getadd(){
        $this->layout->title = 'Add | Brand';
        $this->layout->top_active = 3;
        $this->layout->main = View::make("admin.brands.add");
    }

     public function getdelete($brand_id){
        $id = DB::table("brands")->where('id',$brand_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('brand_name').'</b> has been successfully deleted');                    
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
                    $image = Input::file('brand_image')->getClientOriginalName();
                    Input::file('brand_image')->move($destinationPath,$image);
                    $brand->brand_image = $image;
                }
                $brand->brand_name = Input::get('brand_name');
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
