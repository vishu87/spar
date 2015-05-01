<?php

class UserController extends BaseController {
     protected $layout = 'admin.layout';
      
    public function getMain(){
        $title = 'Admin | Spar';
        return View::make("login",["title"=>$title]);
    }
     public function getDashboard(){
        $this->layout->title = 'Dashboard | Spar';
        $this->layout->top_active = 1;
        $this->layout->main = View::make("admin.main");
    }

    public function postLogin(){
        $cre = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        $rules = [
            'username' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Auth::attempt($cre)){
                return Redirect::to('/admin/dashboard');
            } else {
                return  Redirect::Back()->withErrors($validator)->withInput()->with('fail','Username and password does not match');
            }
            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('fail','Please fill all the fields.');
        }
    }
}