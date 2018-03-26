<?php echo validation_errors(); ?>

<?php echo form_open('employee/add'); ?>

<div class="form-group">
		<label class="control-label col-sm-2" for="descript">First Name:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="fname" id="fname">
			</div>
	</div>
	
	<br />
	<br />
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Middle Name:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="mname" id="mname">
			</div>
	</div>
	
	<br />
	<br />
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Last Name:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="lname" id="lname">
			</div>
	</div>
	
	<br />
	<br />
	
	<div class="form-group">
			<label class="control-label col-sm-2" for="descript">Birthdate:</label>
				<div class="col-md-3">
					<input type="date" class="form-control" name="bdate" id="bdate">
				</div>
	</div>
	
	</br>
	</br>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Position:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="position" id="position">
			</div>
	</div>
	
	</br>
	</br>

	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Address:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="address" id="address">
			</div>
	</div>
	
	</br>
	</br>

	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Contact Number:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="contnum" id="contnum">
			</div>
	</div>
	
	</br>
	</br>

	<div class="form-group">
		<label class="control-label col-sm-2" for="descript">Username:</label>
			<div class="col-md-3">
				<input type="text" class="form-control" name="username" id="username">
			</div>
	</div>
	
	<br />
	<br />

	<div class="form-group">
		<label class="control-label col-md-2" for="pwd">Password:</label>
			<div class="col-md-3">
				<input type="password" class="form-control" name="password" id="password">
			</div>
	</div>
	
	</br>
	</br>

	<input type="submit" name="submit" value="Add Employee" />

</form>