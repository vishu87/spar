
		<div class="container margin">
			<div id="content">
				<div class="row">
					<div class="page-bar">
					  <ul class="page-breadcrumb">
					    <li>
					      <i class="fa fa-home"></i>
					      <a href="{{url('/admin')}}">Home</a>
					      <i class="fa fa-angle-right"></i>
					    </li>
					    <li>
					      <a href="{{url('/admin')}}">About SPAR</a>
					      <i class="fa fa-angle-right"></i>
					    </li> 
					    <li>
					      SPAR Brands
					    </li>   
					  </ul>
					</div>
				</div>
				<div class="row">
					<h3 class="summer-recipe">SPAR Brands</h3>
				</div>

				<div class="row margin">
					<div class="col-md-1"></div>
					<div class="col-md-7">
						<h4 class="summer-recipe">Categories</h4>
						<div class="row">
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
							<div class="col-md-6 img-padding">
								{{ HTML::image('frontend/images/banner8.jpg') }}
								     Brand Name
							</div>
						</div>
					</div>


					<div class="col-md-4">
				@include('frontend.sidebar')
					</div>
				</div>
		    </div>
		</div>

