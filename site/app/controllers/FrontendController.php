<?php

class FrontendController extends BaseController {
  
  protected $layout = 'frontend.layout';

  public function index(){
    $this->layout->title = 'Home Page | SPAR Nigeria';
    $main_banners = DB::table('banner')->orderBy('priority','asc')->get();
    $side_banners = DB::table('side_banner')->orderBy('priority','asc')->get();
    $mid_banners = DB::table('mid_banner')->orderBy('priority','asc')->get();
    $services = Service::get();
    $homepage_deals = DB::table('homepage_deals')->select('deals.deal_name','deals.image')->join('deals','homepage_deals.deal_id','=','deals.id')->orderBy('priority','asc')->get();
    $params = [];
    $homepage_params = DB::table('homepage_parameters')->get();
    foreach ($homepage_params as $pms) {
      $params[$pms->id] = $pms->value; 
    }
    $this->layout->main = View::make('frontend.home',array(
      "main_banners" => $main_banners,
      "side_banners" => $side_banners,
      "mid_banners" => $mid_banners,
      "homepage_deals" => $homepage_deals,
      "params"  => $params,
      "services" => $services
    ));
  }

  public function brand(){
        $this->layout->title = 'Brand | SPAR Nigeria';
        $this->layout->main = View::make('frontend.brand');
  }

  public function pages($page_slug, $id = null){

      $page = Page::where('pages.page_slug',$page_slug)->select('pages.*','top_active_page.page_slug as top_active_page_slug','top_active_page.page_title as top_active_page_title')->leftJoin('pages as top_active_page','pages.top_active','=','top_active_page.id')->first();
      if($page->exists()){
        if($page->left_sidebar == 0 && $page->right_sidebar == 0){
          $middle_span =  12;
        } else if($page->left_sidebar != 0 && $page->right_sidebar != 0 ) {
          $middle_span = 6;
        } else {
          $middle_span = 9;
        }
        if($page->left_sidebar != 0){
          $sidebar_left = DB::table('sidebar_items')->select('sidebar_items.*','pages.id as page_id','pages.page_title','pages.page_slug','media.image','media.caption')->leftJoin('pages','sidebar_items.page_id','=','pages.id')->leftJoin('media','sidebar_items.media_id','=','media.id')->where('sidebar_items.sidebar_id',$page->left_sidebar)->orderBy('sidebar_items.priority','asc')->get();
          $left_sidebar = View::make('frontend.sidebar',['sidebar'=>$sidebar_left,"page"=>$page,"type"=>1]);
        } else {
          $left_sidebar = '';
        }

        if($page->right_sidebar != 0){
          $sidebar_right = DB::table('sidebar_items')->select('sidebar_items.*','pages.id as page_id','pages.page_title','pages.page_slug','media.image','media.caption')->leftJoin('pages','sidebar_items.page_id','=','pages.id')->leftJoin('media','sidebar_items.media_id','=','media.id')->where('sidebar_items.sidebar_id',$page->right_sidebar)->orderBy('sidebar_items.priority','asc')->get();
          $right_sidebar = View::make('frontend.sidebar',['sidebar'=>$sidebar_right,"page"=>$page,"type"=>2]);
        } else {
          $right_sidebar = '';
        }
        $this->layout->page = $page;
        $this->layout->title = ($page->meta_title != '')?$page->meta_title:$page->page_title. ' | SPAR Nigeria';
        $this->layout->meta_description = $page->meta_description;
        $this->layout->meta_keywords = $page->meta_keywords;
        //dummy
        $stores = array();
        if($page->page_content == -1){

          if($page->page_slug == 'deals'){
            if(!$id){
              $deals = DB::table('deals')->select('deals.*','product_categories.product_category', 'product_categories.color')->join('product_categories','deals.category_id','=','product_categories.id')->orderBy('product_categories.product_category','asc')->get();
            } else {
              $deals = DB::table('deals')->select('deals.*','product_categories.product_category', 'product_categories.color')->join('product_categories','deals.category_id','=','product_categories.id')->where('deals.type',$id)->orderBy('product_categories.product_category','asc')->get();

            }
            $page->page_content = View::make('frontend.deal', array(
              "deals" => $deals
              ));
          
          }

          if($page->page_slug == 'store-locator'){
            if(isset($id)){
              $stores = DB::table('stores')->select('stores.*','cities.city')->join('cities','stores.city_id','=','cities.id')->where('stores.upcoming',0)->orderBy('cities.city','asc')->where('cities.id',$id)->get();
            } else {
              $stores = DB::table('stores')->select('stores.*','cities.city')->join('cities','stores.city_id','=','cities.id')->where('stores.upcoming',0)->orderBy('cities.city','asc')->get();
            }
            $upcoming_stores = DB::table('stores')->select('stores.*','cities.city')->join('cities','stores.city_id','=','cities.id')->where('stores.upcoming',1)->orderBy('cities.city','asc')->get();
            $cities = DB::table('cities')->orderBy('city','ASC')->get();
            $page->page_content = View::make('frontend.stores', array("stores"=>$stores,"cities"=>$cities,"id"=>$id,"upcoming_stores"=>$upcoming_stores));
          }

          if($page->page_slug == 'brands'){
            $brands = DB::table('brands')->orderBy('priority','ASC')->orderBy('id','ASC')->get();
            $page->page_content = View::make('frontend.brands', array("brands"=>$brands));
          }

          if($page->page_slug == 'kids-corner'){
            $kids = DB::table('kids')->get();
            $page->page_content = View::make('frontend.kids', array("kids"=>$kids));
          }
          if($page->page_slug == 'recipes'){
            $recipe = DB::table('recipe')->get();
            $user_recipe = DB::table('addfront_recipes')->get();
            $page->page_content = View::make('frontend.recipe', array("recipes"=>$recipe,"user_recipes"=>$user_recipe));
          }
           if($page->page_slug == 'product-range'){
            $products = DB::table('product_categories')->get();
            $page->page_content = View::make('frontend.pages.about_product', array("products"=>$products));
          }
            if($page->page_slug == 'add-recipe'){
            $recipes = Recipe::select('recipe.*')->limit(3)->get();
            $product = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.product_name','products.product_image','products.product_price')->limit(2)->get();
            $page->page_content = View::make('frontend.addrecipe',array('recipes' => $recipes,'product' => $product));
          }
            if($page->page_slug == 'submit-your-reviews'){
              $stores = DB::table('stores')->lists('name','id');
            $page->page_content = View::make('frontend.customer_review',array('stores' => $stores));
          }

        }

        if($page->page_slug == 'customer-review'){
           $review = DB::table('customer_review')->select('customer_review.*','stores.name')->join('stores','customer_review.store_id','=','stores.id')->orderBy('customer_review.id','desc')->get();
           $comment = DB::table('comments')->lists('review_id','id');
                                  
          $page->page_content = View::make('frontend.pages.customer_review',array('review' => $review));
        }
        $this->layout->main = View::make('frontend.page',["page"=>$page,"left_sidebar"=>$left_sidebar,"right_sidebar"=>$right_sidebar,"middle_span"=>$middle_span,"stores"=>$stores]);
      } else {
        return 'No Page found';
      }  
  }

  public function getkids($id){
        $this->layout->title = 'Kids Corner | SPAR Nigeria';
        $kids = Kids::select('kids.*')->where('kids.id',$id)->first();
        $this->layout->main = View::make('frontend.kids_corner',array("kids" => $kids));
  }

  public function deal(){
        $this->layout->title = 'Deals | SPAR Nigeria';
        $this->layout->main = View::make('frontend.deal');
  }
  
  public function products($id){
        $this->layout->title = 'Products | SPAR Nigeria';
        $products = DB::table('products')->select('products.*','product_categories.product_category')->join('product_categories','products.category_id','=','product_categories.id')->where('products.category_id',$id)->get();         
        $this->layout->main = View::make('frontend.brand_detail', array("products"=>$products));
  }
   
  public function getRecipesdetail($id){
        $this->layout->title = 'All Recipes | Spar';
        $this->layout->top_active = 1;
        $recipes = Recipe::select('recipe.*')->where('recipe.id',$id)->first();
        $relat_recipe = DB::table('related_recipes')->join('recipe','related_recipes.related_recipe_id','=','recipe.id')->select('related_recipes.*','recipe.recipe_name','recipe.recipe_image')->where('recipe_id',$id)->get();
        $relat_product = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.*')->where('recipe_id',$id)->get();
        $this->layout->main = View::make('frontend.recipe_detail',array(
            "recipes" => $recipes,
            "relat_recipe" => $relat_recipe,
            "relat_product" => $relat_product
        ));          
  }  
  
  public function getAddRecipesdetail(){
        $this->layout->title = 'Add Your Recipe | SPAR Nigeria';
        $this->layout->main = View::make('frontend.addrecipe');
  }

  public function postaddRecipe(){
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
      } else {
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

  public function getDefinition(){
      $this->layout->title = 'Definitions  | Spar Nigeria';
      $this->layout->main = View::make('frontend.pages.definition');        
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
        $stores = DB::table('stores')->lists('name','id');
        $this->layout->main = View::make('frontend.pages.customer_service',array('stores' => $stores));
  }   

  public function aboutReward_card(){
        $this->layout->title = 'About Reward Card | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.reward_card');
  }

  public function aboutGift_card(){
        $this->layout->title = 'About Gift Card | SPAR Nigeria';
        $this->layout->main = View::make('frontend.pages.gift_card');
  }

     public function comments($id){
      $this->layout->title = 'Comments | SPAR Nigeria';  
      $review = DB::table('customer_review')->where('id',$id)->first();
      $comment = DB::table('comments')->where('review_id',$id)->get();
      $this->layout->main = View::make('frontend.comment',array('review' => $review,'comment' => $comment));
     }
  
      public function postaddReview(){
      $cre = [
      'username' => Input::get('username'),
      'phone' => Input::get('phone'),
      'email' => Input::get('email')     
      ];
      $rules = [
      'username' => 'required',
      'phone' => 'required',
      'email' => 'required'

      ];
      $validator = Validator::make($cre,$rules);
      if($validator->passes()){ 
          $id = DB::table("customer_review")->insertGetID(array('username'=>Input::get("username"),
              'email'=>Input::get("email"),'phone'=>Input::get("phone"),'date_visited'=>Input::get("date_visited"),'review'=>Input::get("review"),'store_id'=>Input::get("store_id")));               
          return Redirect::Back()->with('success', '<b>'.Input::get('username').'</b> has been successfully added');                    
      } else {
          return Redirect::Back()->withErrors($validator)->withInput();
      }
  }

  public function postaddComment($review_id){
      $cre = [
      'name' => Input::get('name'),
      'comment' => Input::get('comment')
      ];
      $rules = [
      'name' => 'required',
      'comment' => 'required'

      ];
      $validator = Validator::make($cre,$rules);
      if($validator->passes()){ 
          $id = DB::table("comments")->insertGetID(array('review_id'=>$review_id,'name'=>Input::get("name"),'comment'=>Input::get("comment")));               
          return Redirect::Back()->with('success', '<b>'.Input::get('name').'</b> has been successfully added');                    
      } else {
          return Redirect::Back()->withErrors($validator)->withInput();
      }
  }

}