

		<div class="container margin">
			<div id="content">
                <div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6">
		             <div class="page-bar pull-right" style="background:#fff;">
					  <ul class="page-breadcrumb">
					    <li>
					      <i class="fa fa-home"></i>
					      <a href="{{url('/')}}">Home</a>
					      <i class="fa fa-angle-right"></i>
					    </li>
					    <li>
					      <a href="{{url('/about-spar')}}">About SPAR</a>
					      <i class="fa fa-angle-right"></i>
					    </li> 
					    <li>
					      Recipes Details
					    </li>   
					  </ul>
					</div>
					</div>			
				</div>
				<div class="row">
					<h2 class="summer-recipe">Recipe for {{$recipes->recipe_name}}</h2>
				</div>

				<div class="row">
					<div class="col-md-9 page-sidebar-left">
						<div class="row recipe-time">
							<div class="col-md-4">
								{{ HTML::image('images/'.$recipes->recipe_image,'',array("class"=>"recipe-img recipe-img-width")) }}
							</div>
							<div class="col-md-8 page-sidebar-right">
								<span>Prep Time: <b>{{$recipes->preparation_time}}</b></span>
								<hr>
                                <span>Cook Time: <b>{{$recipes->cook_time}}</b></span>
                                <hr>
                                <strong>(Summary on the meal, its origin, taste and how its served)</strong>
                                <p>
                                	{{$recipes->description}}
                                </p>                                
							</div>
						</div>
						<hr>
						<div class="row">
							<h3 class="Ingredients">Ingredients</h3>
							<span>{{$recipes->ingredient}}</span>
						</div>
						<div class="row recipe-time">
							<h3 class="Ingredients">To Serve</h3> 
							<span>{{$recipes->to_serve}}</span>
						</div>
						<div class="row recipe-time">
							<h3 class="Ingredients">Method</h3>
							<p>
								{{$recipes->method}}
                            </p>

						</div>
					</div>
					<div class="col-md-3">						
						<div class="row">
							<div class="width-100 btn green related-recipe">Related Recipes</div>
						</div>
						@if(!empty($recipes))
                         @foreach($relat_recipe as $recipe)
                         <a href="{{url('/recipes/'.$recipe->related_recipe_id)}}">
							<div class="row top-margin">
								<div class="col-md-5">
									{{ HTML::image('images/'.$recipe->recipe_image,'',array("class"=>"other-img")) }}
								</div>
								<div class="col-md-7 other-name">
									{{$recipe->recipe_name}}
								</div>							
							</div>
						</a>
						@endforeach
					  @endif		  
						<div class="row recipe-time">
							<div class="width-100 btn green related-recipe">Related Products</div>
						</div>
						<div class="row">
						<div class="col-md-12 border-1 padding-5">	
                       @if(!empty($recipes))
                         @foreach($relat_product as $product)  
                         <a href="#">                     
							<div class="row top-margin">								
								<div class="col-md-4">
									{{ HTML::image('images/'.$product->product_image,'',array("class"=>"other-pro")) }}
								</div>
								<div class="col-md-8 other-name-pro">
									{{$product->product_name}}
									<br>₦{{$product->product_price}}
								</div> 
						    </div>	
						</a>  					
					    @endforeach
                        @endif
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
	</div>
</div>


