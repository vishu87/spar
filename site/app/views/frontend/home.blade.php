<div id="content">
	<div  class="slider-main container">
		<div class="slider">
		<div class="row">
				<div class="col-md-9 slider">					
				     <section id="home">				            
				         <div id="main-slide" class="carousel slide" data-ride="carousel">				                
				             <ol class="carousel-indicators">
				             	@for($i=0; $i<sizeof($main_banners);$i++)
					                 <li data-target="#main-slide" data-slide-to="{{$i}}" @if($i == 0) class="active" @endif></li>
				                 @endfor
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
				              <img src="{{url('/frontend/images/pre.png')}}">
				             </a>
				             <a class="right carousel-control" href="#main-slide" data-slide="next">
				               <img src="{{url('/frontend/images/next.png')}}">
				             </a>
				         </div>
				     </section>	        		
				</div>	
				<div class="col-md-3 " style="text-align:center">
        			<?php $count = 0; ?>
				    @foreach($side_banners as $side_banner)
					<div style="overflow:hidden; text-align:center" align="center">
						<img src="{{url('images/'.$side_banner->side_banner_image)}}" alt="{{$side_banner->side_banner_name}}">
					</div>
					@endforeach
				</div>
				<!-- <div class="col-md-3 hidden-md hidden-lg">
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
				</div> -->
				
			</div>
			
		</div>
	</div>
	<div class="container">
		
		<div class="hr1 margin-top"></div>

		<div class="row">
			<div class="col-md-4" style="">
				<a href="{{url('/brands')}}">
					<div class="small-align-center" style="padding:30px 20px;  font-size:30px;text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home04.jpg')">
						SPAR NIGERIA BRANDS
					</div>
				</a>
					<div class="small-align-center" style="padding:30px 20px; margin-top:22px; font-size:30px;text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home06.jpg')">
						RECIPES
					</div>
				<a href="{{url('/kids-corner')}}">
					<div class="small-align-center" style="padding:30px 20px; margin-top:23px; font-size:30px;text-shadow:0 0 5px #FFF; color:#000; background:url('frontend/images/banner_home05.jpg')">
						KIDS CORNER
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<div class="arrival-main">
					<div class="arrival-carousel touch-carousel">
						@foreach($mid_banners as $mid_banner)
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<img src="{{url('images/'.$mid_banner->mid_banner_image)}}" alt="{{$mid_banner->mid_banner_name}}">
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="videoWrapper">
					<iframe src="https://www.youtube.com/embed/O-YiOvZuzAg" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
		
		<div class="hr1 margin-top"></div>
				
		
		<div class="our-offer">
			
			
			<h4 class="classic-title">
				<span><b>Latest</b> Offers</span>
				<hr>
			</h4>
			
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

			<h4 class="classic-title"><span><b>SPAR</b> Services</span><hr></h4>

            
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon" style="float:none">
                    <img src="frontend/images/Home-icon-spar.png">
                </div>
                <div class="service-content">
                    <h4>Home Delivery</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon">
                 <img src="frontend/images/furniture-spar.png">
                    
                </div>
                <div class="service-content">
                <h4>Made to Order Furniture</h4>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            
           
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <img src="frontend/images/cake-icon-spar.png">
                </div>
                <div class="service-content">
                    <h4>Made to Order Cake</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>
            </div>
            

              
              <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
               <div class="service-icon">
                 <img src="frontend/images/catering-icon-spar.png">
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
