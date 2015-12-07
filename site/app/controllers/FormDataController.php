<?php

class FormDataController extends BaseController {
    protected $layout = 'admin.layout';

    public function index(){
        $this->layout->title = 'Form Data';
        $this->layout->top_active = 14;
        $forms = DB::table('forms')->get();
        $types = ["1"=>"Credit Card","2"=>"Newsletter"];  
        $this->layout->main = View::make("admin.forms.index",array("forms"=>$forms,"types"=>$types));
    }

     public function getdelete($id){
        $id = DB::table("forms")->where('id',$id)->delete();
        return Redirect::Back()->with('success', 'Successfully deleted');                    
    }

}
