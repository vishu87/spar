<?php

class CarouselController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'name' => Input::get('name')
        ];
        $rules = [
        'name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $id = DB::table("carousels")->insertGetID(array('name'=>Input::get("name")));           
            return Redirect::to('/admin/carousels/'.$id);                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function putUpdate($id){
       $cre = [
        'name' => Input::get('name')
        ];
        $rules = [
        'name' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            DB::table("carousels")->where('id',$id)->update(array('name'=>Input::get("name")));           
            return Redirect::Back()->with('success','Successfully Updated');
                            
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


    public function postSave($id){
        $count = 1;
        foreach (Input::get('order') as $item) {
            if(Input::has('textarea_'.$item)){
                DB::table('sidebar_items')->where('id',$item)->update(array('priority'=>$count,'custom_html'=>Input::get('textarea_'.$item)));
            } else {
                DB::table('sidebar_items')->where('id',$item)->update(array('priority'=>$count));
            }
            $count++;
        }
        return Redirect::Back()->with('success','Successfully Updated');
    }

    public function getAll(){
        $this->layout->title = 'Carousels | Spar';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 4;
        $carousels = DB::table('carousels')->get();
        $this->layout->main = View::make("admin.carousels.index",array("carousels"=>$carousels));
    }

    public function getEdit($id){
        $this->layout->title = 'Edit | Carousel';
        $this->layout->top_active = 3;
        $this->layout->sub_active = 4;
        $carousel = DB::table('carousels')->where('id',$id)->first();

        $carousel_items = DB::table('carousel_items')->where('carousel_id',$id)->get();
        $this->layout->main = View::make("admin.carousels.edit",["carousel"=>$carousel,"carousel_items"=>$carousel_items]);
    }

     public function getdelete($id){
        $id = DB::table("sidebars")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>Success</b> has been successfully deleted');                    
    }

    //AJAX

    public function addLink($id){
        $count = DB::table("sidebar_items")->where('id',$id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('page_id'=>Input::get("page_id"), 'id'=>$id, 'type' => 1, 'priority'=>$count));           

        $page = DB::table('pages')->where('id',Input::get("page_id"))->first();
        return View::make('admin.sidebars.add_link', ['page'=>$page, 'id'=>$id]);
    }

    public function addTitle($id){
        $count = DB::table("sidebar_items")->where('id',$id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('title'=>Input::get("title"), 'id'=>$id, 'type' => 2, 'priority'=>$count));           
        return View::make('admin.sidebars.add_title', ['title'=>Input::get("title"), 'id'=>$id]);
    }

    public function addImage($id){
        $count = DB::table("sidebar_items")->where('id',$id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('media_id'=>Input::get("image_id"), 'id'=>$id, 'type' => 3, 'priority'=>$count));
        $image = DB::table('media')->where('id',Input::get("image_id"))->first();    
        return View::make('admin.sidebars.add_image', ['image'=>$image, 'id'=>$id]);
    }

    public function addHTML($id){
        $count = DB::table("sidebar_items")->where('id',$id)->count();
        $count++;
        $id = DB::table("sidebar_items")->insertGetID(array('id'=>$id, 'type' => 4, 'priority'=>$count));           
        return View::make('admin.sidebars.add_html', ['id'=>$id]);
    }

    public function removeItem($id){
        $id = DB::table("sidebar_items")->where('id',Input::get('itemid'))->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>Success</b> has been successfully deleted');                    
    }

    public function getImages(){
        $images = DB::table("media")->get();
        return View::make('admin.sidebars.get_images', ['images'=>$images]);
    }

}
