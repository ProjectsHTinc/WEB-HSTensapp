<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
		 
		<h4 class="iq-tw-7 iq-mb-20">Plan History</h4>
		<table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Status</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($plan_history as $rows){ 
			$enc_id = base64_encode($rows->id);
			$status = $rows->status;
		?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo $status; ?></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
		 
		</div>        
  </div>
</section>
