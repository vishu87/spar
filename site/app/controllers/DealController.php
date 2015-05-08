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
         if (Input::hasFile('image')){
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
            } else $image ='';       
            $id = DB::table("deals")->insertGetID(array('deal_name'=>Input::get("deal_name"),'category_id'=>Input::get("category_id"),'deal_content'=>Input::get("deal_content"), "image"=>$image ));               
            return Redirect::Back()->with('success', '<b>'.Input::get('deal_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getDeal($deal_id){
        $this->layout->title = 'Spar | Deal';
        $this->layout->top_active = 7;
        
        $deal = DB::table('deals')->where('id',$deal_id)->first();
        $categories = DB::table('product_categories')->lists('product_category','id');  

        $this->layout->main = View::make("admin.deals.edit",array("deal"=>$deal,'categories' =>$categories));
    }

    public function getDeals(){
        $this->layout->title = 'All Deals | Spar';
        $this->layout->top_active = 7;
        $deals = DB::table('deals')->join('product_categories','deals.category_id','=','product_categories.id')->select('deals.*','product_categories.product_category')->get();
        $this->layout->main = View::make("admin.deals.index",array("deals"=>$deals));
    }

    public function getadd(){
        $this->layout->title = 'Add | Deal';
        $this->layout->top_active = 7;
        $categories = DB::table('product_categories')->lists('product_category','id');  
        $this->layout->main = View::make("admin.deals.add",array('categories' =>$categories));
    }

     public function getdelete($deal_id){
        $id = DB::table("deals")->where('id',$deal_id)->delete();
        DB::table('homepage_deals')->where('deal_id',$deal_id)->delete();
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
                if (Input::hasFile('image')){
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
                    $deal->image = $image;
                }       
                $deal->deal_name = Input::get('deal_name');
                $deal->category_id = Input::get('category_id');
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
