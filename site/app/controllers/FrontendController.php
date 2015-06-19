<?php

class FrontendController extends BaseController {
  
  protected $layout = 'frontend.layout';

  public function index(){
    $this->layout->title = 'Home Page | SPAR Nigeria';
    $main_banners = DB::table('banner')->orderBy('priority','asc')->get();
    $side_banners = DB::table('side_banner')->orderBy('priority','asc')->get();
    $mid_banners = DB::table('mid_banner')->orderBy('priority','asc')->get();
    $homepage_deals = DB::table('homepage_deals')->select('deals.deal_name','deals.image')->join('deals','homepage_deals.deal_id','=','deals.id')->orderBy('priority','asc')->get();
    $this->layout->main = View::make('frontend.home',array(
      "main_banners" => $main_banners,
      "side_banners" => $side_banners,
      "mid_banners" => $mid_banners,
      "homepage_deals" => $homepage_deals
    ));
  }

  public function brand(){
        $this->layout->title = 'Brand | SPAR Nigeria';
        $this->layout->main = View::make('frontend.brand');
  }

  public function pages($page_slug){

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
        $this->layout->title = $page->page_title. ' | SPAR Nigeria';
        //dummy
        $stores = array();
        if($page->page_content == -1){
          if($page->page_slug == 'deals'){
            $deals = DB::table('deals')->select('deals.*','product_categories.product_category')->join('product_categories','deals.category_id','=','product_categories.id')->orderBy('product_categories.product_category','asc')->get();
            $page->page_content = View::make('frontend.deal', array(
              "deals" => $deals
              ));
          }

          if($page->page_slug == 'store-locator'){
            $stores = DB::table('stores')->select('stores.*','cities.city')->join('cities','stores.city_id','=','cities.id')->orderBy('cities.city','asc')->get();
            $page->page_content = View::make('frontend.stores', array("stores"=>$stores));
          }

          if($page->page_slug == 'brands'){
            $brands = DB::table('brands')->get();
            $page->page_content = View::make('frontend.brands', array("brands"=>$brands));
          }

          if($page->page_slug == 'kids-corner'){
            $kids = DB::table('kids')->get();
            $page->page_content = View::make('frontend.kids', array("kids"=>$kids));
          }
          if($page->page_slug == 'recipes'){
            $recipe = DB::table('recipe')->get();
            $page->page_content = View::make('frontend.recipe', array("recipes"=>$recipe));
          }
           //if($page->page_slug == 'recipe-details'){
           // $recipe = DB::table('recipe')->get();
            //$page->page_content = View::make('frontend.recipe_detail', array("recipe"=>$recipe));
         // }
            if($page->page_slug == 'add-recipe'){
            $page->page_content = View::make('frontend.addrecipe');
          }

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
  
  public function brandgroceries(){
        $this->layout->title = 'Brand Groceries | SPAR Nigeria';
        $this->layout->main = View::make('frontend.brand_grocery');
  }
   
  public function getRecipesdetail($id){
        $this->layout->title = 'All Recipes | Spar';
        $recipes = Recipe::select('recipe.*')->where('recipe.id',$id)->first();
            $brands = DB::table('brands')->get();
        $this->layout->main = View::make('frontend.recipe_detail',array(
            "recipes" => $recipes
        ));          
  }  
  
  public function getAddRecipesdetail(){
        $this->layout->title = 'Add Recipe | SPAR Nigeria';
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