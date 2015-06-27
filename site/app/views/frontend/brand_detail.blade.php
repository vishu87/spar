

<div class="container margin">
	<div id="content">
		<div class="row">
			<div class="col-md-6">
				<h1 class="page-title-top">SPAR Products</h1>
			</div>
			<div class="col-md-6">
		        <div class="page-bar pull-right" style="background:#fff;">
				  <ul class="page-breadcrumb">
				    <li>
				      <i class="fa fa-home"></i>
				      <a href="{{url('/')}}">Home</a>
				      <i class="fa fa-angle-right"></i>
				    </li>
				    <li>
				      <a href="{{url('/about-spar')}}">About SPAR</a>
				      <i class="fa fa-angle-right"></i>
				    </li> 
				     <li>
				      <a href="{{url('/product-range')}}">Product Range</a>
				      <i class="fa fa-angle-right"></i>
				    </li> 
				    <li>
				      Spar Products
				    </li>   
				  </ul>
			    </div>
			</div>			
		</div>
		<div class="row">
			<h2 class="summer-recipe">{{$products[0]->product_category}}</h2>
		</div>
		<div class="row">
			<div class="col-md-8">	
				<div class="row">			
				    @if(!empty($products))									
						@foreach($products as $product)
							<div class="col-md-4 deal-box-contain">
								<div class="deal-box" style="position:relative">		
								    {{ HTML::image('images/'.$product->product_image,'',array("class"=>"recipe-img-width")) }}
								     <div class="brand-name" align="center">
										{{$product->product_name}}
									</div>
								</div>
							</div>
					    @endforeach
					@endif
				</div>
			</div>

			<div class="col-md-4">
				<div class="row side-bar">
					<div class="other-recipe btn green">Special Promotions</div>
				</div>
				<div class="row side-bar">
				 	<div class="col-md-12 border-1 padding-5">		
					   
					    <hr>				    
						<div>
							<a href="{{url('/gift-card')}}">
								{{ HTML::image('frontend/images/gift-card.jpg','',array("class"=>"other-pro")) }}
							</a>
						</div>
						<div class="promo">
							<p>Randomized advert on Promos, Gift Cards, Loyalty Cards etc.</p>
						</div>
					</div>				
				</div>				
			</div>
        </div>
    </div>
</div>

