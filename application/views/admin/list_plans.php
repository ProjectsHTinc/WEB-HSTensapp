<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	<h4 class="iq-tw-7 iq-mb-20">Institute Plans</h4>
        <div class="col-md-12">
		
	  <table class="table" id="example">
		<thead class="thead-light">
		  <tr>
			<th>Institute Name</th>
			<th>Plan Name</th>
			<th>Purchase amount</th>
			<th>Start Date</th>
			<th>Expiry Date</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($result as $rows){ ?>
		  <tr>
			<td><?php echo $rows->institute_name; ?></td>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo $rows->purchase_amount; ?></td>
			<td><?php echo $rows->activated_date; ?></td>
			<td><?php echo $rows->expiry_date; ?></td>
			<td><?php echo $rows->status; ?></td>
			<td><a href="<?php echo base_url();?>admin/edit_plan/<?php echo base64_encode($rows->id);?>">Edit</a></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>

        </div>
    </div>
</section>
