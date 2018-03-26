<h2>List of Deceased</h2>

<a href="<?php echo base_url('')?>">Add New Deceased Record</a>

<?php foreach ($ded as $ded_item): ?>
        <div class="main">
                <?php 
                echo $ded_item['deceased_fname'];
				echo $ded_item['deceased_mname'];
				echo $ded_item['deceased_lname'];
				echo $ded_item['deceased_birthdate'];
				echo $ded_item['deceased_deathdate'];
				echo $ded_item['deceased_sex'];
                ?>
        </div>

<br />

<?php endforeach; ?>