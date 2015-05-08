<?php

class MemberController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'name' => Input::get('name'),
        'password' => Input::get('password'),
        'email' => Input::get('email')
        ];
        $rules = [
        'name' => 'required',
        'password' => 'required|min:8',
        'email' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $password = Hash::make(Input::get('password'));
            $id = DB::table("users")->insertGetID(array('name'=>Input::get("name"),'email'=>Input::get("email"),'username'=>Input::get("email"),'phone'=>Input::get("phone"),'priviledge'=>Input::get("priviledge"),'password' => $password));               
            return Redirect::Back()->with('success', '<b>'.Input::get('name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getMember($member_id){
        $this->layout->title = 'Spar | Member';
        $this->layout->top_active = 10;
        $privs = array("0"=>"Editor","1"=>"Admin");

        $member = DB::table('users')->where('id',$member_id)->first();
        $this->layout->main = View::make("admin.members.edit",array("member"=>$member,"privs"=>$privs));
    }

    public function getMembers(){
        $this->layout->title = 'All Members | Spar';
        $this->layout->top_active = 10;
        $members = DB::table('users')->get();
        $this->layout->main = View::make("admin.members.index",array("members"=>$members));
    }

    public function getadd(){
        $this->layout->title = 'Add | Member';
        $this->layout->top_active = 10;
        $privs = array("0"=>"Editor","1"=>"Admin");
        $this->layout->main = View::make("admin.members.add", ["privs"=>$privs]);
    }

     public function getdelete($member_id){
        $id = DB::table("users")->where('id',$member_id)->delete();
        return Redirect::Back()->with('success', 'Successfully deleted');                    
    }

    public function putupdate($member_id){       
         $cre = [
        'name' => Input::get('name'),
        'email' => Input::get('email')
        ];
        $rules = [
        'name' => 'required',
        'email' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $member = User::find($member_id);
            if($member->exists){
                $member->name = Input::get('name');
                $member->email = Input::get('email');
                $member->username = Input::get('email');
                $member->phone = Input::get('phone');
                $member->priviledge = Input::get('priviledge');
                $member->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Member not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
