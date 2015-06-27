<div class="container margin">
	<div id="content">
		<div class="row">
			<div class="col-md-6">
				<h1 class="page-title-top">Kids Corner</h1>
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
			      Kids Corner
			    </li>   
			  </ul>
			</div>
			</div>			
		</div>

		<div class="row" align="center">
			<h3 class="summer-recipe">{{$kids->title}}</h3>
		</div>
		<div class="row recipe-time">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						{{ HTML::image('images/'.$kids->kids_image,'',array("class"=>"recipe-img recipe-img-width")) }}
					</div>
					<div class="col-md-8 page-sidebar-right">
						 <p>
                        	{{$kids->content}}
                        </p>                                
					</div>
				</div>
			</div>
			<div class="col-md-4">
                <div class="row side-bar">
					<div class="other-recipe btn green related-recipe">Puzzles & Games</div>
				</div>
				<div class="row side-bar">
				    <div class="col-md-12 border-1 padding-5">
						<a href="{{url('/gift-card')}}">
							{{ HTML::image('frontend/images/gift-card.jpg','',array("class"=>"other-pro")) }}
						</a>
						<div class="promo">
							<p>Randomized advert on Promos, Gift Cards, Loyalty Cards etc.</p>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>

