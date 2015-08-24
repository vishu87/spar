<?php

class StoreController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'name' => Input::get('name'),
        'address' => Input::get('address'),
        'lat' => Input::get('lat'),
        'lng' => Input::get('lng')
        ];
        $rules = [
        'name' => 'required',
        'address' => 'required',
        'lat' => 'required',
        'lng' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){      
            $id = DB::table("stores")->insertGetID(array('name'=>Input::get("name"),'address'=>Input::get("address"),'lat'=>Input::get("lat"), "lng"=>Input::get("lng"),"telephone"=>Input::get("telephone"), "city_id" =>Input::get("city_id"), "upcoming" =>Input::get("upcoming") ));               
            return Redirect::Back()->with('success', '<b>'.Input::get('name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getStore($store_id){
        $this->layout->title = 'Spar | Store';
        $this->layout->top_active = 11;
        
        $store = DB::table('stores')->where('id',$store_id)->first();
        $cities = DB::table('cities')->lists('city','id');  

        $this->layout->main = View::make("admin.stores.edit",array("store"=>$store,'cities' =>$cities));
    }

    public function getStores(){
        $this->layout->title = 'All Stores | Spar';
        $this->layout->top_active = 11;
        $stores = DB::table('stores')->join('cities','stores.city_id','=','cities.id')->select('stores.*','cities.city')->get();
        $this->layout->main = View::make("admin.stores.index",array("stores"=>$stores));
    }

    public function getadd(){
        $this->layout->title = 'Add | Store';
        $this->layout->top_active = 11;
        $cities = DB::table('cities')->lists('city','id');  
        $this->layout->main = View::make("admin.stores.add",array('cities' =>$cities));
    }

     public function getdelete($store_id){
        $id = DB::table("stores")->where('id',$store_id)->delete();
        return Redirect::Back()->with('success', 'Successfully deleted');                    
    }

    public function putupdate($store_id){       
       $cre = [
        'name' => Input::get('name'),
        'address' => Input::get('address'),
        'lat' => Input::get('lat'),
        'lng' => Input::get('lng')
        ];
        $rules = [
        'name' => 'required',
        'address' => 'required',
        'lat' => 'required',
        'lng' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $store = Store::find($store_id);
            if($store->exists){
                    
                $store->name = Input::get('name');
                $store->address = Input::get('address');
                $store->lat = Input::get('lat');
                $store->lng = Input::get('lng');
                $store->city_id = Input::get('city_id');
                $store->telephone = Input::get('telephone');
                $store->upcoming = Input::get('upcoming');
                $store->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Deal not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
