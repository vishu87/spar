 
<div class="row">
	@foreach($recipes as $recipe)
	<div class="col-md-4 padding-10">		
		<a href="{{url('/recipes/'.$recipe->id)}}">
			{{ HTML::image('images/'.$recipe->recipe_image,'',array("class"=>"recipe-img recipe-img-width")) }}</a>
	</div>
	@endforeach
</div>
