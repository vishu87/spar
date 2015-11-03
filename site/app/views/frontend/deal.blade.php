<div class="deal-top">
	<a href="{{url('/deals')}}"><img src="{{url('/frontend/images/All-Deals-Offers.png')}}"></a>
	<a href="{{url('/deals/1')}}"><img src="{{url('/frontend/images/daily-deals.png')}}"></a>
	<a href="{{url('/deals/2')}}"><img src="{{url('/frontend/images/reward-card-member.png')}}"></a>
	<a href="{{url('/deals/3')}}"><img src="{{url('/frontend/images/Hero-Offers.png')}}"></a>
</div>
<?php $old_category = 0; $count = 0; ?>
@foreach($deals as $deal)
	@if($old_category != $deal->category_id && $count != 0)
	</div> </div> </div> </div>
	@endif
	@if($old_category != $deal->category_id)
	<div class="row" >
		<div class="deal-category" style="background:#{{($deal->color != '')?$deal->color:'000'}}" data-id="{{$deal->category_id}}">
			{{$deal->product_category}}
			<div style="float:right;" class="plus-minus @if($count==0) open @endif">@if($count!=0) <i class="fa fa-plus"></i> @else <i class="fa fa-minus"></i> @endif</div>
		</div>
		<div class="deal-box-contain margin-bottom-20 @if($count!=0) deal-box-close @else deal-box-open @endif" data-id="{{$deal->category_id}}">
		<div style="margin:0 25px">
		<div class="deal-carousel touch-carousel" >
		@endif
		<div class="deal-box">
			{{ HTML::image('images/'.$deal->image,'',array("class"=>"")) }}
		</div>
	
	<?php $count++; $old_category = $deal->category_id ?>
@endforeach
</div> </div> </div> </div>