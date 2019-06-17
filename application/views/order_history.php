<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
		 
		<h4 class="iq-tw-7 iq-mb-20">Order History</h4>
		<table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Purchase Date</th>
			<th>Purchase Amount</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($order_history as $rows){ 
		$enc_order_id = base64_encode($rows->purchase_order_id);
		$enc_id = base64_encode($rows->id);
		$status = $rows->status;
		?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo date("d-m-Y", strtotime($rows->purchase_date)); ?></td>
			<td><?php echo $rows->purchase_amount ; ?></td>
			<td><?php if ($status == 'Success'){ ?> <a href="<?php echo base_url(); ?>user/payment_details/<?php echo $enc_order_id; ?>">Success <?php }  else { echo $status;  } ?></a></td>
			<td><?php if ($status == 'Pending'){ ?> <a href="<?php echo base_url(); ?>user/purchase_plan/<?php echo $enc_id; ?>">Make Payment <?php } ?></a></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
		 
		</div>        
  </div>
</section>
