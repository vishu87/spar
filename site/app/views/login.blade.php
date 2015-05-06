<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>{{$title}}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
{{HTML::style("http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all")}}
{{HTML::style("assets/global/plugins/font-awesome/css/font-awesome.min.css")}}
{{HTML::style("assets/global/plugins/simple-line-icons/simple-line-icons.min.css")}}
{{HTML::style("assets/global/plugins/bootstrap/css/bootstrap.min.css")}}
{{HTML::style("assets/global/plugins/uniform/css/uniform.default.css")}}
{{HTML::style("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css")}}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
{{HTML::style("assets/global/css/components.css")}}
{{HTML::style("assets/admin/css/layout.css")}}
{{HTML::style("assets/admin/css/themes/darkblue.css")}}
{{HTML::style("assets/admin/css/custom.css")}}
{{HTML::style("assets/global/css/custom-new.css")}}
{{HTML::style("assets/global/css/login.css")}}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-quick-sidebar-over-content home-body">

<div class="container">
    <div class="logo">

      <a href="{{url('/')}}">{{ HTML::image('assets/global/img/logo.png') }}</a>
    </div>
    <div class="content">
      @if(Session::has('fail'))
      <div class="alert alert-danger">
          <span> {{Session::get('fail')}}
          </span>
      </div>
      @endif

        <!-- BEGIN LOGIN FORM -->
        {{Form::open(array("url"=>"/login","method" => "POST","role"=>"form","class" => "login-form"))}}
        <h3 class="form-title">Login to Your Account</h3>
        
        <div class="form-group">
          <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
          <label class="control-label visible-ie8 visible-ie9">Username</label>
          {{Form::text('username','',array("class"=>"form-control", "placeholder"=>"Enter Username"))}}
        </div>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Password</label>
          {{Form::password('password', array("class"=>"form-control form-control-solid placeholder-no-fix","type"=>"password","autocomplete"=>"off","placeholder"=>"New Password"))}}
        </div>
        <div class="form-actions">
          <button type="submit" class="btn blue">Login <i class="fa fa-swap-right"></i></button>          
        </div>
      {{Form::close()}}
    <!-- END LOGIN FORM -->
    </div>
</div>
<!-- BEGIN FOOTER -->
<div class="page-footer" style="text-align:center; color:#CCC">
  <h4>
     2014 &copy; Naija Go Social.
  </h4>
  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
{{HTML::script("assets/global/plugins/jquery.min.js")}}
{{HTML::script("assets/global/plugins/jquery-migrate.min.js")}}
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{HTML::script("assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js")}}
{{HTML::script("assets/global/plugins/bootstrap/js/bootstrap.min.js")}}
{{HTML::script("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")}}
{{HTML::script("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}
{{HTML::script("assets/global/plugins/jquery.blockui.min.js")}}
{{HTML::script("assets/global/plugins/jquery.cokie.min.js")}}
{{HTML::script("assets/global/plugins/uniform/jquery.uniform.min.js")}}
<!-- END CORE PLUGINS -->

{{HTML::script("assets/global/scripts/jquery.backstretch.min.js")}}
{{HTML::script("assets/global/scripts/metronic.js")}}
{{HTML::script("assets/global/scripts/jquery-ui.js")}}
{{HTML::script("assets/admin/scripts/layout.js")}}

{{HTML::script("assets/admin/scripts/jquery.tablesorter.js")}}
{{HTML::script("assets/admin/scripts/jquery.tablesorter.pager.js")}}
{{HTML::script("assets/admin/scripts/jquery.tablesorter.widgets.js")}}
{{HTML::script("assets/admin/scripts/custom.js")}}
<script>
jQuery(document).ready(function() {   

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>