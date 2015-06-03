<div id="content">
	<div  class="slider-main">
		<div class="container slider">
		
			
			<div class="row">
				
				
				<div class="col-md-9 slider">
					
				        <section id="home">
				            
				            <div id="main-slide" class="carousel slide" data-ride="carousel">

				                
				                <ol class="carousel-indicators">
				                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>
				                    <li data-target="#main-slide" data-slide-to="1"></li>
				                </ol>
				                

				                
				                <div class="carousel-inner">
				                	<?php $count = 0; ?>
				                	@foreach($main_banners as $main_banner)
				                    <div class="item @if($count == 0) active @endif">
				                        <img class="img-responsive" src="{{url('images/'.$main_banner->banner_image)}}" alt="{{$main_banner->banner_name}}">
				                    </div>
				                    <?php $count++; ?>
				                    @endforeach
				                </div>
				            
				                <a class="left carousel-control" href="#main-slide" data-slide="prev">
				                    <span><i class="fa fa-angle-left"></i></span>
				                </a>
				                <a class="right carousel-control" href="#main-slide" data-slide="next">
				                    <span><i class="fa fa-angle-right"></i></span>
				                </a>
				            </div>
				            
				        </section>
	        		
				</div>
				
				
				
				<div class="col-md-3 hidden-xs hidden-sm" style="text-align:center">
        			<?php $count = 0; ?>
				    @foreach($side_banners as $side_banner)
					<div style="overflow:hidden; text-align:center" align="center">
						<img src="{{url('images/'.$side_banner->side_banner_image)}}" alt="{{$side_banner->side_banner_name}}">
					</div>
					@endforeach
				</div>
				

				<div class="col-md-3 hidden-md hidden-lg">
					<div style="padding:10px">
						<div class="projects-carousel touch-carousel">
							 @foreach($side_banners as $side_banner)
							<div class="portfolio-item item">
								<div class="portfolio-border">
									<img src="{{url('images/'.$side_banner->side_banner_image)}}" alt="{{$side_banner->side_banner_name}}">
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="container">
		
		<div class="hr1 margin-top"></div>

		<div class="row">
			<div class="col-md-4" style="">
				<a href="{{url('/brands')}}">
					<div style="padding:30px 20px;  font-size:30px; text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home04.jpg')">
						SPAR NIGERIA BRANDS
					</div>
				</a>
					<div style="padding:30px 20px; margin-top:22px; font-size:30px; text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home06.jpg')">
						RECIPES
					</div>
				<a href="{{url('/kids-corner')}}">
					<div style="padding:30px 20px; margin-top:23px; font-size:30px; text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home05.jpg')">
						KIDS CORNER
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<div class="arrival-main">
					<div class="arrival-carousel touch-carousel">
						
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<img src="frontend/images/banner8.jpg">
							</div>
						</div>
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<img src="frontend/images/banner9.jpg">
							</div>
						</div>
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<img src="frontend/images/banner8.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div style="border:5px solid #EEE; min-height:288px; padding:20px; background:#f7f7f7">
					<div class="mail-subscribe-widget">
                            <h4 style="font-size:24px;">Newsletter<span class="head-line"></span></h4>
                            <p style="margin-top:10px">Join our mailing list to stay up to date and get notices about our new releases!</p>
                            <form class="subscribe">
                                <input type="text" placeholder="mail@example.com">
                                <input type="submit" class="btn-system" value="Send">
                            </form>
                        </div>
				</div>
			</div>

		</div>
		
		<div class="hr1 margin-top"></div>
				
		
		<div class="our-offer">
			
			
			<h4 class="classic-title"><span>Latest Offers</span></h4>
			
			<div class="offer-carousel custom-carousel touch-carousel" data-appeared-items="5">
				
				@foreach($homepage_deals as $deal)
				<div class="offer-item item">
					<a href="#"><img src="{{url('images/'.$deal->image)}}" alt="{{$deal->deal_name}}" /></a>
				</div>
				@endforeach
			</div>
		</div>
		

		<div class="hr1 margin-top"></div>


		<div class="row">
			<div class="col-md-12">
				<div style="border:5px solid #EEE;  padding:20px 0; text-align:center; font-weight:400; font-size:30px; background:url(frontend/images/patterns/6.png);">
					Download e-Flyer
				</div>
			</div>
		</div>
		
		<div class="hr1 margin-top"></div>

		<div class="row">

			<h4 class="classic-title"><span>SPAR Nigeria Services</span></h4>

            
            <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                <div class="service-icon">
                    <img src="frontend/images/Home-icon.png">
                </div>
                <div class="service-content">
                    <h4>Home Delivery</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            

              
              <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
               <div class="service-icon">
                    <img src="frontend/images/money-icon.png">
               </div>
               <div class="service-content">
                <h4>Cash on Delivery</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
            

            
            <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                <div class="service-icon">
                 <img src="frontend/images/furniture.jpg">
                    
                </div>
                <div class="service-content">
                <h4>Made to Order Furniture</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            
           
            <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
                <div class="service-icon">
                    <img src="frontend/images/Piece-of-cake-icon.png">
                </div>
                <div class="service-content">
                    <h4>Made to Order Cake</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            

              
              <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
               <div class="service-icon">
                 <img src="frontend/images/catering-icon.png">
               </div>
               <div class="service-content">
                <h4>Private Catering</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          

        </div>


		<div class="hr1 margin-top"></div>

		
	</div>
</div>
