<?php

class UserRecipeController extends BaseController {
protected $layout = 'admin.layout';

     public function getRecipe($recipe_id){
        $this->layout->title = 'Spar | Recipe';
        $this->layout->top_active = 9;
        $recipe = DB::table('addfront_recipes')->where('addfront_recipes.id',$recipe_id)->first();        
        $this->layout->main = View::make("admin.user_recipes.view",array("recipe"=>$recipe));
    }

    public function getRecipes(){
        $this->layout->title = 'All Recipes | Spar';
        $this->layout->top_active = 9;
        $recipes = DB::table('addfront_recipes')->get();
        $this->layout->main = View::make("admin.user_recipes.index",array("recipes"=>$recipes));
    }
   
      public function postAllowrecipe(){
        $data = array();
        $data["success"] = true;

        $recipe = DB::table('addfront_recipes')->where('id', Input::get("recipe_id"))->first();
        if($recipe->allow == 0){
            $recipe->allow = 1;
            $data["allow"] = 'Disallow';
        } else {
            $recipe->allow = 0;
            $data["allow"] = "Allow";
        }
        $recipe->save();

        return json_encode($data);
    }
    
       public function getdelete($id){
           $count = 0;
        if($count == 0){
            DB::table("addfront_recipes")->where('addfront_recipes.id',$id)->delete();
            $data["success"] = true;    
        } else {
            $data["success"] = false;
        } 
        return json_encode($data);                 
    }

}