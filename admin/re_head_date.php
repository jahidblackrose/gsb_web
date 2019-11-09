	<?php
	
	
	$date_head = new DateTime(null, new DateTimeZone('ASIA/Dhaka'));
	$date_head=$date_head->format('d F Y');
	$date_head=trim($date_head);
	
	?>
    

    		<div class="right">
				<div class="align-right">
					<p>Date: <strong></strong><?php echo $date_head ; //  echo  $date('m-d-Y') ; ?></strong>

					
					</p>
				</div>
			</div>
