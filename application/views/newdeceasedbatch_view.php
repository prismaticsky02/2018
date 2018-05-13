<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New Deceased | Manila South Cemetery</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/Ionicons/css/ionicons.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
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
  <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class = "content-header">
        <h1>Deceased</h1>
        <ol class = "breadcrumb">
          <li>
            <a href="#">
              <i class = "fa fa-dashboard"></i>Home
            </a>
          </li>
          <li class = "active">
            <a href="#">Deceased</a>
          </li>
        </ol>
      </section>
      <section class = "content">
        <div class="row">
          <div class = col-md-12>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">New Deceased</h3>
              </div>
              <div class="box-body">
              	<form role="form" autocomplete="on" action="<?php echo base_url()?>DeceasedBatch/batch_insert" method="POST">
                  <table style="width: 100%" class="table">
                  	<thead>
						<tr>
							<th>Number</th>
              <th>Full Name</th>
							<th>Birth Date</th>
							<th>Death Date</th>
							<th>Sex</th>
						</tr>
					</thead>
          <tbody id="table-details">
            <tr id="row1" class="jdr1">
							<td><span>1</span><input type="hidden" value="6437" name="count[]"></td>
							<td><input type="text" required="" class="form-control"  placeholder="Full Name" name="jname[]"></td>
              <td><div class="form-group">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="jbdate[]" placeholder="mm/dd/yyyy" id="datepicker" required>
                    </div>
                  </div></td>
              <td><div class="form-group">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="jddate[]" placeholder="mm/dd/yyyy" id="datepicker2" required>
                    </div>
                  </div></td>
							<td><select class="form-control"  placeholder="Sex" name="jsex[]">
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
              </select></td>
						</tr>
					</tbody>
					</table>
					<hr>
				   <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block btn-flat btn-add-more">Add More Deceased</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block btn-flat btn-remove-last">Remove Last Deceased</button>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register Deceased</button>
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

  <div class="row">
	<div class="alert alert-dismissable alert-success" style="display: none">
		<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Data inserted successfully</strong>.
	</div>
	<div class="alert alert-dismissable alert-danger"  style="display: none">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Sorry something went wrong</strong>
	</div>
  </div>

<script src = "<?php echo base_url().'theme/bower_components/jquery/dist/jquery.min.js'; ?>">
</script>
<!-- Bootstrap 3.3.7 -->
<script src = "<?php echo base_url().'theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'; ?>"></script>
<script src = "<?php echo base_url().'theme/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
<script>
$(document).ready(function (){
	$("body").on('click', '.btn-add-more', function (e) {
		e.preventDefault();
		var $sr = ($(".jdr1").length + 1);
		var rowid = Math.random();
		var $html = '<tr class="jdr1" id="' + rowid + '">' +
			'<td><span>' + $sr + '</span><input type="hidden" name="count[]" value="'+Math.floor((Math.random() * 10000) + 1)+'"></td>' + 
      '<td><input type="text" required="" class="form-control"  placeholder="Full Name" name="jname[]"></td>' +
              '<td><div class="form-group">' +
                    '<div class="input-group date">' +
                      '<div class="input-group-addon">' +
                        '<i class="fa fa-calendar"></i>' +
                      '</div>' +
                      '<input type="text" class="form-control pull-right" name="jbdate[]" placeholder="mm/dd/yyyy" id="datepicker" required>' +
                    '</div>' +
                  '</div></td>' +
              '<td><div class="form-group">' +
                    '<div class="input-group date">' +
                      '<div class="input-group-addon">' +
                        '<i class="fa fa-calendar"></i>' +
                      '</div>' +
                      '<input type="text" class="form-control pull-right" name="jddate[]" placeholder="mm/dd/yyyy" id="datepicker2" required>' +
                    '</div>' +
                  '</div></td>' +
              '<td><select class="form-control"  placeholder="Sex" name="jsex[]">' +
                  '<option value="Female">Female</option>' +
                  '<option value="Male">Male</option>' +
              '</select></td>' +
		'</tr>';

		$("#table-details").append($html);
	});

	$("body").on('click', '.btn-remove-last', function (e) {
		e.preventDefault();
			if($("#table-details tr:last-child").attr('id') != 'row1'){
				$("#table-details tr:last-child").remove();
			}
	});

/**	$("#frm_submit").on('submit', function (e) {
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
<script>
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  </script>
  <script>
  //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
  </script>
</body>
</html>