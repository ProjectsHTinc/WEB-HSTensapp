<?php 
	if (count($purchase_details)>0){ 
	  foreach($purchase_details as $rows){ 
		$plan_id = $rows->plan_id;
		$user_id = $rows->user_id;
	  }
	  $number = '1234567890';
		$randomNumber = '';
		for ($i = 0; $i < 7; $i++) {
			$randomNumber .= $number[rand(0, 7 - 1)];
		}
		$order_id = $randomNumber."-".$user_id;
?>
<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
           <table class="table">
	 
		<thead class="thead-light">
		  <tr>
			<th>Institute Name</th>
			<th>Plan name</th>
			<th>Purchase amount</th>
			<th>Plan Users</th>
			<th>Duration</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td><?php echo $rows->institute_name; ?></td>
			<td><?php echo $rows->plan_name; ?></td>
			<td>₹ <?php echo $rows->purchase_amount; ?></td>
			<td><?php echo $rows->no_of_users; ?></td>
			<td><?php echo $rows->duration; ?> Years</td>
		  </tr>
		</tbody>
	  </table>
	  
	<?php  if( ($plan_id==1 || $plan_id==2 || $plan_id ==3) ) { ?>
		 <form method="post" name="customerData"  class="confirm_process" action="<?php echo base_url(); ?>user/checkout_demo/">
			  <input type="hidden" name="purchase_id" value="<?php echo $rows->id;?>"/>
			  <input type="hidden" name="order_id" value="<?php echo $order_id;?>"/>
			  <input type="submit" value="CheckOut" class="btn btn-primary">
         </form>
	<?php } else { ?>
			<form method="post" name="customerData"  class="confirm_process" action="<?php echo base_url(); ?>ccavenue_web/ccavRequestHandler.php">
				<input type="hidden" name="merchant_id" value="89958"/>
				<input type="hidden" name="order_id" value="<?php echo $order_id;?>"/>
				<input type="hidden" name="amount" value="<?php echo $rows->purchase_amount;?>"/>
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="<?php echo base_url(); ?>ccavenue_web/ccavResponseHandler.php"/>
				<input type="hidden" name="cancel_url" value="<?php echo base_url(); ?>dashboard/"/>
				<input type="hidden" name="language" value="EN"/>
				<input type="submit" value="CheckOut" class="btn btn-primary">
            </form>
<!--
		<form method="post" name="paytm" id='paytm' class="confirm_process" action="https://heylaapp.com/paytm_web/pgRedirect.php">
		<input type="hidden" name="ORDER_ID" value="<?php //echo $order_id;?>"/>
		<input type="hidden" name="CUST_ID" value="123456"/>
		<input type="hidden" name="INDUSTRY_TYPE_ID" value="Retail109"/>
		<input type="hidden" name="CHANNEL_ID" value="WAP"/>
		<input type="hidden" name="TXN_AMOUNT" value="<?php //echo $rows->purchase_amount;?>"/>
		<input type="submit" value="CheckOut" class="btn btn-primary">
	</form>
-->
	<?php } ?>
		</div>
</div>
</section>
 <?php } ?>