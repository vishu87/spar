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

   


}
