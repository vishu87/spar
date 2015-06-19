
<div class="row">
	<h3 class="summer-recipe">Kiddies Corner</h3>
</div>
<div class="row">
 <button type="button" class="btn green">Puzzles &amp; Games</button>
</div>
<div class="row margin">
	<div class="col-md-8">
		@foreach($kids as $kid)
		<a href="{{url('/kids-corner/'.$kid->id)}}">
		<div class="row img-padding other-pro margin-bottom-20" style="background-image:url('images/{{$kid->kids_image}}');  background-size: 100% 200px; background-repeat:no-repeat;">
		    <div class="col-md-12">
	            <h1 align="center">{{$kid->title}}</h1>            
			  </div>		    								
		    </div>
		</a>
	    @endforeach	
	</div>
	<div class="col-md-4">
       
	</div>
</div>

