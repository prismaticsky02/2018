<h2>List of Employees</h2>

<a href="<?php echo base_url('index.php/Add_emp')?>">Add New Employee</a>

<?php foreach ($emp as $emp_item): ?>
        <div class="main">
                <?php 
                echo $emp_item['emp_fname'];
				echo $emp_item['emp_mname'];
				echo $emp_item['emp_lname'];
				echo $emp_item['emp_bdate'];
				echo $emp_item['emp_position'];
				echo $emp_item['emp_address'];
				echo $emp_item['emp_contnum'];
				echo $emp_item['UName'];
				echo $emp_item['PWord'];
                ?>
        </div>

<br />

<?php endforeach; ?>