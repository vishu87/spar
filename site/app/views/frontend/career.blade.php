<div>
	<img src="{{url('/frontend/images/banner.jpg')}}">
</div>
<div class="career-heading">
	<h1>Front-end Store Operation Team</h1>
</div>
<div class="career-text">
	<p>So, what will you find when you join the Nigeria largest chain of Hypermarket stores?<br>The chance to impact the community you live and work in, to innovate for the next generation of customers, and to build a career doing what you love.</p>
</div>
<div class="row career-options">
	<div class="col-md-3">
		<div>
			<img src="{{url('/frontend/images/Check-Out-Points.jpg')}}"><br>Check-Out Points
		</div>
	</div>
	<div class="col-md-3">
		<div>
			<img src="{{url('/frontend/images/Shop-Floor.jpg')}}"><br>Shop Floor
		</div>
	</div>
	<div class="col-md-3">
		<div>
			<img src="{{url('/frontend/images/Fresh-Department-Front-end.jpg')}}"><br>Fresh Department Front-end
		</div>
	</div>
	<div class="col-md-3">
		<div>
			<img src="{{url('/frontend/images/Fresh-Department-Production-Team.jpg')}}"><br>Fresh Department Production Team
		</div>
	</div>
</div>
<div class="jobs">
	<?php $count = 0; $job_type =0 ?>
	@foreach($jobs as $job)
		@if($job->job_type != $job_type)
			@if($job_type != 0) </div> @endif
			<h1 class="job-category all-deals">{{$job->job_type_name}}</h1>
			<div class="row">
			<?php $job_type = $job->job_type; $count = 0 ?>
		@endif
		<div class="col-md-6">
			<div class="job-details">
			<div class="col-md-3">Job Position</div><div class="col-md-9">{{$job->job_title}} @if($job->job_id != '') (Job ID : {{$job->job_id}}) @endif</div><div style="clear:both"></div>
			@if($job->job_department != '')<div class="col-md-3">Department</div><div class="col-md-9">{{$job->job_department}}</div><div style="clear:both"></div>@endif
			@if($job->specifications != '')<div class="col-md-3">Job Specifications</div><div class="col-md-9">{{$job->specifications}}</div><div style="clear:both"></div>@endif
			@if($job->qualification != '')<div class="col-md-3">Qualification</div><div class="col-md-9">{{$job->qualification}}</div><div style="clear:both"></div>@endif
			@if($job->work_ex != '')<div class="col-md-3">Desired Work Experience</div><div class="col-md-9">{{$job->work_ex}}</div><div style="clear:both"></div>@endif
			@if($job->skills != '')<div class="col-md-3">Desired Skills</div><div class="col-md-9">{{$job->skills}}</div><div style="clear:both"></div>@endif
			</div>
		</div>
		@if(++$count % 2 == 0)
			</div><div class="row">
		@endif
	@endforeach
	</div>
</div>
<div>
<div class="col-md-2" style="line-height: 20.8px;">&nbsp;</div>

<div class="col-md-8" style="line-height: 20.8px;">
<h3>Apply for the job</h3>

<form action="http://www.sparnigeria.com/form-submit/3" class="message_form cc_form" method="post">
<p><label>Name of the Candidate</label><input name="Name" required="true" type="text" /><br />
<label>Email ID</label><input name="Email" required="true" type="email" /><br />
<label>Mobile Number</label><input name="Mobile" required="true" type="text" /><br>
<label>Job Position Applied for</label><input name="Position" required="true" type="text" /><br>
<label>Job ID</label><input name="Job_ID" type="text" /><br>
<label>Preferred Department (if applicable)</label><input name="Preferred_Department"  type="text" /><br>
<label>Preferred Store Location</label><input name="Preferred_Store_Location"  type="text" /><br>
</p>

<p><button type="submit">Submit</button></p>
</form>
</div>

</div>