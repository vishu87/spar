 
<div class="row">
	@foreach($recipes as $recipe)
		<div class="col-md-4 deal-box-contain margin-bottom-20">
			<a href="{{url('/recipes/'.$recipe->id)}}">
	            <div class="deal-box" style="position:relative">		
				    {{ HTML::image('images/'.$recipe->recipe_image,'',array("class"=>"recipe-img-width")) }}
					<div class="brand-name" align="center">
						{{$recipe->recipe_name}}
					</div>	
		        </div>
		    </a>	
		</div>
	@endforeach
</div>
