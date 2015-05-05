
		<div class="container margin">
			<div id="content">
				<div class="row">
					<div class="page-bar">
					  <ul class="page-breadcrumb">
					    <li>
					      <i class="fa fa-home"></i>
					      <a href="{{url('/admin')}}">Home</a>
					      <i class="fa fa-angle-right"></i>
					    </li>
					    <li>
					      <a href="{{url('/admin')}}">About SPAR</a>
					      <i class="fa fa-angle-right"></i>
					    </li> 
					    <li>
					      Recipes
					    </li>   
					  </ul>
					</div>
				</div>
				<div class="row">
					<h3 class="summer-recipe">Submit Your Recipes</h3>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="row recipe-time">
							<div class="col-md-4">
								{{ HTML::image('frontend/images/banner8.jpg') }}
							</div>
							<div class="col-md-8 recipe-info">
                                <p class="Ingredients">
                                	Do you have a special or secret recipe? Want to share that special recipes or cooking tips with us? Use the form below to  share
                                </p> 
                                   <div class="portlet-body form recipe-info top-margin">
					              {{Form::open(array("url"=>"/recipes/store","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
					                <div class="form-body">
					                  <div class="form-group">
					                    <label class="col-md-3">Name</label>
					                    <div class="col-md-8">
					                      {{Form::text('recipe_name','',array("class"=>"form-control", "placeholder"=>"Enter Recipe Name"))}}
					                        <span>{{$errors->first('recipe_name')}}</span>
					                    </div>
					                  </div>     
					                  <div class="form-group">
					                    <label class="col-md-3">Ingredients</label>
					                    <div class="col-md-8">
					                     {{Form::textarea('ingred','',array("class"=>"form-control", "placeholder"=>"Ingredient"))}} 
					                     <span>{{$errors->first('ingred')}}</span>
					                    </div>
					                  </div>
					                  <div class="form-group">
					                    <label class="col-md-3">Cook Time</label>
					                    <div class="col-md-8">
					                      {{Form::text('cook_time','',array("class"=>"form-control", "placeholder"=>"Enter Cook Time"))}}
					                    </div>
					                  </div>  
					                  <div class="form-group">
					                    <label class="col-md-3">Method</label>
					                    <div class="col-md-8">
					                     {{Form::textarea('method','',array("class"=>"form-control", "placeholder"=>"Method"))}} 
					                   </div>
					                  </div>
					                  <div class="form-group">
					                    <label class="col-md-3">Recipe Image</label>
					                    <div class="col-md-8">
					                     {{Form::file('recipe_image',array("class"=>"form-control"))}} 
					                   </div>
					                  </div>
					                </div>
					                  <div class="form">
					                    <button type="submit" class="btn btn-danger add-button">Submit Your Recipe</button>
					                  </div>   
					                {{Form::close()}}
					          </div>                           
							</div>
						</div>				
					</div>
					<div class="col-md-4">
						@include('frontend.sidebar')
					</div>
				</div>
		    </div>
		</div>

