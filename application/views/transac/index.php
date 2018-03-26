<?php
	$this->load->helper('date');
	$this->load->helper('string');

	$datestring = '%Y%m%d -';

	echo 'Permit Code:';
	echo mdate($datestring);
	echo ' ';
	echo random_string('numeric', 4);

	?>

<?php foreach ($tron as $tron_item): ?>
        <div class="main">
                <?php 
                echo "<input type='checkbox' name='sname'>";
                echo $tron_item['serviceID'];
                echo ' ';
				echo $tron_item['service_name'];
				echo $tron_item['amount'];
                ?>
        </div>
<?php endforeach; ?>

<?php echo 'Total Price: '; ?>

<br>
<input type="submit" name="submit" value="Submit Order" />