<div class="container margin">
	<div id="content">
		<div class="row">
			<div class="col-md-6">
				<h1 class="page-title-top">Comments</h1>
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
			      Comments
			    </li>   
			  </ul>
			</div>
			</div>			
		</div>

		<div class="row">
			<h3 class="summer-recipe text-form">{{$review->username}}</h3>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="border-1 padding-10 margin-bottom-20 box-shadow-comm">
	                <p>
					 	{{$review->review}} 
	                </p>
	                <div align="right" class="cust-date">{{ date("d F Y",strtotime($review->created_at)) }} at {{ date("g:ha",strtotime($review->created_at)) }}</div> 
				</div>
				<div class="margin-bottom-20">
					@if(!empty($review))
					@foreach($comment as $com)
					<div class="row">
						<h3 class="summer-recipe">{{$com->name}}</h3>
					</div>
					<div class="border-1 padding-10 margin-bottom-10">
	                    <p>{{$com->comment}}</p>
	                    <div align="right" class="cust-date">{{ date("d F Y",strtotime($com->created_at)) }} at {{ date("g:ha",strtotime($com->created_at)) }}</div> 
					</div>
					@endforeach
					@endif
				</div>
				<div class="row"><h2>Your Comment</h2></div>
				 {{Form::open(array("url"=>"/comments/add-comment/".$review->id,"method" => "POST","role"=>"form","class" => "form-horizontal","files"=>"true"))}}
	            <div class="form-body">
	                <div class="form-group margin-0">
		                <label>Full Name</label>
		                <div>
		                  {{Form::text('name','',array("class"=>"form-control", "placeholder"=>"Enter Name"))}}
		                    <span>{{$errors->first('name')}}</span>
		                </div>
	                </div>
	                <div class="form-group margin-0">
		                <label>Your Comment</label>	                
		                <div>
		                 {{Form::textarea('comment','',array("class"=>"form-control", "placeholder"=>"message"))}} 
		                 <span>{{$errors->first('comment')}}</span>
		               </div>
	              </div>
	            </div>
	              <div class="form">
	                <button type="submit" class="btn btn-danger add-button">Submit</button>
	              </div>   
	            {{Form::close()}} 
				                               
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

