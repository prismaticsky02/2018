<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New User Batch Insert</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
	<div class="row jumbotron">
		<form role="form" autocomplete="on" action = "<?php echo base_url()?>Aray/batchInsert" method="POST"> <!--id="frm_submit"-->
			<div class="col-md-12">
				<fieldset><legend>User Details</legend>
<!-- Text input-->
					<table style="width: 100%" class="table">
						<thead>
							<tr>
								<th>Number</th>
								<th>Username</th>
								<th>Password</th>
								<th>User Role</th>
								<th>Employee ID</th>
						</thead>
						<tbody id="table-details">
							<tr id="row1" class="jdr1">
								<td><span class="btn btn-sm btn-default">1</span><input type="hidden" value="6437" name="count[]"></td>
								<td><input type="text" required="" class="form-control input-sm"  placeholder="Username" name="jname[]"></td>
								<td><input type="text" required="" class="form-control input-sm" placeholder="Password" name="jpass[]"></td>
								<td><input type="text" required="" class="form-control input-sm" placeholder="User Role" name="jrole[]"></td>
								<td><input type="text" required="" class="form-control input-sm" placeholder="Employee ID" name="jEmpID[]"></td>
							</tr>
						</tbody>
					</table>

					<button class="btn btn-primary btn-sm btn-add-more">Add More</button>
					<button class="btn btn-sm btn-warning btn-remove-detail-row"><i class="glyphicon glyphicon-remove"></i></button>
				</fieldset>
			</div>
			<div class="col-md-12">
				<hr><input class="btn btn-success pull-right" type="submit" value="submit" name="submit">
			</div>
		</form>
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

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
$(document).ready(function (){
	$("body").on('click', '.btn-add-more', function (e) {
		e.preventDefault();
		var $sr = ($(".jdr1").length + 1);
		var rowid = Math.random();
		var $html = '<tr class="jdr1" id="' + rowid + '">' +
			'<td><span class="btn btn-sm btn-default">' + $sr + '</span><input type="hidden" name="count[]" value="'+Math.floor((Math.random() * 10000) + 1)+'"></td>' + 
			'<td><input type="text" name="jname[]" placeholder="Username" class="form-control input-sm"></td>' +
			'<td><input type="text" name="jpass[]" placeholder="Password" class="form-control input-sm"></td>' +
			'<td><input type="text" name="jrole[]" placeholder="User Role" class="form-control input-sm"></td>' +
			'<td><input type="text" name="jEmpID[]" placeholder="Employee ID" class="form-control input-sm"></td>' +
		'</tr>';

		$("#table-details").append($html);
	});

	$("body").on('click', '.btn-remove-detail-row', function (e) {
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
</body>
</html>