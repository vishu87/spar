<div class=" margin">
	<div id="content">
		<div class="row">
			<div class="col-md-6">
				<h1 class="page-title-top">{{$page->page_title}}</h1>
			</div>
			<div class="col-md-6">
				<div class="page-bar pull-right" style="background:#FFF">
				  <ul class="page-breadcrumb">
				    <li>
				      <i class="fa fa-home"></i>
				      <a href="{{url('/')}}">Home</a>
				      <i class="fa fa-angle-right"></i>
				    </li>
				    @if($page->top_active != 0 && $page->top_active != $page->id)
				    	<li>
					      <a href="{{url('/'.$page->top_active_page_slug)}}">{{$page->top_active_page_title}}</a>
					      <i class="fa fa-angle-right"></i>
					    </li>
				    @endif
				    <li>
				      {{$page->page_title}}
				    </li> 
				  </ul>
				</div>
			</div>
		</div>
		<div class="row">
			{{$left_sidebar}}
			<div class="col-md-{{$middle_span}} page-content">
				{{$page->page_content}}
			</div>
			{{$right_sidebar}}
		</div>
    </div>
</div>
@if($page->id == 17)
	<script type="text/javascript">
      function initialize() {
        var mapProp = {
          center:new google.maps.LatLng(6.557002,3.358185),
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var marker = new google.maps.Marker({
		    position: {lat: 6.557002, lng: 3.358185},
		    map: map
		  });

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

        marker.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@endif