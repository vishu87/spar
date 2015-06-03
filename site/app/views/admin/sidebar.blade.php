    <div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper">
            <div class="sidebar-toggler">
          </div>
        </li>
        <li @if($top_active == 1) class="active" @endif style="display:none">
          <a href="{{url('/admin/dashboard')}}">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li style="height:20px"></li>
         <li @if($top_active == 8) class="active open" @endif>
          <a href="javascript:;">
            <i class="fa fa-home"></i>
            <span class="title">Home Page</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li @if($top_active == 8 && $sub_active == 1) class="active" @endif>
              <a href="{{url('/admin/banners')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">Main Banners</span>
                <span class="selected"></span>

              </a>
            </li>
            <li @if($top_active == 8 && $sub_active == 2) class="active" @endif>
              <a href="{{url('/admin/side-banners')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">Side Banners</span>
                <span class="selected"></span>
              </a>
            </li>
            <li @if($top_active == 8 && $sub_active == 3) class="active" @endif>
              <a href="{{url('/admin/mid-banners')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">Mid Banners</span>
                <span class="selected"></span>
              </a>
            </li>
            <li @if($top_active == 8 && $sub_active == 4) class="active" @endif>
              <a href="{{url('/admin/homepage/offers')}}">
                <i class="fa fa-thumbs-o-up"></i>
                <span class="title">Homepage Deals</span>
                <span class="selected"></span>
              </a>
            </li>
          </ul>
        </li>
        <li @if($top_active == 3) class="active open" @endif>
          <a href="javascript:;">
            <i class="fa fa-file-powerpoint-o"></i>
            <span class="title">Inner Pages</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li @if($top_active == 3 && $sub_active == 1) class="active" @endif>
              <a href="{{url('/admin/pages')}}">
                <i class="fa fa-database"></i>
                <span class="title">All Pages</span>
                <span class="selected"></span>

              </a>
            </li>
            <li @if($top_active == 3 && $sub_active == 2) class="active" @endif>
              <a href="{{url('/admin/sidebars')}}">
                <i class="fa fa-bars"></i>
                <span class="title">Sidebars</span>
                <span class="selected"></span>
              </a>
            </li>
             <li @if($top_active == 3 && $sub_active == 3) class="active" @endif >
                <a href="{{url('/admin/media')}}" >
                  <i class="fa fa-file-image-o"></i>
                  <span class="title">Upload Images</span>
                  <span class="selected"></span>
                </a>
              </li>
              <li @if($top_active == 3 && $sub_active == 4) class="active" @endif >
                <a href="{{url('/admin/carousels')}}" >
                  <i class="fa fa-file-image-o"></i>
                  <span class="title">Carousels</span>
                  <span class="selected"></span>
                </a>
              </li>
          </ul>
        </li>
        <li @if($top_active == 2) class="active" @endif>
          <a href="javscript:;">
            <i class="fa fa-cutlery"></i>
            <span class="title">Recipes</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li @if($top_active == 2 && $sub_active == 1) class="active" @endif>
              <a href="{{url('/admin/recipes')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">All Recipes</span>
                <span class="selected"></span>

              </a>
            </li>
            <li @if($top_active == 2 && $sub_active == 2) class="active" @endif>
              <a href="{{url('/admin/recipes/categories')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">Categories</span>
                <span class="selected"></span>
              </a>
            </li>
          </ul>
        </li>
        <li @if($top_active == 4) class="active" @endif>
          <a href="{{url('/admin/brands')}}">
            <i class="fa fa-apple"></i>
            <span class="title">Brands</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 5) class="active" @endif>
          <a href="{{url('/admin/kids-corner')}}">
            <i class="fa fa-reddit"></i>
            <span class="title">Kids Corner</span>
            <span class="selected"></span>
          </a>
        </li>
         <li @if($top_active == 6) class="active open" @endif>
          <a href="javascript:;">
            <i class="fa fa-file-image-o"></i>
            <span class="title">Products</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
          </a>
          <ul class="sub-menu">
            <li @if($top_active == 6 && $sub_active == 1) class="active" @endif>
              <a href="{{url('/admin/products')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">All Products</span>
                <span class="selected"></span>

              </a>
            </li>
            <li @if($top_active == 6 && $sub_active == 2) class="active" @endif>
              <a href="{{url('/admin/products/categories')}}">
                <i class="fa fa-file-image-o"></i>
                <span class="title">Categories</span>
                <span class="selected"></span>
              </a>
            </li>
          </ul>
        </li>
        <li @if($top_active == 7) class="active" @endif>
          <a href="{{url('/admin/deals')}}">
            <i class="fa fa-thumbs-o-up"></i>
            <span class="title">Deals</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 11) class="active" @endif>
          <a href="{{url('/admin/stores')}}">
            <i class="fa fa-thumbs-o-up"></i>
            <span class="title">Stores</span>
            <span class="selected"></span>
          </a>
        </li>
        @if(Auth::user()->priviledge == 1)
        <li @if($top_active == 10) class="active" @endif>
          <a href="{{url('/admin/members')}}">
            <i class="fa fa-users"></i>
            <span class="title">Members</span>
            <span class="selected"></span>
          </a>
        </li>
        @endif
      </ul>
    </div>