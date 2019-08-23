
<?php 
	if (count($payment_details)>0){ 
	
	  foreach($payment_details as $rows){ 
	    $plan_history_id = $rows->id;
		$institute_master_id = $rows->institute_master_id;
		$institute_name = $rows->institute_name;
		$no_of_users = $rows->no_of_users;
		$plan_duration = $rows->plan_duration;
		$pricing = $rows->pricing;
		$plan_name = $rows->plan_name;
	  }
	  $number = '1234567890';
		$randomNumber = '';
		for ($i = 0; $i < 7; $i++) {
			$randomNumber .= $number[rand(0, 7 - 1)];
		}
		$order_id = $randomNumber."-".$institute_master_id."-".$plan_history_id;
	}
?>

<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
		<h4 class="iq-tw-7 iq-mb-20">Payment Review</h4>
		<table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Institute Name</th>
			<th><?php echo $institute_name; ?></th>
		  </tr>
		   <tr>
			<th>Plan Name</th>
			<th><?php echo $plan_name; ?></th>
		  </tr>
		  <tr>
			<th>No. of Users</th>
			<th><?php echo $no_of_users; ?></th>
		  </tr>
		  <tr>
			<th>Plan Duration</th>
			<th><?php echo $plan_duration; ?> Year[s]</th>
		  </tr>
		  <tr>
			<th>Plan Price</th>
			<th>&#8377;<?php echo $pricing; ?> </th>
		  </tr>
		  <tr>
			<th></th>
		    <th><form method="post" name="customerData"  class="confirm_process" action="<?php echo base_url(); ?>ccavenue_web/ccavRequestHandler.php">
				<input type="hidden" name="merchant_id" value="216134"/>
				<input type="hidden" name="order_id" value="<?php echo $order_id;?>"/>
				<input type="hidden" name="purchase_id" value="<?php echo $plan_history_id;?>"/>
				<input type="hidden" name="amount" value="<?php echo $pricing;?>"/>
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="<?php echo base_url(); ?>ccavenue_web/ccavResponseHandler.php"/>
				<input type="hidden" name="cancel_url" value="<?php echo base_url(); ?>dashboard/"/>
				<input type="hidden" name="language" value="EN"/>
				<input type="submit" value="CheckOut" class="btn btn-primary">
            </form></th>
	      </tr>
		</thead>
		
	  </table>
		 
		</div>        
  </div>
</section>
