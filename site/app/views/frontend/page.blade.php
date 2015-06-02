<div class="container margin">
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
				      <a href="{{url('/admin')}}">Home</a>
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
