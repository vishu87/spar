<div class="col-md-3" class="page-sidebar">
	@foreach($sidebar as $item)
		@if($item->type == 1)
			@if($item->page_title) {{$item->page_title}} @endif
		@endif
	@endforeach
</div>