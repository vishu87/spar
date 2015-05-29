<div class="col-md-3 page-sidebar @if($type == 1) page-sidebar-left @endif @if($type == 2) page-sidebar-right @endif ">
	<?php $count = 0; ?>
	@foreach($sidebar as $item)
		@if($item->type == 1)
			@if($item->page_title) <a href="{{URL::to('/'.$item->page_slug)}}">{{$item->page_title}}</a> @endif
		@endif
		@if($item->type == 2)
			<div class="sidebar-title" @if($count == 0) style="margin-top:0" @endif>
				{{$item->title}}
			</div>
		@endif
		@if($item->type == 3)
			<div class="sidebar-image" @if($count == 0) style="margin-top:0" @endif>
				{{HTML::image('images/'.$item->image,'')}}
			</div>
		@endif
		@if($item->type == 4)
			<div class="sidebar-html">
				{{$item->custom_html}}
			</div>
		@endif
	<?php $count++; ?>
	@endforeach
</div>