<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Customer | Manila South Cemetery</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/Ionicons/css/ionicons.min.css'; ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/dist/css/AdminLTE.min.css'; ?>">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
<section class = "content-header">
  <h1>Customers</h1>
  <ol class = "breadcrumb">
    <li>
      <a href="#">
        <i class = "fa fa-dashboard"></i>Home
      </a>
    </li>
    <li class = "active">
      <a href="#">Customers</a>
    </li>
  </ol>
</section>
<section class = "content">
  <div class="row">
    <div class = col-md-6>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">New Customer</h3>
        </div>
  <!-- /.login-logo -->
      <form role="form" autocomplete="on" action = "<?php echo base_url()?>Customer/add_customer" method="POST">
        <div class="box-body">
          <div class = "form-group">
            <label>Full Name</label>
            <input class="form-control" name="name" placeholder="Full Name" type="text" required autofocus>
          </div>
          <div class = "form-group">
            <label>Address</label>
            <textarea class = "form-control" name="address" rows="3" placeholder= "Address" required></textarea>
          </div>
          <div class = "form-group">
            <label>Contact Number</label>
            <input class="form-control" name="contact" placeholder="Contact Number" type="text" required>
          </div>
          <div class = "form-group">
            <label>Email Address</label>
            <input class="form-control" name="email" placeholder="Email Address" type="email" required>
          </div>
          <div class="form-group">
            <label>Customer Type</label>
              <div class="radio">
                <label>
                  <input type="radio" name="type" id="optionsRadios1" value="Private">
                    Private
                </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="type" id="optionsRadios2" value="Public">
                      Public
                    </label>
                  </div>
            </div>
            <div class="form-group">
            <label>Customer Function</label>
              <div class="radio">
                <label>
                  <input type="radio" name="function" id="optionsRadios1" value="Sold-to">
                    Sold-to
                </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="function" id="optionsRadios2" value="Bill-to">
                      Bill-to
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="function" id="optionsRadios3" value="Payer">
                      Payer
                    </label>
                  </div>
            </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register Customer</button>
            </div>
              <!-- /.col -->
          </div>
        </div>
        </form>
      
  <!-- /.login-box-body -->
</div>
</div>
</div>
</section>
</div>
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src = "<?php echo base_url().'theme/bower_components/jquery/dist/jquery.min.js'; ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src = "<?php echo base_url().'theme/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
</body>
</html>
