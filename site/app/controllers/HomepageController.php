<?php

class HomepageController extends BaseController {
    protected $layout = 'admin.layout';

    public function addOffer(){
        $cre = [
        'deal_id' => Input::get('deal_id')
        ];
        $rules = [
        'deal_id' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $count = DB::table('homepage_deals')->count();
            $count++;
            $id = DB::table("homepage_deals")->insertGetID(array('deal_id'=>Input::get("deal_id"),"priority"=>$count));
            return Redirect::Back()->with('success', '<b>Deal</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


    public function getOffers(){
        $this->layout->title = 'Homepage Offers | Admin';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 4;
        $deals = DB::table("deals")->lists('deal_name','id');
        $deals[""] = "Select Deal";
        ksort($deals);
        $homepage_deals = DB::table('homepage_deals')->join('deals','homepage_deals.deal_id','=','deals.id')->select('homepage_deals.*','deals.deal_name')->orderBy('priority','asc')->get();
        $this->layout->main = View::make("admin.homepage.index",array("deals"=>$deals,"homepage_deals"=>$homepage_deals));
    }

     public function orderOffer(){
        $count = 1;
        foreach (Input::get('order') as $item) {
            DB::table('homepage_deals')->where('id',$item)->update(['priority'=>$count]);
            $count++;
        }
        return Redirect::Back()->with('success', '<b>Order</b> has been successfully set');
    }


     public function getdelete($id){
        $id = DB::table("homepage_deals")->where('id',$id)->delete();
        return Redirect::Back()->with('success', 'Successfully deleted');                    
    }

    public function getFlyer(){
        $this->layout->title = 'Homepage Flyers | Admin';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 5;
        $params = DB::table("homepage_parameters")->get();
        $this->layout->main = View::make("admin.homepage.flyer",["params"=>$params]);
    }

    public function putFlyer(){

        if (Input::hasFile('flyer_big')){
            $destinationPath = "images/";
            $extension = Input::file('flyer_big')->getClientOriginalExtension();
            $image = Input::file('flyer_big')->getClientOriginalName();
            Input::file('flyer_big')->move($destinationPath,$image);
            DB::table("homepage_parameters")->where("id",1)->update(array("value"=>$image));
        }

        if (Input::hasFile('flyer_mobile')){
            $destinationPath = "images/";
            $extension = Input::file('flyer_mobile')->getClientOriginalExtension();
            $image = Input::file('flyer_mobile')->getClientOriginalName();
            Input::file('flyer_mobile')->move($destinationPath,$image);
            DB::table("homepage_parameters")->where("id",2)->update(array("value"=>$image));
        }

        if (Input::hasFile('flyer')){
            $destinationPath = "images/";
            $extension = Input::file('flyer')->getClientOriginalExtension();
            $image = Input::file('flyer')->getClientOriginalName();
            Input::file('flyer')->move($destinationPath,$image);
            DB::table("homepage_parameters")->where("id",3)->update(array("value"=>$image));
        }

        return Redirect::Back()->with('success', 'Successfully updated');                    
    }

    public function deleteFlyer($param_id){
        $id = DB::table("homepage_parameters")->where('id',$param_id)->update(["value"=>""]);
        return Redirect::Back()->with('success', 'Successfully deleted');                    
    }

    public function getLeftCreative(){
        $this->layout->title = 'Homepage Creative | Admin';
        $this->layout->top_active = 8;
        $this->layout->sub_active = 6;
        $pms = DB::table("homepage_parameters")->get();
        $params = [];
        foreach ($pms as $pm) {
            $params[$pm->id] = $pm->value;
        }
        $this->layout->main = View::make("admin.homepage.creative",["params"=>$params]);
    }

    public function putLeftCreative(){

        if (Input::hasFile('left_creative')){
            $destinationPath = "images/";
            $extension = Input::file('left_creative')->getClientOriginalExtension();
            $image = Input::file('left_creative')->getClientOriginalName();
            Input::file('left_creative')->move($destinationPath,$image);
            DB::table("homepage_parameters")->where("id",4)->update(array("value"=>$image));
        }

        if (Input::has('left_creative_link')){
            DB::table("homepage_parameters")->where("id",5)->update(array("value"=>Input::get('left_creative_link')));
        }

        if (Input::has('homepage_video')){
            DB::table("homepage_parameters")->where("id",6)->update(array("value"=>Input::get('homepage_video')));
        }

        return Redirect::Back()->with('success', 'Successfully updated');                    
    }

}
