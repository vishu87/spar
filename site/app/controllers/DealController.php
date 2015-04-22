<?php

class DealController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'deal_name' => Input::get('deal_name'),
        'deal_content' => Input::get('deal_content')
        ];
        $rules = [
        'deal_name' => 'required',
        'deal_content' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){           
            $id = DB::table("deals")->insertGetID(array('deal_name'=>Input::get("deal_name"),'product_id'=>Input::get("product_id"),'deal_content'=>Input::get("deal_content")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('deal_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getDeal($deal_id){
        $this->layout->title = 'Admin | Deal';
        $this->layout->top_active = 6;
        $products = DB::table('products')->lists('product_name','id');         
        $deal = DB::table('deals')->where('id',$deal_id)->first();
        $this->layout->main = View::make("admin.deals.edit",array("deal"=>$deal,'products' =>$products));
    }

    public function getDeals(){
        $this->layout->title = 'All Deals | Admin';
        $this->layout->top_active = 6;
        $deals = DB::table('deals')->get();
        $this->layout->main = View::make("admin.deals.index",array("deals"=>$deals));
    }

    public function getadd(){
        $this->layout->title = 'Add | Deal';
        $this->layout->top_active = 6;
        $products = DB::table('products')->lists('product_name','id');  
        $this->layout->main = View::make("admin.deals.add",array('products' =>$products));
    }

     public function getdelete($deal_id){
        $id = DB::table("deal")->where('id',$deal_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('deal_name').'</b> has been successfully deleted');                    
    }

    public function putupdate($deal_id){       
        $cre = [
        'deal_name' => Input::get('deal_name'),
        'deal_content' => Input::get('deal_content')
        ];
        $rules = [
        'deal_name' => 'required',
        'deal_content' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $deal = Deal::find($deal_id);
            if($deal->exists){               
                $deal->deal_name = Input::get('deal_name');
                $deal->product_id = Input::get('product_id');
                $deal->deal_content = Input::get('deal_content');
                $deal->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('deal_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Deal not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }


}
