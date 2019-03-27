<?php 
	//if (count($user_plan_history)>0){ 
	 // foreach($user_plan_history as $rows){ 
		//$plan_id = $rows->plan_id;
	  //}
?>
<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
		<div class="row">
           <table class="table">
	  <form id="plans_update_form" method="post" enctype="multipart/form-data">
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
		<?php foreach($user_plan_history as $rows){ ?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td>₹ <?php echo $rows->pricing; ?></td>
			<td><?php echo $rows->no_of_users; ?></td>
			<td><?php echo $rows->duration; ?> Years</td>
			<td><input type="radio" name="plan_id" value="<?php echo $rows->id; ?>"></td>
		  </tr>
		<?php  } ?>
		<tr>
			<td colspan='5' align="right"><button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Purchase</button></td>
		 </tr>
		</tbody></form>
	  </table>
	 
		</div>
</div>
</section>
 <?php //} ?>