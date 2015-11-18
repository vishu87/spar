<?php

class SideBannerController extends BaseController {
    protected $layout = 'admin.layout';

    public function postOrder(){
        $count = 1;
      $order = Input::get('order');
      if($order){
        foreach ($order as $side_banner_id) {
            Sidebanner::where('id',$side_banner_id)->update(array('priority'=>$count));
            $count++;
        }
      }
      return Redirect::Back();
    }

    public function postAdd(){
        $cre = [
        'side_banner_name' => Input::get('side_banner_name')   
        ];
        $rules = [
        'side_banner_name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('side_banner_image')){
                $destinationPath = "images/";
                $extension = Input::file('side_banner_image')->getClientOriginalExtension();
                $image = str_replace(' ','-',Input::file('side_banner_image')->getClientOriginalName());
                $count = 1;
                $image_ori = $image;
                while(File::exists($destinationPath.$image)){
                    $image = $count.'-'.$image_ori;
                    $count++;
                }
                Input::file('side_banner_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("side_banner")->insertGetID(array('side_banner_name'=>Input::get("side_banner_name"),'side_banner_image'=>$image,"link"=>Input::get("link")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('side_banner_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getbanners(){
        $this->layout->title = 'All Banners | Spar';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 2;
        $side_banners = DB::table('side_banner')->orderBy('priority')->get();
        $this->layout->main = View::make("admin.side-banners.index",array("side_banners"=>$side_banners));
    }

    public function getadd(){
        $this->layout->title = 'Add | Banner';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 2;
        $this->layout->main = View::make("admin.side-banners.add");
    }

     public function getdelete($side_banner_id){
        $id = DB::table("side_banner")->where('id',$side_banner_id)->delete();
        return Redirect::Back()->with('success', 'Banner been successfully deleted');                    
    }

    public function getbanner($banner_id){
        $this->layout->title = 'Spar | Banner';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 2;
        $banner = DB::table('side_banner')->where('id',$banner_id)->first();
        $this->layout->main = View::make("admin.side-banners.edit",array("banner"=>$banner));
    }

    public function putUpdate($banner_id){       
        $cre = [
        'side_banner_name' => Input::get('side_banner_name')
        ];
        $rules = [
        'side_banner_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $banner = Sidebanner::find($banner_id);
            if($banner->exists){
                if (Input::hasFile('side_banner_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('side_banner_image')->getClientOriginalExtension();
                    $image = Input::file('side_banner_image')->getClientOriginalName();
                    Input::file('side_banner_image')->move($destinationPath,$image);
                    $banner->side_banner_image = $image;
                }
                $banner->side_banner_name = Input::get('side_banner_name');
                $banner->link = Input::get('link');
                $banner->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('banner_name').'</b> Banner has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Banner not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
