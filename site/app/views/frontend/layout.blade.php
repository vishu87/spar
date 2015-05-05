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
    {{HTML::style("frontend/css/style.css")}}
    {{HTML::style("frontend/css/responsive.css")}}
    {{HTML::style("frontend/css/animate.css")}}
    {{HTML::style("frontend/css/colors.css")}}
    {{HTML::style("frontend/css/custom.css")}}
    

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
  </head>
  <body>

  
    <div id="container">
    
      <header class="clearfix">      
        <div class="navbar navbar-default navbar-top">
          <div class="container">
            <div class="navbar-header">
              
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
              
              <a class="navbar-brand" href="index.php">{{ HTML::image('frontend/images/logo.png') }}</a>
            </div>
            <div class="navbar-collapse collapse">
              
              <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="#"><i class="fa fa-home"></i></a></li>
                <li><a class="" href="{{url('/pages/aboutus/5')}}">About SPAR</a></li>
                <li><a class="" href="{{url('/')}}">Store Locator</a></li>
                <li><a class="" href="{{url('/')}}">Loyalty Program</a></li>
                <li><a class="" href="{{url('/pages/gift-card')}}">Gift Card</a></li>
                <li><a class="" href="{{url('/')}}">Careers</a></li>
                <li><a class="" href="{{url('/deals')}}">Deals</a></li>
                <li><a class="" href="{{url('/')}}">Credit Cards</a></li>
              </ul>
              
            </div>
          </div>
        </div>     
      </header>
    
    {{$main}}
  
  <!-- END CONTENT -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->

      <footer>
        <div class="container">
          <div class="row footer-widgets">    
            <div class="col-md-3">
              <div class="footer-widget social-widget">
                <h4>Follow Us<span class="head-line"></span></h4>
                  <ul class="social-icons">
                    <li>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                 
                    <li>
                        <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                    </li>
                    <li>
                        <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                    </li>
                    <li>
                        <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                    </li>
                  </ul>
                </div>
              </div>                 
              <div class="col-md-3">
                  <div class="footer-widget twitter-widget">
                      <h4>Twitter Feed<span class="head-line"></span></h4>           
                  </div>
              </div>              
              <div class="col-md-3">
                  <div class="footer-widget flickr-widget">
                      <h4>Facebook Feed<span class="head-line"></span></h4>
                  </div>
              </div>               
              <div class="col-md-3">
                  <div class="footer-widget contact-widget">
                      <h4>{{HTML::image('frontend/images/footer-logo.png','Footer Logo',array("class"=>"img-responsive"))}}</h4>
                      <p>Artee Group is one of Nigeria's leading business houses with multiple businesses spanning across the consumption space. While retail forms the core business activity of Artee Group, group subsidiaries are present in manufacturing, real estate, exports among many others.</p>
                      <ul>
                          <li><span>Phone Number:</span> +234 (0) 805 749 5210 </li>
                          <li><span>Email:</span> sales@arteegroup.com</li>
                          <li><span>Address: </span> Artee Industries Ltd, 58 Town Planning Way, Ilupeju, Lagos </li>
                      </ul>
                  </div>
              </div>
            </div>   
            <div class="copyright-section">
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
            </div>
          </div>
        </footer>
      </div>
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        {{HTML::script("frontend/js/jquery-2.1.1.min.js")}}
        {{HTML::script("frontend/js/jquery.migrate.js")}}
        {{HTML::script("frontend/js/bootstrap.min.js")}}
        {{HTML::script("frontend/js/owl.carousel.min.js")}}
        {{HTML::script("frontend/js/script.js")}}
  </body>
</html>