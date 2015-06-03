<div class="row">
	@foreach($brands as $brand)
	<div class="col-md-4 deal-box-contain">
		<div class="deal-box" style="position:relative">
			{{ HTML::image('images/'.$brand->brand_image,'',array("class"=>"")) }}
			<div class="brand-name">
				{{$brand->brand_name}}
			</div>								   
		</div>
	</div>
	@endforeach
</div>
