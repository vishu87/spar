<?php

class ReviewController extends BaseController {
protected $layout = 'admin.layout';

     public function getReviews($id){
        $this->layout->title = 'Spar | Recipe';
        $this->layout->top_active = 12;
        $review = DB::table('customer_review')->join('stores','customer_review.store_id','=','stores.id')->select('customer_review.*','stores.name')->where('customer_review.id',$id)->first();        
        $this->layout->main = View::make("admin.reviews.view",array("review"=>$review));
    }

    public function getReview(){
        $this->layout->title = 'All Recipes | Spar';
        $this->layout->top_active = 12;
        $reviews = DB::table('customer_review')->get();
        $this->layout->main = View::make("admin.reviews.index",array("reviews"=>$reviews));
    }

      public function postAllow(){
        $data = array();
        $data["success"] = true;        
        $review = Review::find(Input::get("review_id"));

        if($review->allow == 0){
            $review->allow = 1;
            $data["allow"] = 1;
        } else {
            $review->allow = 0;
            $data["allow"] = 0;
        }
        $data["review"] = $review;
        $review->save();
        return json_encode($data);
    }
    
       public function getdelete($id){
           $count = 0;
        if($count == 0){
            DB::table("customer_review")->where('customer_review.id',$id)->delete();
            $data["success"] = true;    
        } else {
            $data["success"] = false;
        } 
        return json_encode($data);                 
    }
}