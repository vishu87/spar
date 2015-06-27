
<div class="row">
	@foreach($products as $product)
	<a href="{{url('/products/'.$product->id)}}">
		<div class="col-md-4 deal-box-contain margin-bottom-20">
			<div class="deal-box" style="position:relative">		
			    {{ HTML::image('images/'.$product->image,'',array("class"=>"recipe-img-width")) }}
				<div class="brand-name" align="center">
					{{$product->product_category}}
				</div>	
	        </div>
		</div>
	</a>
    @endforeach
</div>