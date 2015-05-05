

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
					<h3 class="summer-recipe">Recipe for {{$recipes->recipe_name}}</h3>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="row recipe-time">
							<div class="col-md-4">
								{{ HTML::image('frontend/images/banner8.jpg') }}
							</div>
							<div class="col-md-8 recipe-info">
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
							<h4 class="Ingredients">Ingredients</h4>
							<span>{{$recipes->ingredient}}</span>
						</div>
						<div class="row recipe-time">
							<h4 class="Ingredients">To Serve</h4> 
							<span>{{$recipes->to_serve}}</span>
						</div>
						<div class="row recipe-time">
							<h4 class="Ingredients">Method</h4>
							<p>
								{{$recipes->method}}
                            </p>

						</div>
					</div>
					<div class="col-md-4">
						@include('frontend.sidebar')
						
					</div>
				</div>
		    </div>
		</div>


