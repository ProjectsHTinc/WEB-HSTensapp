	<section id="pricing" class="overview-block-ptb grey-bg iq-price-table"  style="padding-top:150px;">
		<div class="container">
			<div class="row">
<?php
	if (count($renew_plans)>0){ 
		foreach($renew_plans as $rows){ 
			 $master_plan_id = $rows->id; 
			 $master_plan_name = $rows->plan_name;
			 $inst_master_plan_id = $rows->master_plan_id;
			 $institute_plan_id = $rows->institute_plan_id;

			if ($master_plan_id == 2){
				$form_id = "renew_standard_request";
			}else {
				$form_id = "renew_advance_request";
			}
			
			if ($master_plan_id!=1) {
?>
				<div class="col-md-4 col-lg-4">
				<form id="<?php echo $form_id; ?>" method="post" action="" enctype="multipart/form-data">
					<div class="iq-pricing pricing-02 text-center">
						<div class="price-title iq-parallax iq-over-blue-80" data-jarallax="{&quot;speed&quot;: 0.6}" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; z-index: 0;" data-jarallax-original-styles="background: url(images/bg/08.jpg);">
							<h2 class="iq-font-white iq-tw-7 text-uppercase"><?php echo $master_plan_name; ?></h2>
						<div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;" id="jarallax-container-1"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://localhost/ensapp/images/bg/08.jpg&quot;); position: fixed; top: 0px; left: 105.5px; width: 358px; height: 251.3px; overflow: hidden; pointer-events: none; margin-top: 67.35px; transform: translate3d(0px, -8.13px, 0px);"></div></div></div>
						
						<div class="price-footer">
							<input type="hidden" name="master_plan_id" id="master_plan_id" value="<?php echo $master_plan_id; ?>">

				<?php if ($inst_master_plan_id !='') { ?>
							<input type="hidden" name="institute_plan_id" id="institute_plan_id" value="<?php echo $institute_plan_id; ?>">
							<input type="hidden" name="renew_type" id="renew_type" value="Renew">
							<input type="submit" class="button" value="Renew">
							
				<?php } else { ?>
							<input type="hidden" name="institute_plan_id" id="institute_plan_id" value="">
							<input type="hidden" name="renew_type" id="renew_type" value="New">
							<input type="submit" class="button" value="Request">
				<?php } ?>
						</div>
					</div>
					</form>
				</div>
			<?php } ?>
<?php
		}
	}
?>
			</div>
		</div>
	</section>