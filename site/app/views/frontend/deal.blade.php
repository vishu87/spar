<?php $old_category = 0; $count = 0; ?>
@foreach($deals as $deal)
	@if($old_category != $deal->category_id && $count != 0)
	</div> 
	<div class="row btn-align top-margin">
		<!-- <a href="javascript:;" class="btn default green-stripe">View All Deals</a> -->
	</div>
	<hr>
	@endif
	@if($old_category != $deal->category_id)
	<div class="row">
		<h6 class="deal-category">{{$deal->product_category}}</h6>
	@endif
	<div class="col-md-3 deal-box-contain">
		<div class="deal-box">
			{{ HTML::image('images/'.$deal->image,'',array("class"=>"")) }}
			<div class="row btn-align" style="font-size:24px; margin:10px"> 
				<a href="#" style="margin-right:10px;"><i class="fa fa-facebook-square"></i></a>
			    <a href="#" style="margin-right:10px"><i class="fa fa-twitter"></i></a>
			    <a href="#"><i class="fa fa-google-plus"></i></a>
			</div>									   
		</div>
	</div>
<?php $count++; $old_category = $deal->category_id ?>
@endforeach
</div> 
<div class="row btn-align top-margin">
<!-- 	<a href="javascript:;" class="btn default green-stripe">View All Deals</a> -->
</div>
<hr>