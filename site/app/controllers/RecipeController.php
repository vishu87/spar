<?php

class RecipeController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'recipe_name' => Input::get('recipe_name'),
        'preparation_time' => Input::get('preparation_time'),
        'description' => Input::get('description'),
        'ingredient' => Input::get('ingredient')     
        ];
        $rules = [
        'recipe_name' => 'required',
        'preparation_time' => 'required',
        'description' => 'required',
        'ingredient' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('recipe_image')){
                $destinationPath = "images/";
                $extension = Input::file('recipe_image')->getClientOriginalExtension();
                $image = Input::file('recipe_image')->getClientOriginalName();
                Input::file('recipe_image')->move($destinationPath,$image);
            } else $image ='';

            $id = DB::table("recipe")->insertGetID(array('recipe_name'=>Input::get("recipe_name"),'category_id'=>Input::get("category_id"),'preparation_time'=>Input::get("preparation_time"),'description'=>Input::get("description"),'recipe_image'=>$image,
                'ingredient'=>Input::get("ingredient"),'cook_time'=>Input::get("cook_time"),'to_serve'=>Input::get("to_serve"),'method'=>Input::get("method")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('recipe_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getRecipe($recipe_id){
        $this->layout->title = 'Admin | Recipe';
        $this->layout->top_active = 1;
        $categories = DB::table('recipe_categories')->lists('recipe_category','id');  
        $all_recipes = DB::table('recipe')->lists('recipe_name','id');  
        $all_products = DB::table('products')->lists('product_name','id');  
        $category_get = DB::table('recipe_categories')->select('recipe_category','id')->get();    
        $recipe = DB::table('recipe')->where('recipe.id',$recipe_id)->first();
        $related_recipes = DB::table('related_recipes')->join('recipe','related_recipes.related_recipe_id','=','recipe.id')->select('related_recipes.*','recipe.recipe_name')->where('recipe_id',$recipe_id)->get();
        $related_products = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.product_name')->get();
        $this->layout->main = View::make("admin.recipes.edit",array("recipe"=>$recipe,'categories' =>$categories,'category_get'=>$category_get,'all_recipes'=>$all_recipes,'related_recipes'=>$related_recipes,'all_products'=>$all_products,'related_products'=>$related_products));
    }

    public function getRecipes(){
        $this->layout->title = 'All Recipes | Admin';
        $this->layout->top_active = 1;
        $recipes = DB::table('recipe')->join('recipe_categories','recipe.category_id','=','recipe_categories.id')->select('recipe.*','recipe_categories.recipe_category')->get();
        $this->layout->main = View::make("admin.recipes.index",array("recipes"=>$recipes));
    }

    public function getadd(){
        $this->layout->title = 'Add | Recipe';
        $this->layout->top_active = 1;
        $categories = DB::table('recipe_categories')->lists('recipe_category','id');
        $this->layout->main = View::make("admin.recipes.add",array('categories' =>$categories));
    }

     public function getdelete($recipe_id){
        DB::table("recipe")->where('id',$recipe_id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('recipe_name').'</b> has been successfully deleted');                    
    }

     public function getdel($id){
        DB::table("related_recipes")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'recipe has been successfully deleted');                    
    }

    public function getdelpro($id){
        DB::table("related_products")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'product has been successfully deleted');                    
    }

    public function putupdate($recipe_id){       
        $cre = [
        'recipe_name' => Input::get('recipe_name'),
        'description' => Input::get('description')
        ];
        $rules = [
        'recipe_name' => 'required',
        'description' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $recipe = Recipe::find($recipe_id);
            if($recipe->exists){
                if (Input::hasFile('recipe_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('recipe_image')->getClientOriginalExtension();
                    $image = Input::file('recipe_image')->getClientOriginalName();
                    Input::file('recipe_image')->move($destinationPath,$image);
                    $recipe->recipe_image = $image;
                }
                $recipe->recipe_name = Input::get('recipe_name');
                $recipe->category_id = Input::get('category_id');
                $recipe->preparation_time = Input::get('preparation_time');
                $recipe->description = Input::get('description');
                $recipe->ingredient = Input::get('ingredient');    
                $recipe->cook_time = Input::get('cook_time');    
                $recipe->to_serve = Input::get('to_serve');    
                $recipe->method = Input::get('method');    
                $recipe->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('recipe_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Recipe not found');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function postAddrelated($recipe_id){
        $id = DB::table("related_recipes")->insertGetID(array('recipe_id'=>$recipe_id,'related_recipe_id'=>Input::get("related_recipe_id")));               
        return Redirect::Back()->with('success', 'Related recipe has been successfully added');            
    }

    public function postAddrelatedpro($product_id){
        $id = DB::table("related_products")->insertGetID(array('product_id'=>$product_id,'related_product_id'=>Input::get("related_product_id")));               
        return Redirect::Back()->with('success', 'Related product has been successfully added');            
    }
}