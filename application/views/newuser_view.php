<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Web App User | Manila South Cemetery</title>
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
  <h1>Web App User</h1>
  <ol class = "breadcrumb">
    <li>
      <a href="#">
        <i class = "fa fa-dashboard"></i>Home
      </a>
    </li>
    <li class = "active">
      <a href="#">User</a>
    </li>
  </ol>
</section>
<section class = "content">
  <div class="row">
    <div class = col-md-6>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Create a Web App User</h3>
        </div>
  <!-- /.login-logo -->
      <form role="form" autocomplete="on" action="<?php echo base_url()?>User/add_user" method="POST">
        <div class="box-body">
          <div class = "form-group">
            <label>Username</label>
            <input class="form-control" name="uname" placeholder="Username" type="text" required autofocus>
          </div>
          <div class = "form-group">
            <label>Password</label>
            <input class="form-control" name="pword" placeholder="Password" type="password">
          </div>
          <div class = "form-group">
            <label>Confirm Password</label>
            <input class="form-control" name="cpword" placeholder="Confirm Password" type="password" required>
          </div>
          <div class="form-group">
            <label>User Role</label>
              <div class="radio">
                <label>
                  <input type="radio" name="emp" id="optionsRadios1" value="Employee_rw">
                    User can read and write
                </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="emp" id="optionsRadios2" value="Employee_rp">
                      User can read and download files
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="emp" id="optionsRadios3" value="Employee_ro">
                      User is read-only
                    </label>
                  </div>
            </div>
          <div class = "form-group">
            <label>Employee ID</label>
            <input class="form-control" name="empid" placeholder="Employee ID" type="text" required>
            </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Create Web App User</button>
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
<script src = "<?php echo base_url().'theme/bower_components/jquery/dist/jquery.min.js'; ?>">
</script>
<!-- Bootstrap 3.3.7 -->
<script src = "<?php echo base_url().'theme/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
</body>
</html>
