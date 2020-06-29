<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
<form id="customer_update_form" name="customer_update_form" method="post" action="" enctype="multipart/form-data">
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
			  <tr>
				<td></td>
				<td></td>
				<td>Status</td>
				<td> 
					<select name="status">
					  <option value="">Select</option>
					  <option value="Active">Active</option>
					  <option value="Deactive">Inactive</option>
					</select><script language="JavaScript">document.customer_update_form.status.value="<?php echo $rows->cust_status; ?>";</script>
					</td>
			  </tr>
			  <tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<input type = "hidden" name="customer_id" value="<?php echo $rows->id; ?>">
					<input type = "hidden" name="mobile_number" value="<?php echo $rows->mobile; ?>">
					<button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Save</button>
				</td>
			  </tr>
			</table>
			
	</div>
	
    </div>
	</form>
</section>
