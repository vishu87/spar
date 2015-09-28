<?php $old_category = 0; $count = 0; ?>
@foreach($deals as $deal)
	@if($old_category != $deal->category_id && $count != 0)
	</div> 
	@endif
	@if($old_category != $deal->category_id)
	<div class="row" >
		<div class="deal-category" style="background:rgba(32, 206, 135, 0.96)" data-id="{{$deal->category_id}}">
			{{$deal->product_category}}
		</div>
	@endif
	<div class="col-md-3 deal-box-contain margin-bottom-20 @if($count!=0) deal-box-close @else deal-box-open @endif" data-id="{{$deal->category_id}}">
		<div class="deal-box">
			{{ HTML::image('images/'.$deal->image,'',array("class"=>"")) }}
			<!-- <div class="row btn-align" style="font-size:24px; margin:10px"> 
				<a href="#" style="margin-right:10px;"><i class="fa fa-facebook-square"></i></a>
			    <a href="#" style="margin-right:10px"><i class="fa fa-twitter"></i></a>
			    <a href="#"><i class="fa fa-google-plus"></i></a>
			</div>	 -->								   
		</div>
	</div>
	<?php $count++; $old_category = $deal->category_id ?>
@endforeach
</div>