
<div class="row">	
	@foreach($brands as $brand)
		<div class="col-md-4 deal-box-contain">
			<div class="deal-box" style="position:relative">
				{{ HTML::image('images/'.$brand->brand_image,'',array("class"=>"recipe-img-width")) }}
				<div class="brand-name" align="center">
					{{$brand->brand_name}}
				</div>								   
			</div>
		</div>
	@endforeach
</div>
