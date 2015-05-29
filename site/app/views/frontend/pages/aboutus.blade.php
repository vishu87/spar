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
			      About SPAR
			    </li> 
			  </ul>
			</div>
		</div>

		<div class="row recipe-time">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9 recipe-info">
					<h3 class="Ingredients">{{$pages->page_title}}</h3>
				</div>
			</div>
			<div class="col-md-3">
				<div class="side-nav active-nav">Artee Industries – SPAR Nigeria</div>
                <div class="side-nav other-nav"><a href="{{url('/pages/product-range')}}">Product Range</a></div>
                <div class="side-nav other-nav"><a href="{{url('/pages/trivia')}}">Did you know? (Trivia)</a></div>
                <div class="side-nav other-nav"><a href="{{url('/pages/customer-reviews')}}">Customer Review</a></div>                 
                <div class="side-nav other-nav"><a href="{{url('/')}}">Contact Us</a> </div>
			</div>
			<div class="col-md-9 recipe-info">
				<div class="row">
					<div class="col-md-8">
						<p>Artee Group is one of Nigeria's leading business houses with multiple businesses spanning across the consumption space. While retail forms the core business activity of Artee Group, group subsidiaries are present in manufacturing, real estate, exports among many others.</p>
					    <p>The group's specialty retail formats include department store chain Park 'n' Shop, Supermarket Chain SPAR, Home & Office Decor' Millennium, table water brand Cascade, premium lighting Searchlight, Quick Serve Restaurant Cakes 'n' Bakes, amongst many others.</p>
					    <p>At Artee Group, our statement of purpose is 'Adding value beyond limits'. This is as true today as it was in 1988, when we started out as a wholesaler Nigeria</p>
					    <p>Retail forms the core business activity at Artee Group and most of its businesses in the consumption space are built around retail. Artee Group's retail network touches the lives of mo millions of Nigerians. The group currently operates around several stores spread over large retail space. Present in the value and lifestyle segments, the group's retail formats cater to almost the entire consumption expenditure of a wide cross-section of Nigerian consumers. Led by Park 'n' Shop Retail, the group's flagship retail brand, the group owns Nigeria's most popular department store chain. The cornerstone of our philosophy is listening, adapting, and delivering exceptional value to our customers, investors and shareholders. What sets us apart at Artee Group is a strong and dynamic culture of entrepreneurship.</p>
					</div>					
                    <div class="col-md-4 img-padding add-button">
					    {{ HTML::image('frontend/images/banner8.jpg') }}
					 </div>
					<p>{{$pages->page_content}}	
				    </p>					
				</div>						
			</div>
	    </div>	
	</div>
</div>	
