<?php

class BannerController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'banner_name' => Input::get('banner_name')   
        ];
        $rules = [
        'banner_name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('banner_image')){
                $destinationPath = "images/";
                $extension = Input::file('banner_image')->getClientOriginalExtension();
                $image = Input::file('banner_image')->getClientOriginalName();
                Input::file('banner_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("banner")->insertGetID(array('banner_name'=>Input::get("banner_name"),'banner_image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('banner_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getbanner($banner_id){
        $this->layout->title = 'Admin | Banner';
        $this->layout->top_active = 7;
        $banner = DB::table('banner')->where('id',$banner_id)->first();
        $this->layout->main = View::make("admin.banners.edit",array("banner"=>$banner));
    }

    public function getbanners(){
        $this->layout->title = 'All Banners | Admin';
        $this->layout->top_active = 7;
        $banners = DB::table('banner')->get();
        $this->layout->main = View::make("admin.banners.index",array("banners"=>$banners));
    }

    public function getadd(){
        $this->layout->title = 'Add | Banner';
        $this->layout->top_active = 7;
        $this->layout->main = View::make("admin.banners.add");
    }

     public function getdelete($banner_id){
        $id = DB::table("banner")->where('id',$banner_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('banner_name').'</b> has been successfully deleted');                    
    }

    public function putupdate($banner_id){       
        $cre = [
        'banner_name' => Input::get('banner_name')
        ];
        $rules = [
        'banner_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $banner = Banner::find($banner_id);
            if($banner->exists){
                if (Input::hasFile('banner_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('banner_image')->getClientOriginalExtension();
                    $image = Input::file('banner_image')->getClientOriginalName();
                    Input::file('banner_image')->move($destinationPath,$image);
                    $banner->banner_image = $image;
                }
                $banner->banner_name = Input::get('banner_name');
                $banner->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('banner_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Banner not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
