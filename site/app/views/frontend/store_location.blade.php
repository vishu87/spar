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
			    </li> 
			  </ul>
			</div>
		</div>
        <div class="row">
			<div class="col-md-9 recipe-info">
				<h3 class="Ingredients">Find your nearest SPAR</h3>
			</div>
		</div>
		<div class="row recipe-time">
			<div class="col-md-6">
				{{ HTML::image('frontend/images/locator.jpg','',array("class"=>"img-radius")) }}
			</div>
			<div class="col-md-6 recipe-info">
				<div id="googleMap" style="width:500px;height:380px;"></div>
			</div>
		</div>				
	</div>
</div>
