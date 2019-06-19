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
			   <tr>
				<td>Country</td>
				<td><?php echo $rows->country; ?></td>
				<td>School Students</td>
				<td><?php echo $rows->no_of_student; ?></td>
			  </tr>
			</table>
	</div>
	
    </div>
</section>
