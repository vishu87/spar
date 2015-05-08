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
                $image = Input::file('side_banner_image')->getClientOriginalName();
                Input::file('side_banner_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("side_banner")->insertGetID(array('side_banner_name'=>Input::get("side_banner_name"),'side_banner_image'=>$image));               
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

}
