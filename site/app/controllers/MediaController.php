<?php

class MediaController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'caption' => Input::get('caption')
        ];
        $rules = [
        'caption' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('image')){
                $destinationPath = "images/";
                $extension = Input::file('image')->getClientOriginalExtension();
                $image = Input::file('image')->getClientOriginalName();
                Input::file('image')->move($destinationPath,$image);
            } else return Redirect::Back()->withErrors($validator)->withInput();
            
            $id = DB::table("media")->insertGetID(array('caption'=>Input::get("caption"),'image'=>$image));               
            return Redirect::Back()->with('success', '<b>Image</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getAll(){
        $this->layout->title = 'All Images | Spar';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 3;
        $media = DB::table('media')->get();
        $this->layout->main = View::make("admin.media.index",array("media"=>$media));
    }

    public function getAdd(){
        $this->layout->title = 'Add | Banner';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 3;

        $this->layout->main = View::make("admin.media.add");
    }

     public function delete($media_id){
        $id = DB::table("media")->where('id',$media_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('side_banner_name').'</b> has been successfully deleted');                    
    }

}
