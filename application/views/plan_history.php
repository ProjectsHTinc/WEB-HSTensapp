<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
       <div class="row">
		
		<h4 class="iq-tw-7 iq-mb-20">Plan Details</h4>
		 <table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Activated Date</th>
			<th>Expiry Date</th>
			<th>Status</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($plan_details as $rows){ ?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php echo date("d-m-Y", strtotime($rows->activated_date)); ?></td>
			<td><?php echo date("d-m-Y", strtotime($rows->expiry_date)); ?></td>
			<td><?php echo $rows->status ; ?></td>
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
		
		
        </div>
    </div>
</section>
