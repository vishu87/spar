<div class="row" >
	<div class="col-md-5" style="padding-right:20px;">
		<?php $old_store = 0; $count = 0; ?>
		@foreach($stores as $store)
			@if($old_store != $store->city_id && $count != 0)
			</div>
			@endif
			@if($old_store != $store->city_id)
			<div class="row">
				<h3 class="store-category">{{$store->city}}</h6>
			@endif
			<div class="store-box-contain" style="margin:20px 0;">
				<div class="store-box" >
					<h4>{{$store->name}}</h4>									   
					<p>{{$store->address}}<br>									   
						@if($store->telephone != '')
							<b>Tel</b>: {{$store->telephone}}
						@endif
					</p>
				</div>
			</div>
		<?php $count++; $old_store = $store->city_id ?>
		@endforeach
		</div> 
	</div>
	<div class="col-md-7">
		<div id="googleMap" style="width:100%;height:400px;"></div>
	</div>
</div>