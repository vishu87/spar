<div class="container margin">
	<div id="content">
		<div class="row">
			<div class="page-bar">
			  <ul class="page-breadcrumb">
			    <li>
			      <i class="fa fa-home"></i>
			      <a href="{{url('/admin')}}">Home</a>
			      <i class="fa fa-angle-right"></i>
			    </li>
			    <li>
			      {{$page->page_title}}
			    </li> 
			  </ul>
			</div>
		</div>

		<h1 class="page-title-top">{{$page->page_title}}</h1>

		<div class="row">
			{{$left_sidebar}}
			<div class="col-md-{{$middle_span}}">
				{{$page->page_content}}
			</div>
			{{$right_sidebar}}
		</div>
    </div>
</div>
