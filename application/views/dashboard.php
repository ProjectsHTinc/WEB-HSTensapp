<?php 
	if (count($user_plans)>0){ 
	  foreach($user_plans as $rows){ }
?>
<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
           <table class="table">
	 
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>activated_date</th>
			<th>expiry_date</th>
			<th>Plan Users</th>
			<th>Status</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo date("d-m-Y  h:i:s", strtotime($rows->activated_date)); ?></td>
			<td><?php echo date("d-m-Y  h:i:s", strtotime($rows->expiry_date)); ?></td>
			<td><?php echo $rows->no_of_users; ?></td>
			<td><?php echo $rows->status; ?></td>
		  </tr>	
		  <tr>
			<td colspan='5' align="right"><form method="post" name="customerData"  class="confirm_process" action="<?php echo base_url(); ?>user/change_plan/"><button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Change Plan</button></form></td>
		 </tr>
		</tbody>
	  </table>
		</div>
</div>
</section>
<?php
		  } else {
  ?>
     <section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	
        <div class="row">
		
	  <table class="table">
	  <form id="plans_select_form" method="post" enctype="multipart/form-data">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Plan Pricing</th>
			<th>No.of Users</th>
			<th>Plan Duration</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php $i = 0; foreach($user_inst_plans as $rows){ ?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td>₹ <?php echo $rows->pricing; ?></td>
			<td><?php echo $rows->no_of_users; ?></td>
			<td><?php echo $rows->duration; ?> Years</td>
			<td><input type="radio" name="plan_id" value="<?php echo $rows->id; ?>" <?php if ($i == '0') {?>checked<?php } ?>></td>
		  </tr>
		<?php  $i = $i+1; } ?>
		<tr>
			<td colspan='5' align="right"><button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Purchase</button></td>
		 </tr>
		</tbody></form>
	  </table>

        </div>
    </div>
</section>

		  <?php } ?>
		
		
    
