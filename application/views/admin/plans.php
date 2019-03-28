<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	     <h4 class="iq-tw-7 iq-mb-20">Plans</h4>
        <div class="row">
    <div class="col-md-12">
	  <table class="table" id="example">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Plan Pricing</th>
			<th>No.of Users</th>
			<th>Plan Type</th>
			<th>Status</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($result as $rows){ ?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo $rows->pricing; ?></td>
			<td><?php echo $rows->no_of_users; ?></td>
			<td><?php echo $rows->type_name; ?></td>
			<td><?php echo $rows->status; ?></td>
			<td><a href="<?php echo base_url();?>admin/edit_plan/<?php echo base64_encode($rows->id);?>">Edit</a></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
  </div>
        </div>
    </div>
</section>
