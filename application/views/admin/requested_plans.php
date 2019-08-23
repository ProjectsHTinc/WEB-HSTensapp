<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	<h4 class="iq-tw-7 iq-mb-20">Requested Plans</h4>
        <div class="col-md-12">
		
	  <table class="table" id="example">
		<thead class="thead-light">
		  <tr>
			<th>Institute Code</th>
			<th>Institute Name</th>
			<th>Contact Person</th>
			<th>Mobile</th>
			<th>Plan Name</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($result as $rows){ ?>
		  <tr>
			<td><a href="<?php echo base_url();?>admin/view_customer/<?php echo base64_encode($rows->inst_id);?>"><?php echo $rows->institute_code; ?></a></td>
			<td><?php echo $rows->institute_name; ?></td>
			<td><?php echo $rows->contact_person; ?></td>
			<td><?php echo $rows->mobile; ?></td>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo $rows->status; ?></td>
			<td><a href="<?php echo base_url();?>admin/assign_plan/<?php echo base64_encode($rows->id);?>">Assign</a> | <a href = "<?php echo base_url();?>admin/delete_request/<?php echo base64_encode($rows->id);?>" onclick="return confirm('Are you sure you want to delete this request?');">Delete</a></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>

        </div>
    </div>
</section>
