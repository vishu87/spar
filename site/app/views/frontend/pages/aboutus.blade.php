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
