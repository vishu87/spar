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
			      <i class="fa fa-angle-right"></i>
			    </li> 
			    <li>Customer Reviews</li>
			  </ul>
			</div>
		</div>

		<div class="row recipe-time">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9 recipe-info">
					<h3 class="Ingredients">Customer Reviews</h3>
				</div>
			</div>
			<div class="col-md-3 top-margin">
				<div class="side-nav other-nav"><a href="{{url('/pages/aboutus')}}">Artee Industries – SPAR Nigeria</a></div>
                <div class="side-nav other-nav"><a href="{{url('/pages/product-range')}}">Product Range</a></div>
                <div class="side-nav other-nav"><a href="{{url('/pages/trivia')}}">Did you know? (Trivia)</a></div>
                <div class="side-nav active-nav">Customer Review</div>                 
                <div class="side-nav other-nav"><a href="{{url('/pages/')}}">Contact Us</a> </div>
			</div>
			<div class="col-md-9 recipe-info top-margin">
				<div class="row">
                   <div class="col-md-7">
						<div class="customer">
                          <h4>Customer Service Review</h4>
						</div>
						<div class="row img-padding">
							<p>Please fill in the form and submit. Do allow for Admin moderation before your post gets visible</p>
							    <div class="portlet-body form recipe-info top-margin">
					             
					              {{Form::open(array("url"=>"/submit-your-reviews/add-review","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
					                <div class="form-body">
					                  <div class="form-group">
					                    <label>Full Name</label>
					                    <div>
					                      {{Form::text('username','',array("class"=>"form-control", "placeholder"=>"Enter Name"))}}
					                        <span>{{$errors->first('username')}}</span>
					                    </div>
					                    </div>  
					                    <div class="row">
					                    	<div class="col-md-6">  
					                    		<div class="form-group">
							                      <label>Phone</label>
							                     {{Form::text('phone','',array("class"=>"form-control","style"=>"width:85%;","placeholder"=>"phone"))}} 
							                     <span>{{$errors->first('phone')}}</span>
						                    </div>
						                </div>
					                    <div class="col-md-6"> 
					                    	<div class="form-group">
							                    <label>Email Address</label>
							                      {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"ex: www.111@.com"))}}
							                       <span>{{$errors->first('email')}}</span>
							                  </div> 
						                    </div>  
						                </div>  
						                 <div class="row">
					                    	<div class="col-md-6">  
					                    		<div class="form-group">
							                      <label>Store Visited</label>
							                     {{Form::select('store_id',$stores,'',array("class"=>"form-control","style"=>"width:85%;","placeholder"=>"store visited"))}} 
							                     <span>{{$errors->first('store_visited')}}</span>
						                    </div>
						                </div>
					                    <div class="col-md-6"> 
					                    	<div class="form-group">
							                    <label>Date Visited</label>
							                      {{Form::text('date_visited','',array("class"=>"form-control datepicker", "placeholder"=>"date visited"))}}
							                  </div> 
						                    </div>  
						                </div>             
					                  
					                  <div class="form-group">
					                    <label>Message</label>
					                    <div>
					                     {{Form::textarea('review','',array("class"=>"form-control", "placeholder"=>"message"))}} 
					                   </div>
					                  </div>
					                </div>
					                  <div class="form">
					                    <button type="submit" class="btn btn-danger add-button">Submit</button>
					                  </div>   
					                {{Form::close()}}
					         
					          </div> 
						</div>
					</div>
					<div class="col-md-5 recipe-info">
                        {{ HTML::image('frontend/images/banner8.jpg') }}
					</div>
			    </div>
			</div>
		</div>				
	</div>
</div>
