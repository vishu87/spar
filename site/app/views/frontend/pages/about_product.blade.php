
<div class="row">
	@foreach($products as $product)
	<a href="{{url('/products/'.$product->id)}}">
		<div class="col-md-4 deal-box-contain margin-bottom-20">
			<div style="position:relative">		
			    {{ HTML::image('images/'.$product->image,'',array("class"=>"recipe-img-width border-radius-60")) }}
				<div class="brand-name border-radius-50" align="center">
					{{$product->product_category}}
				</div>	
	        </div>
		</div>
	</a>
    @endforeach
</div>