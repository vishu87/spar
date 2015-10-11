<div class="row">	
	@foreach($brands as $brand)
		<div class="col-md-3 deal-box-contain">
			<div style="position:relative">
				{{ HTML::image('images/'.$brand->brand_image,'',array("class"=>"recipe-img-widthx border-radius-60")) }}
				<div class="brand-name border-radius-50" align="center">
					{{$brand->brand_name}}
				</div>							   
			</div>
			<p>{{$brand->description}}</p>
		</div>
	@endforeach
</div>
