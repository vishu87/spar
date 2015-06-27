
		<div class="container margin">
			<div id="content">
				<div class="row">
					<div class="page-bar">
					  <ul class="page-breadcrumb">
					    <li>
					      <i class="fa fa-home"></i>
					      <a href="{{url('/')}}">Home</a>
					      <i class="fa fa-angle-right"></i>
					    </li>
					    <li>
					      About SPAR
					      <i class="fa fa-angle-right"></i>
					    </li> 
					  </ul>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<div class="div_links" data-id="prob-1">Artee Industries – SPAR Nigeria</div>
		                <div class="div_links" data-id="prob-2">Product Range</div>
		                <div class="div_links" data-id="prob-3">Did you know? (Trivia)</div>
		                <div class="div_links" data-id="prob-4">Customer Review</div>                 
		                <div class="div_links" data-id="prob-5">Contact Us </div>
					</div>
					<div class="col-md-8">
						<div class="row recipe-time">
							<div class="col-md-4">
								{{ HTML::image('frontend/images/banner8.jpg') }}
							</div>
							<div class="col-md-8 recipe-info">
								<div id="prob-1" class="div_form"  @if(Session::has('tab')) style="display:none" @endif>
									<h3 class="Ingredients">History</h3>
                                                    
							</div>
						</div>				
					</div>
					<div class="col-md-4">
						<div class="row side-bar">
							<div class="other-recipe btn green">Read Other Recipes</div>
						</div>
						<div class="row side-bar top-margin">
							<div class="col-md-6">
								{{ HTML::image('frontend/images/banner_home01.jpg','',array("class"=>"other-img")) }}
							</div>
							<div class="col-md-6 other-name">
								Citrus Burst
							</div>							
						</div>
						<div class="row side-bar other-margin">
							<div class="col-md-6">
								{{ HTML::image('frontend/images/banner_home01.jpg','',array("class"=>"other-img")) }}
							</div>
							<div class="col-md-6 other-name">
								Citrus Burst
							</div>							
						</div>
							 
						<div class="row side-bar recipe-time">
							<div class="other-recipe btn green">Read Other Recipes</div>
						</div>
						<div class="row side-bar top-margin">

							<div class="col-md-4">
								{{ HTML::image('frontend/images/b.jpg','',array("class"=>"other-pro")) }}
							</div>
							<div class="col-md-8 other-name-pro">
								SPAR Anise<br>₦ 355

							</div>	

						</div>
						
					</div>
				</div>
		    </div>
		</div>
