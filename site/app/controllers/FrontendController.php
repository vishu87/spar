<?php

class FrontendController extends BaseController {
   protected $layout = 'frontend.layout';

   public function index(){
        $this->layout->title = 'Home Page | SPAR Nigeria';
        $this->layout->main = View::make('frontend.home');
   }


    public function getRecipesdetail($id){
        $this->layout->title = 'All Recipes | Spar';

        $recipes = Recipe::select('recipe.*')->where('recipe.id',$id)->first();
        $this->layout->main = View::make('frontend.recipe',array(
            "recipes" => $recipes
        ));          
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


}