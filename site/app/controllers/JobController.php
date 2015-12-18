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
        'job_name' => Input::get('job_name'),
        'category_id' => Input::get('category_id')
        ];
        $rules = [
         'job_name' =>'required',
        'category_id' =>'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $job = new Job;
            $job->job_title =Input::get('job_name');           
            $job->job_department =Input::get('job_department');           
            $job->job_id =Input::get('job_id');            
            $job->job_type =Input::get('category_id');            
            $job->specifications =Input::get('specification');            
            $job->qualification =Input::get('qualification');            
            $job->work_ex =Input::get('w_expr');                        
            $job->skills =Input::get('skills');                        
            $job->save();            
            return Redirect::Back()->with('success', 'new job has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getRecipe($id){
        $this->layout->title = 'Spar | Edit Job';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 1;
        $categories = DB::table('job_types')->lists('job_type','id');
        $categories[""]= "Select";
        $job=Job::where('id',$id)->first();
        
        $this->layout->main = View::make("admin.jobs.edit",array('categories' =>$categories,"job"=>$job));
    }

    public function getJobs(){
        $this->layout->title = 'All Jobs | Spar';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 1;
        $jobs = DB::table('jobs')->join('job_types','jobs.job_type','=','job_types.id')->select('jobs.*','job_types.job_type as job_cat')->get();
        $this->layout->main = View::make("admin.jobs.index",array("jobs"=>$jobs));
    }

    

    public function getadd(){
        $this->layout->title = 'Add | Jobs';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 1;
        $categories = DB::table('job_types')->lists('job_type','id');
        $categories[""]= "Select";
        ksort($categories);
        $this->layout->main = View::make("admin.jobs.add",array('categories' =>$categories));
    }

     public function getdelete($id){
        DB::table("jobs")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'job has been successfully deleted');                    
    }

     public function getdel($id){
        DB::table("related_recipes")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'recipe has been successfully deleted');                    
    }

    public function getdelpro($id){
        DB::table("related_products")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', 'product has been successfully deleted');                    
    }

    public function putupdate($id){       
        $cre = [
        'job_name' => Input::get('job_name'),
        'category_id' => Input::get('category_id')
        ];
        $rules = [
         'job_name' =>'required',
        'category_id' =>'required'

        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $job = Job::find($id);
            if($job->exists){
                $job->job_title =Input::get('job_name');  
            $job->job_department =Input::get('job_department');           

                $job->job_id =Input::get('job_id');            
                $job->job_type =Input::get('category_id');            
                $job->specifications =Input::get('specification');            
                $job->qualification =Input::get('qualification');            
                $job->work_ex =Input::get('w_expr');                        
                $job->skills =Input::get('skills');                        
                $job->save();            
                return Redirect::Back()->with('success', '<b>'.Input::get('job_name').'</b> has been successfully updated');                    
            }
            return Redirect::Back()->with('failure', '<b>Job not found');
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
        'category_name' => Input::get('category_name')
        ];
        $rules = [
        'category_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            
                    DB::table('job_types')->where('id',$id)->update(array('job_type'=>Input::get('category_name')));
                
                return Redirect::Back()->with('success', '<b>'.Input::get('category_name').'</b> has been successfully updated');
        } 
        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function editCategory($id){
        $this->layout->title = 'Job Categories | Spar';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 2;
          
        $category = DB::table('job_types')->where('id',$id)->first();
        $this->layout->main = View::make("admin.jobs.editCategory",array("category"=>$category));
    }

    public function getCategories(){
        $this->layout->title = 'Job Categories | Spar';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 2;
        $categories = DB::table('job_types')->get();
        $this->layout->main = View::make("admin.jobs.categories",array("categories"=>$categories));
    }

    public function addCategory(){
        $this->layout->title = 'Add | Category';
        $this->layout->top_active = 15;
        $this->layout->sub_active = 2;
        
        $this->layout->main = View::make("admin.jobs.addcategory",[]);
    }

    public function deleteCategory($id){
        $count1 = DB::table('jobs')->where('job_type',$id)->count();
        if($count1 == 0) DB::table("job_types")->where('id',$id)->delete();
        else return Redirect::Back()->with('failure', 'This category has been assigned to one or more jobs.');   
        return Redirect::Back()->with('success', 'Job Category has been successfully deleted');                    
    }

     public function postCategory(){
        $cre = [
        'category_name' => Input::get('category_name'),
        ];
        $rules = [
        'category_name' => 'required',
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            
            $id = DB::table("job_types")->insert(array('job_type'=>Input::get("category_name")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('category_name').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}