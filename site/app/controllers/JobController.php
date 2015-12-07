<?php

class JobController extends BaseController {
protected $layout = 'admin.layout';

  public function getRecipesdetail($id){
    $title = 'Spar | Recipes';
        $recipes = Recipe::select('recipe.*')->where('recipe.id',$id)->first();
          return  View::make('frontend.recipe',array(
            "recipes" => $recipes
        ));          
    }  

    
    public function postAdd(){
        $cre = [
        'recipe_name' => Input::get('recipe_name'),
        'preparation_time' => Input::get('preparation_time'),
        'category_id' => Input::get('category_id'),
        'description' => Input::get('description'),
        'ingredient' => Input::get('ingredient')     
        ];
        $rules = [
        'recipe_name' => 'required',
        'preparation_time' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'ingredient' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if (Input::hasFile('recipe_image')){
                $destinationPath = "images/";
                $extension = Input::file('recipe_image')->getClientOriginalExtension();
                $image = str_replace(' ','-',Input::file('recipe_image')->getClientOriginalName());
                $count = 1;
                $image_ori = $image;
                while(File::exists($destinationPath.$image)){
                    $image = $count.'-'.$image_ori;
                    $count++;
                }
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
        $this->layout->title = 'Spar | Recipe';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 1;
        $categories = DB::table('recipe_categories')->lists('recipe_category','id');
        $categories[""]= "Select";
        ksort($categories);

        $category_get = DB::table('recipe_categories')->select('recipe_category','id')->get();    
        
        $recipe = DB::table('recipe')->where('recipe.id',$recipe_id)->first();
        
        $recipes_ignore = array($recipe_id);
        $related_recipes = DB::table('related_recipes')->join('recipe','related_recipes.related_recipe_id','=','recipe.id')->select('related_recipes.*','recipe.recipe_name')->where('related_recipes.recipe_id',$recipe_id)->get();
        foreach ($related_recipes as $rel_recipe) {
            array_push($recipes_ignore, $rel_recipe->related_recipe_id);
        }
        
        $all_recipes = DB::table('recipe')->whereNotIn('id',$recipes_ignore)->lists('recipe_name','id');  
        
        $products_ignore = array();
        $related_products = DB::table('related_products')->join('products','related_products.related_product_id','=','products.id')->select('related_products.*','products.product_name')->get();
        foreach ($related_products as $rel_product) {
            array_push($products_ignore, $rel_product->related_product_id);
        }
        $all_products = DB::table('products')->whereNotIn('id',$products_ignore)->lists('product_name','id'); 

        
        $this->layout->main = View::make("admin.recipes.edit",array("recipe"=>$recipe,'categories' =>$categories,'category_get'=>$category_get,'all_recipes'=>$all_recipes,'related_recipes'=>$related_recipes,'all_products'=>$all_products,'related_products'=>$related_products));
    }

    public function getRecipes(){
        $this->layout->title = 'All Recipes | Spar';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 1;
        $recipes = DB::table('recipe')->join('recipe_categories','recipe.category_id','=','recipe_categories.id')->select('recipe.*','recipe_categories.recipe_category')->get();
        $this->layout->main = View::make("admin.recipes.index",array("recipes"=>$recipes));
    }

    

    public function getadd(){
        $this->layout->title = 'Add | Recipe';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 1;
        $categories = DB::table('recipe_categories')->lists('recipe_category','id');
        $categories[""]= "Select";
        ksort($categories);
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
        'preparation_time' => Input::get('preparation_time'),
        'category_id' => Input::get('category_id'),
        'description' => Input::get('description'),
        'ingredient' => Input::get('ingredient')     
        ];
        $rules = [
        'recipe_name' => 'required',
        'preparation_time' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'ingredient' => 'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $recipe = Recipe::find($recipe_id);
            if($recipe->exists){
                if (Input::hasFile('recipe_image')){
                    $destinationPath = "images/";
                    $extension = Input::file('recipe_image')->getClientOriginalExtension();
                    $image = str_replace(' ','-',Input::file('recipe_image')->getClientOriginalName());
                        $count = 1;
                        $image_ori = $image;
                        while(File::exists($destinationPath.$image)){
                            $image = $count.'-'.$image_ori;
                            $count++;
                        }
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

    public function postAddrelatedpro($recipe_id){
        $id = DB::table("related_products")->insertGetID(array('recipe_id'=>$recipe_id,'related_product_id'=>Input::get("related_product_id")));               
        return Redirect::Back()->with('success', 'Related product has been successfully added');            
    }

     public function updateCategory($id){       
        $cre = [
        'recipe_category' => Input::get('recipe_category')
        ];
        $rules = [
        'recipe_category' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            DB::table('recipe_categories')->where('id',$id)->update(array('recipe_category'=>Input::get("recipe_category")));
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
                    DB::table('recipe_categories')->where('id',$id)->update(array('image'=>$image));
                }
                return Redirect::Back()->with('success', '<b>'.Input::get('recipe_category').'</b> has been successfully updated');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function editCategory($id){
        $this->layout->title = 'Recipe Categories | Spar';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 2;
          
        $category = DB::table('recipe_categories')->where('id',$id)->first();
        $this->layout->main = View::make("admin.recipes.editCategory",array("category"=>$category));
    }

    public function getCategories(){
        $this->layout->title = 'Recipe Categories | Spar';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 2;
        $categories = DB::table('recipe_categories')->get();
        $this->layout->main = View::make("admin.recipes.categories",array("categories"=>$categories));
    }

    public function addCategory(){
        $this->layout->title = 'Add | Product';
        $this->layout->top_active = 2;
        $this->layout->sub_active = 2;
        $product_categories = DB::table('product_categories')->lists('product_category','id');
        $this->layout->main = View::make("admin.recipes.addcategory",array('product_categories' =>$product_categories));
    }

    public function deleteCategory($id){
        $count1 = DB::table('recipe')->where('category_id',$id)->count();
        if($count1 == 0) DB::table("recipe_categories")->where('id',$id)->delete();
        else return Redirect::Back()->with('failure', 'This category has been assigned to one or more recipes.');   
        return Redirect::Back()->with('success', 'Recipe Category has been successfully deleted');                    
    }

     public function postCategory(){
        $cre = [
        'recipe_category' => Input::get('recipe_category'),
        ];
        $rules = [
        'recipe_category' => 'required',
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
            
            $id = DB::table("recipe_categories")->insertGetID(array('recipe_category'=>Input::get("recipe_category"),'image'=>$image));               
            return Redirect::Back()->with('success', '<b>'.Input::get('recipe_category').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}