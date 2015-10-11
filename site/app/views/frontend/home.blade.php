<div id="content">
	<div  class="slider-main">
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
				                 	<a href="@if($main_banner->link != '') {{$main_banner->link}} @else javascript:; @endif" target="_blank">
				                    	<img class="img-responsive" src="{{url('images/'.$main_banner->banner_image)}}" alt="{{$main_banner->banner_name}}">
				                    </a>
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
						<a href="@if($side_banner->link != '') {{$side_banner->link}} @else javascript:; @endif" target="_blank">
							<img src="{{url('images/'.$side_banner->side_banner_image)}}" alt="{{$side_banner->side_banner_name}}" style="width:100%">
						</a>
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
	<div class="">
		
		<div class="hr1 margin-top"></div>

		<div class="row">
			<div class="col-md-4" style="">
				@if($params[4] != '')
					<div class="col-md-12 hidden-xs">
						<div >
							<a @if($params[5] != '') href="{{$params[5]}}" @else href="javascript:;" @endif target="_blank"><img src="{{url('images/'.$params[4])}}"></a>
						</div>
					</div>
				@endif
			</div>

			<div class="col-md-4">
				<div class="arrival-main">
					<div class="arrival-carousel touch-carousel">
						@foreach($mid_banners as $mid_banner)
						<div class="portfolio-item item">
							<div class="portfolio-border">
								<a href="@if($mid_banner->link != '') {{$mid_banner->link}} @else javascript:; @endif" target="_blank">
									<img src="{{url('images/'.$mid_banner->mid_banner_image)}}" alt="{{$mid_banner->mid_banner_name}}">
								</a>
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
			@if($params[1] != '')
				<div class="col-md-12 hidden-xs">
					<div >
						<a href="{{url('/images/'.$params[3])}}" target="_blank"><img src="{{url('images/'.$params[1])}}"></a>
					</div>
				</div>
			@endif
			@if($params[2] != '')
				<div class="col-md-12 visible-xs">
					<div >
						<a href="{{url('/images/'.$params[3])}}" target="_blank"><img src="{{url('images/'.$params[2])}}"></a>
					</div>
				</div>
			@endif	
		</div>
		
		<div class="hr1 margin-top"></div>

		<div class="row">

			<h4 class="classic-title"><span><b>SPAR</b> Services</span><hr></h4>

            
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon" style="float:none">
                    <img src="frontend/images/Delivery1.png">
                </div>
                <div class="service-content">
                    <h4>Home Delivery</h4>
                    <p>A convenient and affordable way to get your purchases made at the store delivered to your home. It’s more than just a delivery, you can expect a professional and courteous service from our esteemed SPAR staffs. Ask store staffs for further assistance.</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon">
                 <img src="frontend/images/Furniture1.png">
                    
                </div>
                <div class="service-content">
                <h4>Made to Order Furniture</h4>
                <p>Need customized home &amp; office furniture to suit your need and taste. With our made to order furniture service, you can be the proud owner of something original and unique. Ask floor staff for assistance with made to order furniture.</p>
                </div>
            </div>
            
           
            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
                <div class="service-icon">
                    <img src="frontend/images/Cake1.png">
                </div>
                <div class="service-content">
                    <h4>Made to Order Cake</h4>
                    <p>At SPAR we make cakes for every occasion ~ Weddings, Birthdays, Christenings. We will be glad to make Cakes to your preference and taste. Ask staff at bakery counter for assistance.</p>
                </div>
            </div>
            

              
              <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
               <div class="service-icon">
                 <img src="frontend/images/Catering1.png">
               </div>
               <div class="service-content">
                <h4>Private Catering</h4>
                <p>Whether you’re looking for a small, intimate dinner party or a large catered reception, SPAR private catering service is happy to assist you in creating the perfect event. Our professional staffs would be delighted to work with you on everything from the menu to the table layout. Ask staffs at ready meals counter for assistance.</p>
              </div>
            </div>
          

        </div>


		<div class="hr1 margin-top"></div>

		
	</div>
</div>
