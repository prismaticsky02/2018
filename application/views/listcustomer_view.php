<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>List of Customers | Manila South Cemetery</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/Ionicons/css/ionicons.min.css'; ?>">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
 
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
    <div class = col-xs-12>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">List of Customers</h3>
        </div>
        <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email Address</th>
                    <th>Type</th>
                    <th>Function</th>
                    <th>Created on</th>
                    <th>Last Changed on</th>
                    <th>Changed by</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                   <?php  
                        foreach ($h->result() as $row)  
                        {  
                            ?><tr>
                                <td><?php echo $row->CUSTOMER_ID;?></td>  
                                <td><?php echo $row->CUSTOMER_NAME;?></td>
                                <td><?php echo $row->CUSTOMER_ADDRESS;?></td>
                                <td><?php echo $row->CUSTOMER_CONTACT;?></td>
                                <td><?php echo $row->CUSTOMER_EMAIL;?></td>
                                <td><?php echo $row->CUSTOMER_TYPE;?></td>
                                <td><?php echo $row->CUSTOMER_FUNCTION;?></td> 
                                <td><?php echo $row->CUSTOMER_DATECREATED;?></td> 
                                <td><?php echo $row->CUSTOMER_LASTCHANGED;?></td>
                                <td><?php echo $row->CUSTOMER_CHANGEDBY;?></td>
                                <td><?php echo $row->CUSTOMER_STATUS;?></td>
                              </tr>  
                        <?php 
                      }  
                    ?>
                  </tbody>
                </tbody>
                <tfoot>
                <tr>
                  <th>Customer ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact Number</th>
                  <th>Email Address</th>
                  <th>Type</th>
                  <th>Function</th>
                  <th>Created on</th>
                  <th>Last Changed on</th>
                  <th>Changed by</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
<!-- DataTables -->
<script src = "<?php echo base_url().'theme/bower_components/datatables.net/js/jquery.dataTables.min.js'; ?>"></script>
<script src = "<?php echo base_url().'theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'; ?>"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
</body>
</html>
