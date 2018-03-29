<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Employee | Manila South Cemetery</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body style="height:auto; min-height:100%;">
<section class = "content-header">
  <h1>Employee</h1>
  <ol class = "breadcrumb">
    <li>
      <a href="#">
        <i class = "fa fa-dashboard"></i>Home
      </a>
    </li>
    <li class = "active">
      <a href="#">Employee</a>
    </li>
  </ol>
</section>
<section class = "content">
  <div class="row">
    <div class = col-md-6>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Register an Employee</h3>
         </div>
  <!-- /.login-logo -->
      <form role="form" autocomplete="on" action = "http://localhost/2018/index.php/employee_controller/process" method="POST">
        <div class="box-body">
          <div class = "form-group">
            <label>First Name</label>
            <input class="form-control" name="fname" placeholder="First Name" type="text" required autofocus>
          </div>
          <div class = "form-group">
            <label>Middle Name</label>
            <input class="form-control" name="mname" placeholder="Middle Name" type="text">
          </div>
          <div class = "form-group">
            <label>Last Name</label>
            <input class="form-control" name="lname" placeholder="Last Name" type="text" required>
          </div>
          <div class = "form-group">
            <label>Address</label>
            <textarea class = "form-control" name="address" rows="3" placeholder= "Address" required></textarea>
          </div>
          <div class = "form-group">
            <label>Contact Number</label>
            <input class="form-control" name="number" placeholder="Contact Number" type="text" required>
          </div>
          <div class="form-group">
                <label>Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="birthday" id="datepicker" required>
                </div>
                <!-- /.input group -->
          </div>
          <div class = "form-group">
            <label>Email Address</label>
            <input class="form-control" name="email" placeholder="Email Address" type="email">
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register Employee</button>
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
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src = "bower_components/jquery/dist/jquery.min.js"></script>
<script src = "bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src = "bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>
</body>
</html>