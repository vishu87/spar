<?php

class MediaController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        include(app_path().'/libraries/resize_img.inc.php');
        
        $cre = [
        'caption' => Input::get('caption'),
        'image' => Input::file('image')
        ];
        $rules = [
        'caption' => 'required',
        'image' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('image')){
                $destinationPath = "images/";
                $extension = Input::file('image')->getClientOriginalExtension();
                $image = str_replace(' ','-',Input::file('image')->getClientOriginalName());
                $count = 1;
                $image_ori = $image;
                while(File::exists($destinationPath.$image)){
                    $image = $count.'-'.$image_ori;
                    $count++;
                }
                Input::file('image')->move($destinationPath,$image);
                $resizer=new SimpleImage();
                $resizer->load(base_path().'/../'.$destinationPath.$image);
                $resizer->resizeToWidth(250);
                $resizer->cropImage(250,250,true);
                $resizer->save(base_path().'/../'.$destinationPath.'tn_'.$image);
            }
            
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

     public function getdelete($media_id){
        $id = DB::table("media")->where('id',$media_id)->delete();
        return Redirect::Back()->with('success', '<b>Image</b> has been successfully deleted');                    
    }

}
