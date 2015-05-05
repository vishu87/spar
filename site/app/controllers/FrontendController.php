<?php

class FrontendController extends BaseController {
   protected $layout = 'frontend.layout';

   public function index(){
        $this->layout->title = 'Home Page | SPAR Nigeria';
        $this->layout->main = View::make('frontend.home');
   }

 public function brand(){
        $this->layout->title = 'Brand | SPAR Nigeria';
        $this->layout->main = View::make('frontend.brand');
   }

    public function kids(){
        $this->layout->title = 'Kids Corner | SPAR Nigeria';
        $this->layout->main = View::make('frontend.kids');
   }

    public function deal(){
        $this->layout->title = 'Deals | SPAR Nigeria';
        $this->layout->main = View::make('frontend.deal');
   }
   public function brandgroceries(){
        $this->layout->title = 'Brand Groceries | SPAR Nigeria';
        $this->layout->main = View::make('frontend.brand_grocery');
   }
   

    public function getRecipesdetail($id){
        $this->layout->title = 'All Recipes | Spar';
        $recipes = Recipe::select('recipe.*')->where('recipe.id',$id)->first();
        $this->layout->main = View::make('frontend.recipe',array(
            "recipes" => $recipes
        ));          
    }  
     public function getAddRecipesdetail(){
        $this->layout->title = 'Add Recipe | SPAR Nigeria';
        $this->layout->main = View::make('frontend.addrecipe');
   }


   public function postAdd(){
        $cre = [
        'recipe_name' => Input::get('recipe_name'),
        'ingred' => Input::get('ingred')     
        ];
        $rules = [
        'recipe_name' => 'required',
        'ingred' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('recipe_image')){
                $destinationPath = "images/";
                $extension = Input::file('recipe_image')->getClientOriginalExtension();
                $image = Input::file('recipe_image')->getClientOriginalName();
                Input::file('recipe_image')->move($destinationPath,$image);
            } else $image ='';

            $id = DB::table("addfront_recipes")->insertGetID(array('recipe_name'=>Input::get("recipe_name"),'recipe_image'=>$image,
                'ingred'=>Input::get("ingred"),'cook_time'=>Input::get("cook_time"),'method'=>Input::get("method")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('recipe_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getAbout($id){
        $this->layout->title = 'About Us  | Spar Nigeria';
        $pages = Page::select('pages.*')->where('pages.id',$id)->first();
        $this->layout->main = View::make('frontend.pages.aboutus',array(
            "pages" => $pages
        ));          
    }  

    public function aboutproduct(){
        $this->layout->title = 'About Product Range | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.about_product');
   }
   public function abouttrivia(){
        $this->layout->title = 'About Product Range | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.trivia');
   }

   public function aboutCustomer_review(){
        $this->layout->title = 'About Customer Reviews | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.customer_review');
   }
   public function aboutCustomer_service(){
        $this->layout->title = 'About Customer Service | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.customer_service');
   }   

   public function aboutReward_card(){
        $this->layout->title = 'About Reward Card | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.reward_card');
   } 
    public function aboutGift_card(){
        $this->layout->title = 'About Gift Card | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.gift_card');
   } 
   
}