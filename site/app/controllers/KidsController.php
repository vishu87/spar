<?php

class KidsController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'title' => Input::get('title'),
        'content' => Input::get('content')
        ];
        $rules = [
        'title' => 'required',
        'content' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('kids_image')){
                $destinationPath = "images/";
                $extension = Input::file('kids_image')->getClientOriginalExtension();
                $image = Input::file('kids_image')->getClientOriginalName();
                Input::file('kids_image')->move($destinationPath,$image);
            } else $image ='';
            $id = DB::table("kids")->insertGetID(array('title'=>Input::get("title"),'content'=>Input::get("content"),'kids_image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('title').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getkids($kids_id){
        $this->layout->title = 'Admin | kids';
        $this->layout->top_active = 4;
        $kids = DB::table('kids')->where('id',$kids_id)->first();
        $this->layout->main = View::make("admin.kids-corner.edit",array("kids"=>$kids));
    }

    public function getkidscorner(){
        $this->layout->title = 'All kids | Admin';
        $this->layout->top_active = 4;
        $kids = DB::table('kids')->get();
        $this->layout->main = View::make("admin.kids-corner.index",array("kids"=>$kids));
    }

    public function getadd(){
        $this->layout->title = 'Add | kids';
        $this->layout->top_active = 4;
        $this->layout->main = View::make("admin.kids-corner.add");
    }

     public function getdelete($kids_id){
        $id = DB::table("kids")->where('id',$kids_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('title').'</b> has been successfully deleted');                    
    }

    public function putupdate($kids_id){       
        $cre = [
        'title' => Input::get('title'),
        'content' => Input::get('content')
        ];
        $rules = [
        'title' => 'required',
        'content' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $kids = Kids::find($kids_id);
            if($kids->exists){
                 if (Input::hasFile('kids_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('kids_image')->getClientOriginalExtension();
                    $image = Input::file('kids_image')->getClientOriginalName();
                    Input::file('kids_image')->move($destinationPath,$image);
                    $kids->kids_image = $image;
                }
                $kids->title = Input::get('title');
                $kids->content = Input::get('content');
                $kids->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('title').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>title not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
