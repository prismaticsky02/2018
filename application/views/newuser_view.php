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
        <h1>Web App Users</h1>
        <ol class = "breadcrumb">
          <li>
            <a href="#">
              <i class = "fa fa-dashboard"></i>Home
            </a>
          </li>
          <li class = "active">
            <a href="#">Web App Users</a>
          </li>
        </ol>
      </section>
      <section class = "content">
        <div class="row">
          <div class = col-md-6>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">New Web App User</h3>
              </div>
              <div class="box-body">
                <form role="form" autocomplete="on" action="<?php echo base_url()?>Users/batch_insert" method="POST">
                  <table style="width: 100%" class="table">
                    <tbody id="table-details">
                      <tr id="row1" class="jdr1">
                        <td>
                        <div class = "form-group">
                          <label>Number &nbsp</label><span>1</span>
                            <input type="hidden" value="6437" name="count[]">
                        </div>
                        <div class = "form-group">
                          <label>Username</label>
                            <input class="form-control" name="jname[]" placeholder="Username" type="text" required autofocus>
                        </div>
                        <div class = "form-group">
                          <label>Password</label>
                            <input class="form-control" name="jpass[]" placeholder="Password" type="password">
                        </div>
                        <div class = "form-group">
                          <label>Confirm Password</label>
                            <input class="form-control" name="jcpass[]" placeholder="Confirm Password" type="password" required>
                        </div>
                        <div class="form-group">
                          <label>User Role</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="jrole[]" id="optionsRadios1" value="Employee_rw">
                                User can read and write
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="jrole[]" id="optionsRadios2" value="Employee_rp">
                                User can read and download files
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="jrole[]" id="optionsRadios3" value="Employee_ro">
                                User is read-only
                            </label>
                          </div>
                        </div>
                        <div class = "form-group">
                          <label>Employee ID</label>
                            <input class="form-control" name="jEmpID[]" placeholder="Employee ID" type="text" required>
                        </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-block btn-flat btn-add-more">Add More User</button>
                      <button class="btn btn-primary btn-block btn-flat btn-remove-last">Remove Last User</button>
                      <button type="submit" class="btn btn-primary btn-block btn-flat autofocus">Create Web App User</button>
                    </div>
                  </div>

                 </div>
                </form>
              </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
$(document).ready(function (){
  $("body").on('click', '.btn-add-more', function (e) {
    e.preventDefault();
    var $sr = ($(".jdr1").length + 1);
    var rowid = Math.random();
    var $html = '<tr class="jdr1" id="' + rowid + '">' +
                  '<td>' +
                    '<div class = "form-group">' +
                      '<label>Number &nbsp</label>' + $sr +
                      '<input type="hidden" name="count[]" value="'+Math.floor((Math.random() * 10000) + 1)+'">' +
                    '</div>' +
                    '<div class = "form-group">'+
                      '<label>Username</label>' +
                      '<input type="text" name="jname[]" placeholder="Username" class="form-control required autofocus">' +
                    '</div>' +
                    '<div class = "form-group">' +
                      '<label>Password</label>' +
                      '<input type="text" name="jpass[]" placeholder="Password" class="form-control required">' +
                    '</div>' +
                    '<div class = "form-group">' +
                      '<label>Confirm Password</label>' +
                      '<input class="form-control" name="jcpass[]" placeholder="Confirm Password" type="password" required>' +
                    '</div>' +
                    '<div class="form-group">' +
                      '<label>User Role</label>' +
                        '<div class="radio">' +
                          '<label>' +
                            '<input type="radio" name="jrole[]" id="optionsRadios1" value="Employee_rw">' +
                                'User can read and write' +
                          '</label>' +
                        '</div>' +
                        '<div class="radio">' +
                          '<label>' +
                            '<input type="radio" name="jrole[]" id="optionsRadios2" value="Employee_rp">' +
                              'User can read and download files' +
                          '</label>' +
                        '</div>' +
                        '<div class="radio">' +
                          '<label>' +
                            '<input type="radio" name="jrole[]" id="optionsRadios3" value="Employee_ro">' +
                              'User is read-only' +
                          '</label>' +
                        '</div>' +
                    '</div>' +
                    '<div class = "form-group">' +
                      '<label>Employee ID</label>' +
                      '<input class="form-control" name="jEmpID" placeholder="Employee ID" type="text" required>' +
                    '</div>' +
                  '</td>' +
                '</tr>';

    $("#table-details").append($html);
  });

  $("body").on('click', '.btn-remove-last', function (e) {
    e.preventDefault();
      if($("#table-details tr:last-child").attr('id') != 'row1'){
        $("#table-details tr:last-child").remove();
      }
  });


/** $("#frm_submit").on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: '<?php echo base_url()?>Aray/batchInsert',
      type: 'POST',
      data: $("#frm_submit").serialize()
    })/**.always(function (response){
      var r = (response);
      if(r == 1){
        $(".alert-success").show();
      }
      else{
        $(".alert-danger").show();
      }
    });
  }); */

});
</script>

</body>
</html>
