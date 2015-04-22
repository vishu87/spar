<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Title <small>some information</small>
    </h3>
  </div>
  <div class="col-md-6" style="text-align:right">
    <a href="#" class="btn yellow">Some Link</a>
  </div>
</div>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="#">Form Stuff</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="#">Form Controls</a>
    </li>
  </ul>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-gift"></i> Default Form
        </div>
      </div>
      <div class="portlet-body form">
        <form role="form">
          <div class="form-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Email Address">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Circle Input</label>
                  <div class="input-group">
                    <span class="input-group-addon input-circle-left">
                    <i class="fa fa-envelope"></i>
                    </span>
                    <input type="text" class="form-control input-circle-right" placeholder="Email Address">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue">Submit</button>
            <button type="button" class="btn default">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>
@include('admin.list')