<?php

class BannerController extends BaseController {
    protected $layout = 'admin.layout';

        public function postOrder(){
            $count = 1;
            $order = Input::get('order');
            if($order){
                foreach ($order as $banner_id) {
                    Banner::where('id',$banner_id)->update(array('priority'=>$count));
                    $count++;
                }
            }
            return Redirect::Back();
    }

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
                $image = str_replace(' ','-',Input::file('banner_image')->getClientOriginalName());
                $count = 1;
                $image_ori = $image;
                while(File::exists($destinationPath.$image)){
                    $image = $count.'-'.$image_ori;
                    $count++;
                }
                Input::file('banner_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("banner")->insertGetID(array('banner_name'=>Input::get("banner_name"),'banner_image'=>$image, "link"=>Input::get("link") ));               
            return Redirect::Back()->with('success', '<b>'.Input::get('banner_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getbanner($banner_id){
        $this->layout->title = 'Spar | Banner';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 1;
        $banner = DB::table('banner')->where('id',$banner_id)->first();
        $this->layout->main = View::make("admin.banners.edit",array("banner"=>$banner));
    }

    public function getbanners(){
        $this->layout->title = 'All Banners | Spar';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 1;
        $banners = DB::table('banner')->orderBy('priority')->get();
        $this->layout->main = View::make("admin.banners.index",array("banners"=>$banners));
    }

    public function getadd(){
        $this->layout->title = 'Add | Banner';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 1;
        $this->layout->main = View::make("admin.banners.add");
    }

    public function getdelete($banner_id){
        $id = DB::table("banner")->where('id',$banner_id)->delete();
        return Redirect::Back()->with('success', 'Banner been successfully deleted');                    
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
                $banner->link = Input::get('link');
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
