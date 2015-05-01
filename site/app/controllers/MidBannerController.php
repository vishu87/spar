<?php

class MidBannerController extends BaseController {
    protected $layout = 'admin.layout';
     
      public function postOrder(){
            $count = 1;
            $order = Input::get('order');
            if($order){
                foreach ($order as $mid_banner_id) {
                    Midbanner::where('id',$mid_banner_id)->update(array('priority'=>$count));
                    $count++;
                }
            }
            return Redirect::Back();
    }

    public function postAdd(){
        $cre = [
        'mid_banner_name' => Input::get('mid_banner_name')   
        ];
        $rules = [
        'mid_banner_name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('mid_banner_image')){
                $destinationPath = "images/";
                $extension = Input::file('mid_banner_image')->getClientOriginalExtension();
                $image = Input::file('mid_banner_image')->getClientOriginalName();
                Input::file('mid_banner_image')->move($destinationPath,$image);
            } else $image ='';
            
            $id = DB::table("mid_banner")->insertGetID(array('mid_banner_name'=>Input::get("mid_banner_name"),'mid_banner_image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('mid_banner_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getbanners(){
        $this->layout->title = 'All Banners | Spar';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 3;
        $mid_banners = DB::table('mid_banner')->orderBy('priority')->get();
        $this->layout->main = View::make("admin.mid-banners.index",array("mid_banners"=>$mid_banners));
    }

    public function getadd(){
        $this->layout->title = 'Add | Mid Banner';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 3;
        $this->layout->main = View::make("admin.mid-banners.add");
    }

     public function getdelete($mid_banner_id){
        $id = DB::table("mid_banner")->where('id',$mid_banner_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('mid_banner_name').'</b> has been successfully deleted');                    
    }

}
