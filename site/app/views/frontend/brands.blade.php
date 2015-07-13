
<div class="row">	
	@foreach($brands as $brand)
		<div class="col-md-4 deal-box-contain">
			<div style="position:relative">
				{{ HTML::image('images/'.$brand->brand_image,'',array("class"=>"recipe-img-width border-radius-60")) }}
				<div class="brand-name border-radius-50" align="center">
					{{$brand->brand_name}}
				</div>								   
			</div>
		</div>
	@endforeach
</div>
