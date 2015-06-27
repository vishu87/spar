
<div class="row margin">
	<div class="col-md-8">
		@foreach($kids as $kid)
		<a href="{{url('/kids-corner/'.$kid->id)}}">
		<div class="row img-padding other-pro margin-bottom-20 kid-corner" style="background-image:url('images/{{$kid->kids_image}}');">
		    <div class="col-md-12">
	            <h1 align="center">{{$kid->title}}</h1>            
			  </div>		    								
		    </div>
		</a>
	    @endforeach	
	</div>
	<div class="col-md-4">
   		<div class="row side-bar">
			<div class="other-recipe btn green related-recipe">Puzzles & Games</div>
		</div>
		<div class="row side-bar">
		    <div class="col-md-12 border-1 padding-5">
				<a href="{{url('/gift-card')}}">
					{{ HTML::image('frontend/images/gift-card.jpg','',array("class"=>"other-pro")) }}
				</a>
				<div class="promo">
					<p>Randomized advert on Promos, Gift Cards, Loyalty Cards etc.</p>
				</div>
			</div>
		</div>
	</div>
</div>

