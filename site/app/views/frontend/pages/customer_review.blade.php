

<div class="row recipe-info">
   <div class="col-md-7">
		<div class="customer border-radius-2">
          <h4>Sort by  | Show Newest first</h4>
		</div>        
         @foreach($review as $view)         
         @if($view->allow == 1)
		<div class="row img-padding">
			<div><h4><b>{{$view->username}} | Store visited:</b> <a target="blank" href="http://www.sparnigeria.com/">{{$view->name}}</a></h4></div>
			<div class="cust-date">{{ date("d F Y",strtotime($view->created_at)) }} at {{ date("g:ha",strtotime($view->created_at)) }}</div>
			<p>{{$view->review}}</p>
			<span><a href="{{url('/comments/'.$view->id)}}">{{sizeof($view)}} Comments</a></span>
			<div class="add-button recipe-time"><a href="{{url('/comments/'.$view->id)}}">Respond to this</a></div>
		</div>
		<hr>
		@endif		
         @endforeach
	</div>
	<div class="col-md-5 recipe-info">
		<div class="customer border-radius-2">
          <h4>Customer Service Review</h4>
		</div>
		<div class="row img-padding"><p><b style="font-weight: 600; font-size: 15px;">Service review form: </b>As part of our work towards ensuring our customer's complete satisfaction, we invite you to take part in our Customer Service Review. Thank you for patronage.</p></div>
		<div class="row btn-align top-margin"><a href="{{url('/submit-your-reviews')}}" class="btn default green-stripe">Write your own Customer Review</a></div>
	</div>
</div>