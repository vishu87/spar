	
<div class="row">
	<div class="col-md-8">
	    <div class="portlet-body form">
	      {{Form::open(array("url"=>"/submit-your-reviews/add-review","method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
	            <div class="form-body">
	              <div class="form-group margin-0">
	                <label>Full Name</label>
	                <div>
	                  {{Form::text('username','',array("class"=>"form-control", "placeholder"=>"Enter Name"))}}
	                    <span>{{$errors->first('username')}}</span>
	                </div>
	                </div>  
	                <div class="row">
	                	<div class="col-md-6">  
	                		<div class="form-group margin-0">
		                      <label>Phone</label>
		                     {{Form::text('phone','',array("class"=>"form-control","style"=>"width:85%;","placeholder"=>"phone"))}} 
		                     <span>{{$errors->first('phone')}}</span>
	                    </div>
	                </div>
	                <div class="col-md-6"> 
	                	<div class="form-group margin-0">
		                    <label>Email Address</label>
		                      {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"ex: www.111@.com"))}}
		                       <span>{{$errors->first('email')}}</span>
		                  </div> 
	                    </div>  
	                </div>  
	                 <div class="row">
	                	<div class="col-md-6">  
	                		<div class="form-group margin-0">
		                      <label>Store Visited</label>
		                     {{Form::select('store_id',$stores,'',array("class"=>"form-control","style"=>"width:85%;","placeholder"=>"store visited"))}} 
		                     <span>{{$errors->first('store_visited')}}</span>
	                    </div>
	                </div>
	                <div class="col-md-6"> 
	                	<div class="form-group margin-0">
		                    <label>Date Visited</label>
		                      {{Form::text('date_visited','',array("class"=>"form-control datepicker", "placeholder"=>"date visited"))}}
		                  </div> 
	                    </div>  
	                </div>             
	              
	              <div class="form-group margin-0">
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
	<div class="col-md-4 recipe-info">
		{{ HTML::image('frontend/images/banner8.jpg') }}
	</div>
</div>
