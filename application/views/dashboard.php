<?php 
 if (count($institute_plans)>0){ 
?>
	<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
	<!--<div style="text-align:right;"><a href="renew_plans">Update Plans</a></div>-->
       <div class="row">
		<h4 class="iq-tw-7 iq-mb-20" style="float:right">Plan Details</h4>
		
		<table class="table">
		<thead class="thead-light">
		  <tr>
			<th>Plan Name</th>
			<th>Activated Date</th>
			<th>Expiry Date</th>
			<!--<th>Amount</th>-->
			<th>Status</th>
			<!--<th>Action</th>-->
		  </tr>
		</thead>
		<tbody>
		<?php foreach($institute_plans as $rows){ 
				$status = $rows->status;
		?>
		  <tr>
			<td><?php echo $rows->plan_name; ?></td>
			<td><?php if ($status =='Requested' || $status =='Assigned' || $status =='Success'){ } else { echo date("d-m-Y", strtotime($rows->activated_date)); } ?></td>
			<td><?php if ($status =='Requested' || $status =='Assigned' || $status =='Success'){ } else { echo date("d-m-Y", strtotime($rows->expiry_date)); } ?></td>
			<!--<td><?php if ($status =='Requested' || $status =='Assigned'){ } else { echo $rows->purchase_amount; } ?></td>-->
			<td><?php echo $rows->status; ?> </td>
			<!--<td><?php 
				if ($status == 'Assigned'){ ?> 
				<a href = "<?php echo base_url();?>user/payment_review/<?php echo base64_encode($rows->id);?>">Make Payment</a> 
				<?php } else if ($status == 'Success') { ?>
				<a href = "<?php echo base_url();?>user/activate_plan/<?php echo base64_encode($rows->id);?>" onclick="return confirm('Are you sure you want to activate this Plan?');">Activate</a> 
				<?php } ?>
				</td>-->
		  </tr>
		<?php } ?>
		</tbody>
	  </table>
		
		
        </div>
    </div>
</section>
	
<?php } else { ?>

	<section id="pricing" class="overview-block-ptb grey-bg iq-price-table"  style="padding-top:150px;">
		<div class="container">
			<div class="row">
			
<?php
	if (count($master_plans)>0){ 
		foreach($master_plans as $rows){ 
			 $master_plan_id = $rows->id; 
			 $master_plan_name = $rows->plan_name;

	if ($master_plan_id == 1){
		$form_id = "demo_request";
	} else if ($master_plan_id == 2){
		$form_id = "standard_request";
	}else {
		$form_id = "advance_request";
	}
?>
				<div class="col-md-4 col-lg-4">	
				<form id="<?php echo $form_id; ?>" method="post" action="" enctype="multipart/form-data">
					<div class="iq-pricing pricing-02 text-center">
						<div class="price-title iq-parallax iq-over-blue-80" data-jarallax="{&quot;speed&quot;: 0.6}" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; z-index: 0;" data-jarallax-original-styles="background: url(images/bg/08.jpg);">
							<h2 class="iq-font-white iq-tw-7 text-uppercase"><?php echo $master_plan_name; ?></h2>
						<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;" id="jarallax-container-1"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://localhost/ensapp/images/bg/08.jpg&quot;); position: fixed; top: 0px; left: 105.5px; width: 358px; height: 251.3px; overflow: hidden; pointer-events: none; margin-top: 67.35px; transform: translate3d(0px, -8.13px, 0px);"></div></div></div>
						
						<div class="price-footer">
							<input type="hidden" name="master_plan_id" id="master_plan_id" value="<?php echo $master_plan_id; ?>">
							<input type="submit" class="button" value="Request">
						</div>
					</div>
					</form>
				</div>
				
<?php
		}
	}
?>

			</div>
		</div>
	</section>	
	
<?php } ?>


	
		
 	