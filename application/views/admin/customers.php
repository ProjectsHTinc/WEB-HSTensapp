<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	<h4 class="iq-tw-7 iq-mb-20">Customers</h4>
        <div class="row">
		
	  <table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Institute Code</th>
			<th>Institute Name</th>
			<th>Contact Person</th>
			<th>Mobile</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($result as $rows){ ?>
		  <tr>
			<td><?php echo $rows->institute_code; ?></td>
			<td><?php echo $rows->institute_name; ?></td>
			<td><?php echo $rows->contact_person; ?></td>
			<td><?php echo $rows->mobile; ?></td>
			<td><?php echo $rows->status; ?></td>
			<td><a href="<?php echo base_url();?>admin/view_customer/<?php echo base64_encode($rows->id);?>">View</a> | <a href="<?php echo base_url();?>admin/edit_customer/<?php echo base64_encode($rows->id);?>">Edit</a></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>

        </div>
    </div>
</section>
