<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">

       <div class="row">
		   <h4 class="iq-tw-7 iq-mb-20">Customer Details</h4>
			<?php foreach($customer_details as $rows){ } ?>
			<table  class="table" id="example">
			  <tr>
				<td>Inst. Code</td>
				<td><?php echo $rows->institute_code; ?></td>
				<td>Inst. Name</td>
				<td><?php echo $rows->institute_name; ?></td>
			  </tr>
			  <tr>
				<td>Contact Person</td>
				<td><?php echo $rows->contact_person; ?></td>
				<td>Phone</td>
				<td><?php echo $rows->mobile; ?> [<?php echo $rows->mobile_verify; ?>]</td>
			  </tr>
			  <tr>
				<td>Email</td>
				<td><?php echo $rows->email; ?> [<?php echo $rows->email_verify; ?>]</td>
				<td>Destination</td>
				<td><?php echo $rows->person_designation; ?></td>
			  </tr>
			  <tr>
				<td>City</td>
				<td><?php echo $rows->city; ?></td>
				<td>State</td>
				<td><?php echo $rows->state; ?></td>
			  </tr>
			</table>
	</div>
	<div class="row" style="margin-top:30px;">
		<h4 class="iq-tw-7 iq-mb-20">Plan Details</h4>
		 <table class="table" id="example">
		
		 <thead class="thead-light">
			<th>Plan Name</th>
			<th>Activated Date</th>
			<th>Expiry Date</th>
			<th>Status</th>
		  </th>
		</thead>
		<tbody style="background:#ffffff;">
		<?php foreach($plan_details as $rows){ ?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo $rows->activated_date; ?></td>
			<td><?php echo $rows->expiry_date; ?></td>
			<td><?php echo $rows->status ; ?></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
	  </div>
	  
    </div>
</section>
