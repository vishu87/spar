 
<div class="row">
	@foreach($recipes as $recipe)
		<div class="col-md-4 deal-box-contain" style="">
			<a href="{{url('/recipes/'.$recipe->id)}}">
				<div class="masonryItem recipe processed" style="min-height:200px;">
				    <div class="topSection">
				        <div class="shareActions"><div class="shareOptions fixedToolbarText"></div>
				            <a class="photo loaded" href="{{url('/recipes/'.$recipe->id)}}" style="background-image: url('images/{{$recipe->recipe_image}}'); width:100%"></a>
				        </div>
				        <h3 style="background: #eee;" align="center"><a href="{{url('/recipes/'.$recipe->id)}}">{{$recipe->recipe_name}}</a></h3>
				        
				    </div>
				</div>
		    </a>	
		</div>
	@endforeach	
</div>