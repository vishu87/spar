<?php

class SidebarController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'sidebar' => Input::get('sidebar')
        ];
        $rules = [
        'sidebar' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $id = DB::table("sidebars")->insertGetID(array('sidebar'=>Input::get("sidebar")));               
            return Redirect::to('/admin/sidebars/'.$id);                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getAll(){
        $this->layout->title = 'All Sidebars | Spar';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 2;
        $sidebars = DB::table('sidebars')->get();
        $this->layout->main = View::make("admin.sidebars.index",array("sidebars"=>$sidebars));
    }

    public function getEdit($sidebar_id){
        $this->layout->title = 'Edit | Sidebar';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 2;
        $sidebar = DB::table('sidebars')->where('id',$sidebar_id)->first();
        $pages = DB::table('pages')->lists('page_title','id');

        $this->layout->main = View::make("admin.sidebars.edit",["sidebar"=>$sidebar,"pages"=>$pages]);
    }

     public function getdelete($sidebar_id){
        $id = DB::table("sidebars")->where('id',$sidebar_id)->delete();
        return Redirect::Back()->with('delete', '<b>Success</b> has been successfully deleted');                    
    }

}
