				
<div class="row">
	<div class="col-md-8">
		<div class="row recipe-time">
			<div class="col-md-4">
				{{ HTML::image('frontend/images/addrecipe.jpg','',array("class"=>"recipe-img")) }}
			</div>
			<div class="col-md-8 recipe-info">
                <p class="Ingredients">
                	Do you have a special or secret recipe? Want to share that special recipes or cooking tips with us? Use the form below to  share
                </p> 
                   <div class="portlet-body form recipe-info top-margin">
	              {{Form::open(array("url"=>"/add-recipe","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
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
	                     {{Form::textarea('ingred','',array("class"=>"form-control editor1", "placeholder"=>"Ingredient"))}} 
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
	                     {{Form::textarea('method','',array("class"=>"form-control editor1", "placeholder"=>"Method"))}} 
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
		<div class="row side-bar">
			<div class="other-recipe btn green related-recipe">Read Other Recipes</div>
		</div>
         @foreach($recipes as $recipe)
         <a href="{{url('/recipes/'.$recipe->id)}}">
			<div class="row side-bar top-margin">
				<div class="col-md-6" style="padding:0px">
					{{ HTML::image('images/'.$recipe->recipe_image,'',array("class"=>"other-img")) }}
				</div>
				<div class="col-md-6 other-name">
					{{$recipe->recipe_name}}
				</div>							
			</div>
		</a>
		@endforeach  
		<div class="row side-bar recipe-time">
			<div class="other-recipe btn green related-recipe">Related Products</div>
		</div>
		<div class="row side-bar">
		<div class="col-md-12 border-1 padding-5">	
         @foreach($product as $product)                         
			<div class="row top-margin">								
				<div class="col-md-4">
					{{ HTML::image('images/'.$product->product_image,'',array("class"=>"other-pro")) }}
				</div>
				<div class="col-md-8 other-name-pro">
					{{$product->product_name}}
					<br>₦{{$product->product_price}}
				</div> 
		    </div>						
	    @endforeach
			    <div class="btn-align top-margin">
				    <a href="{{url('/add-recipe')}}" class="btn btn-sm red submit-btn width-100">
					 Submit Your Recipe
					</a>
				</div>
				<hr>
				<div>
					<a href="{{url('/gift-card')}}">
						{{ HTML::image('frontend/images/gift-card.jpg','',array("class"=>"other-pro")) }}
					</a>
				</div>
				<div class="promo">
					<p>Randomized advert on Promos, Gift Cards, Loyalty Cards etc.</p>
				</div>
			</div>
		</div>
	</div>
</div>
