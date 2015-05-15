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
            
                DB::table('carousel_items')->where('id',$item)->update(array('priority'=>$count));
            
            $count++;
        }
        return Redirect::Back()->with('success','Order is successfully Updated');
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
        $carousel_items = DB::table('carousel_items')->where('carousel_id',$id)->orderBy('priority','asc')->get();
        $this->layout->main = View::make("admin.carousels.edit",["carousel"=>$carousel,"carousel_items"=>$carousel_items]);
    }

     public function getdelete($id){
        $id = DB::table("carousels")->where('id',$id)->delete();
        return Redirect::Back()->with('success', 'Carousel been successfully deleted');                    
    }
    public function getdeleteImage($id){
        DB::table("carousel_items")->where('id',$id)->delete();
        return Redirect::Back();                  
    }

   public function postImage($id){
       $cre = [
        'image' => Input::file('image')
        ];
        $rules = [
        'image' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::hasFile('image')){
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
            }
            $count = DB::table("carousel_items")->where('carousel_id',$id)->count();
            $count++;
            DB::table("carousel_items")->insertGetID(array('carousel_id'=>$id,'caption'=>Input::get("caption"),'image'=>$image,'priority'=>$count));               
            return Redirect::Back()->with('success', '<b>Carousel Image</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getImages(){
        $images = DB::table("media")->get();
        return View::make('admin.sidebars.get_images', ['images'=>$images]);
    }

}
