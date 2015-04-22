<?php

class PageController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'page_title' => Input::get('page_title'),
        'page_content' => Input::get('page_content')
        ];
        $rules = [
        'page_title' => 'required',
        'page_content' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $id = DB::table("pages")->insertGetID(array('page_title'=>Input::get("page_title"),'page_content'=>Input::get("page_content")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('page_title').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getPage($page_id){
        $this->layout->title = 'Admin | Page';
        $this->layout->top_active = 2;
        $page = DB::table('pages')->where('id',$page_id)->first();
        $this->layout->main = View::make("admin.pages.edit",array("page"=>$page));
    }

    public function getPages(){
        $this->layout->title = 'All Pages | Admin';
        $this->layout->top_active = 2;
        $pages = DB::table('pages')->get();
        $this->layout->main = View::make("admin.pages.index",array("pages"=>$pages));
    }

    public function getadd(){
        $this->layout->title = 'Add | Page';
        $this->layout->top_active = 2;
        $this->layout->main = View::make("admin.pages.add");
    }

     public function getdelete($page_id){
        $id = DB::table("pages")->where('id',$page_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('pages_title').'</b> has been successfully deleted');                    
    }

    public function putupdate($page_id){       
        $cre = [
        'page_title' => Input::get('page_title'),
        'page_content' => Input::get('page_content')
        ];
        $rules = [
        'page_title' => 'required',
        'page_content' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $page = Page::find($page_id);
            if($page->exists){
                $page->page_title = Input::get('page_title');
                $page->page_content = Input::get('page_content');
                $page->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('page_title').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Page not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
