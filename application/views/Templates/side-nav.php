<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manila South - Admin</title>

    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/sb-admin.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/plugins/morris.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet type="text/css">

    <script src="<?php echo base_url('bootstrap/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>

</head>

<body>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="<?php echo base_url('index.php/Pages')?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        	<a href="<?php echo base_url('')?>"><i> Map</i></a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/Employ')?>"><i> Employees</i></a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/Transaction')?>"><i> Transactions</i></a>
        </li>
        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Records<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url('index.php/Dead')?>"><i>Deceased</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>"><i>Applicant</i></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('')?>"><i>Services</i></a>
                            </li>
                        </ul>
                    </li>
        <li>
            <a href="<?php echo base_url('')?>"><i> Reports</i></a>
        </li>
    </ul>
    </div>
</body>
</html>