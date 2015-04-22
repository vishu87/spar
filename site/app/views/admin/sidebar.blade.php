    <div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper">
            <div class="sidebar-toggler">
          </div>
        </li>
        <li class="start">
          <a href="javascript:;">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li @if($top_active == 1) class="active" @endif>
          <a href="{{url('/admin/recipes')}}">
            <i class="icon-basket"></i>
            <span class="title">Recipe</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 2) class="active" @endif>
          <a href="{{url('/admin/pages')}}">
            <i class="icon-basket"></i>
            <span class="title">Pages</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 3) class="active" @endif>
          <a href="{{url('/admin/brands')}}">
            <i class="icon-basket"></i>
            <span class="title">Brands</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 4) class="active" @endif>
          <a href="{{url('/admin/kids-corner')}}">
            <i class="icon-basket"></i>
            <span class="title">Kids Corner</span>
            <span class="selected"></span>
          </a>
        </li>
         <li @if($top_active == 5) class="active" @endif>
          <a href="{{url('/admin/products')}}">
            <i class="icon-basket"></i>
            <span class="title">Products</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 6) class="active" @endif>
          <a href="{{url('/admin/deals')}}">
            <i class="icon-basket"></i>
            <span class="title">Deals</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 7) class="active" @endif>
          <a href="{{url('/admin/banners')}}">
            <i class="icon-basket"></i>
            <span class="title">Banners</span>
            <span class="selected"></span>
          </a>
        </li>      
      </ul>
    </div>