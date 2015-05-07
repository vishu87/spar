<div class="prim">
	<div class="row">
		@foreach($images as $image)
			<div class="image-link" data-image="{{url("/")}}/images/tn_{{$image->image}}" data-id="{{$image->id}}">
				<img src="{{url("/")}}/images/tn_{{$image->image}}" style="width:100%; height:auto">
			</div>
		@endforeach
	</div>
</div>
