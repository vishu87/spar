<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
  <head>
    
    <title>{{$title}}</title>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <meta name="description" content="SPAR Nigeria">
    <meta name="author" content="Naija Go Social">
    {{HTML::style("frontend/css/bootstrap.css")}}
    {{HTML::style("frontend/css/font-awesome.min.css")}}
    {{HTML::style("frontend/css/components-rounded.css")}}
    {{HTML::style("frontend/css/datepicker3.css")}}
    {{HTML::style("frontend/css/style.css?v=1.0.0")}}
    {{HTML::style("frontend/css/style_responsive.css?v=1.0.0")}}
    {{HTML::style("frontend/css/responsive.css?v=1.0.0")}}
    {{HTML::style("frontend/css/animate.css?v=1.0.0")}}
    {{HTML::style("frontend/css/colors.css?v=1.0.0")}}
    {{HTML::style("frontend/css/custom.css?v=1.0.0")}}
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1616910621872702";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
      <header class="clearfix">      
        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                  </button>
                  
                  <a class="navbar-brand" href="index.php">{{ HTML::image('frontend/images/logo.png') }}</a>
                </div>
              </div>
              <div class="col-md-6 pull-right header-right hidden-xs">
                <ul class="top-icons">
                    <li>
                        <a href="#"><img src="{{url('frontend/images/facebook.jpg')}}"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('frontend/images/twitter.jpg')}}"></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{url('frontend/images/youtube.jpg')}}"></a>
                    </li>
                  </ul>
                  <div>
                    <div class="newsletter">
                     <a href=""><i class="fa fa-envelope"></i> Sign up for Newsletter and Offers today <i class="fa fa-angle-double-right"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>     
      </header>
    </div>
      <nav style="background:#9E9E9E">
        <div class="container">
          <div class="navbar-default navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a class="@if(Request::is('/')) active @endif" href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 0 || $page->id == 0) active @endif @endif" href="{{url('/brands')}}">Product Range</a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 19 || $page->id == 19) active @endif @endif" href="{{url('/store-locator')}}">Store Locator</a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 18 || $page->id == 18) active @endif @endif" href="{{url('/deals')}}">Deals</a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 2 || $page->id == 2) active @endif @endif" href="{{url('/reward-card')}}">Loyalty Program</a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 16 || $page->id == 16) active @endif @endif" href="{{url('/gift-card')}}">Gift Cards</a></li>
              <li><a class="@if(isset($page->top_active)) @if($page->top_active == 1 || $page->id == 1) active @endif @endif" href="{{url('/about-spar')}}">About SPAR</a></li>
            </ul>
          </div>
       </div>
      </nav>
    <div id="container">
    {{$main}}
  
  <!-- END CONTENT -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

      <footer>
        <div class="container">
          <div class="row footer-widgets small-align-center">                   
              <div class="col-md-4">
                  <div class="footer-widget twitter-widget">
                      <h4><i class="fa fa-twitter"></i> Twitter Feed<span class="head-line"></span></h4>
                      <div style="padding-right:20px">
                        <?php
                          include(app_path().'/tweet/TweetPHP.php');
                          $TweetPHP = new TweetPHP(array(
                            'consumer_key'              => 'S5MdIUJXCne6ybLa29K9h3Iqf',
                            'consumer_secret'           => 'iPsT3OKLfvsyNutH0YkVy9Rh1j2k9ePilhx9vOJaps8jFr4ztr',
                            'access_token'              => '2540278561-rKu6wUzFOeuaPCcYOnZHDvX7vDpXWkftyLzkrFA',
                            'access_token_secret'       => 'oL1DVxj9k4voG6QMiQqDgst0rk9x0cFNuKjkakIyyZR3g',
                            'twitter_screen_name'       => 'corperlife'
                            ));
                          echo $TweetPHP->get_tweet_list();
                          ?>
                      </div>         
                  </div>
              </div>              
              <div class="col-md-4">
                  <div class="footer-widget flickr-widget">
                      <h4>Facebook Feed<span class="head-line"></span></h4>
                      <div class="fb-page" data-href="https://www.facebook.com/spar.ng" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/spar.ng"><a href="https://www.facebook.com/spar.ng">SPAR Nigeria</a></blockquote></div></div>
                  </div>
              </div>               
              <div class="col-md-4">
                  <div class="footer-widget contact-widget">
                      <p>Artee Group is one of Nigeria's leading business houses with multiple businesses spanning across the consumption space. While retail forms the core business activity of Artee Group, group subsidiaries are present in manufacturing, real estate, exports among many others.</p>
                      <ul>
                          <li><span>Phone Number:</span> +234 (0) 805 749 5210 </li>
                          <li><span>Email:</span> sales@arteegroup.com</li>
                          <li><span>Address: </span> Artee Industries Ltd, 58 Town Planning Way, Ilupeju, Lagos </li>
                      </ul>
                  </div>
                  <div>
                    &copy; 2015 SPAR Nigeria -  All Rights Reserved
                  </div>
              </div>
            </div>   
            <!-- <div class="copyright-section">
              <div class="row">
                <div class="col-md-6">
                  <p>&copy; 2014 SPAR Nigeria -  All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                  <ul class="footer-nav">
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>            
              </div>
            </div> -->
          </div>
        </footer>
      </div>
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        {{HTML::script("frontend/js/jquery-2.1.1.min.js")}}
        {{HTML::script("frontend/js/jquery.migrate.js")}}
        {{HTML::script("assets/global/plugins/ckeditor/ckeditor.js")}}
        {{HTML::script("assets/global/plugins/ckeditor/adapters/jquery.js")}}
        {{HTML::script("frontend/js/bootstrap.min.js")}}
        {{HTML::script("frontend/js/bootstrap-datepicker.js")}}
        {{HTML::script("frontend/js/owl.carousel.min.js")}}
        {{HTML::script("frontend/js/script.js")}}
  </body>
</html>