<?php

class FormDataController extends BaseController {
    protected $layout = 'admin.layout';

    
    public function index(){
        $id = DB::table("banner")->where('id',$banner_id)->delete();
        return Redirect::Back()->with('success', 'Banner been successfully deleted');                    
    }


}
