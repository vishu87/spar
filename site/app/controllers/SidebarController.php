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
        $pages[""] = "Select";
        ksort($pages);

        $this->layout->main = View::make("admin.sidebars.edit",["sidebar"=>$sidebar,"pages"=>$pages]);
    }

     public function getdelete($sidebar_id){
        $id = DB::table("sidebars")->where('id',$sidebar_id)->delete();
        return Redirect::Back()->with('delete', '<b>Success</b> has been successfully deleted');                    
    }

    //AJAX

    public function addLink($sidebar_id){
        $count = DB::table("sidebar_items")->where('sidebar_id',$sidebar_id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('page_id'=>Input::get("page_id"), 'sidebar_id'=>$sidebar_id, 'type' => 1, 'priority'=>$count));           

        $page = DB::table('pages')->where('id',Input::get("page_id"))->first();
        return View::make('admin.sidebars.add_link', ['page'=>$page, 'id'=>$id]);
    }

    public function addTitle($sidebar_id){
        $count = DB::table("sidebar_items")->where('sidebar_id',$sidebar_id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('title'=>Input::get("title"), 'sidebar_id'=>$sidebar_id, 'type' => 2, 'priority'=>$count));           
        return View::make('admin.sidebars.add_title', ['title'=>Input::get("title"), 'id'=>$id]);
    }

    public function addImage($sidebar_id){
        $count = DB::table("sidebar_items")->where('sidebar_id',$sidebar_id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('media_id'=>Input::get("image_id"), 'sidebar_id'=>$sidebar_id, 'type' => 3, 'priority'=>$count));
        $image = DB::table('media')->where('id',Input::get("image_id"))->first();    
        return View::make('admin.sidebars.add_image', ['image'=>$image, 'id'=>$id]);
    }

    public function addHTML($sidebar_id){
        $count = DB::table("sidebar_items")->where('sidebar_id',$sidebar_id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('custom_html'=>Input::get("custom_html"), 'sidebar_id'=>$sidebar_id, 'type' => 4, 'priority'=>$count));           
        return View::make('admin.sidebars.add_html', ['custom_html'=>Input::get("custom_html"), 'id'=>$id]);
    }


    public function getImages(){
        $images = DB::table("media")->get();
        return View::make('admin.sidebars.get_images', ['images'=>$images]);
    }

}
