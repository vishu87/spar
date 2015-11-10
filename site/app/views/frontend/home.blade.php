<div id="content">
	<div  class="slider-main">
		<div>
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
				<div class="col-md-3 slider-right">
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
			<div class="col-md-4 brands" style="">
				<div style="margin-top:0">
					<a href="{{url('/under-construction')}}"><img src="{{url('/frontend/images/brands-nigeria.jpg')}}"></a>
				</div>
				<div>
					<a href="{{url('/under-construction')}}"><img src="{{url('/frontend/images/recipes-front.jpg')}}"></a>
				</div>
				<div>
					<a href="{{url('/under-construction')}}"><img src="{{url('/frontend/images/Kids-Corner.jpg')}}"></a>
				</div>
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
				<div class="videoWrapper arrival-main">
					{{$params[6]}}
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

            @foreach($services as $service)
	            <div class="col-md-3 col-sm-6 service-box service-icon-left-more">
	                <div class="service-icon" style="float:none">
	                	@if($service->service_image != '')
	                    	<img src="images/{{$service->service_image}}">
	                    @endif
	                </div>
	                <div class="service-content">
	                    <h4>{{$service->service_name}}</h4>
	                    <p>{{$service->service_description}}</p>
	                </div>
	            </div>
            @endforeach
          

        </div>


		<div class="hr1 margin-top"></div>

		
	</div>
</div>
