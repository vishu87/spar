<div class="row">
	<div class="col-md-8">
		<div style="margin-bottom:20px;">
			<b>Filter by City </b>
			<a href="{{url('/store-locator')}}" class="btn @if(!isset($id)) green @else default @endif">View All</a>
			@foreach($cities as $city)
				<a class="btn @if(!isset($id)) default @else @if($id == $city->id) green @else default @endif @endif" href="{{url('/store-locator/'.$city->id)}}">{{$city->city}}</a>
			@endforeach
		</div>
		<div class="row" >
			<div class="col-md-6" style="padding-right:20px;">
				<?php $old_store = 0; $count = 1; $total_store = sizeof($stores); ?>
				@foreach($stores as $store)
					<div class="row">
						<h3 class="store-category">{{$store->city}} | {{$store->name}}</h6>
						<div class="store-box-contain" style="margin:20px 0;">
							<div id="googleMap_{{$count}}" style="width:100%;height:200px;"></div>
							<div class="store-box" >									   
								<p>{{$store->address}}<br>									   
									@if($store->telephone != '')
										<b>Tel</b>: {{$store->telephone}}
									@endif
								</p>
							</div>
						</div>
					</div>
					{{($count == ceil($total_store/2))?'</div><div class="col-md-6" style="padding-right:20px;">':''}}
				<?php $count++; $old_store = $store->city_id ?>
				@endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4 pull-right" style="background: #EEE; padding:0 10px;">
		<div style="margin-bottom:20px; line-height:24px; padding-top:10px; font-size:24px; text-align:center;">Upcoming Stores</div>
		@foreach($upcoming_stores as $store)
			<div class="row">
				<h3 class="store-category">{{$store->city}} | {{$store->name}}</h6>
				<div class="store-box-contain" style="margin:20px 0;">
					<div id="googleMap_{{$count}}" style="width:100%;height:200px;"></div>
					<div class="store-box" >									   
						<p>{{$store->address}}<br>									   
							@if($store->telephone != '')
								<b>Tel</b>: {{$store->telephone}}
							@endif
						</p>
					</div>
				</div>
			</div>
		<?php $count++; $old_store = $store->city_id ?>
		@endforeach
	</div>
</div>
<script type="text/javascript">
  function initialize() {
    <?php $count = 1; ?>
    @foreach($stores as $store)
    var mapProp{{$count}} = {
      center:new google.maps.LatLng({{$store->lat}},{{$store->lng}}),
      zoom:12,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var marker{{$count}} = new google.maps.Marker({
	    position: {lat: {{$store->lat}}, lng: {{$store->lng}}},
	    map: map{{$count}}
	  });
    var map{{$count}}=new google.maps.Map(document.getElementById("googleMap_{{$count}}"),mapProp{{$count}});
    marker{{$count}}.setMap(map{{$count}});
    <?php $count++ ?>
    @endforeach

    @foreach($upcoming_stores as $store)
    var mapProp{{$count}} = {
      center:new google.maps.LatLng({{$store->lat}},{{$store->lng}}),
      zoom:12,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var marker{{$count}} = new google.maps.Marker({
	    position: {lat: {{$store->lat}}, lng: {{$store->lng}}},
	    map: map{{$count}}
	  });
    var map{{$count}}=new google.maps.Map(document.getElementById("googleMap_{{$count}}"),mapProp{{$count}});
    marker{{$count}}.setMap(map{{$count}});
    <?php $count++ ?>
    @endforeach
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>