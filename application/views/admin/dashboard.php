<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-lg-4 col-md-6">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Demo Plans</h5>
                        <p>Total : <?php echo $result['total_demo']; ?> | Expired : <?php echo $result['total_demo_expiry']; ?> | Live : <?php echo $result['total_demo_live']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 r4-mt-30">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Standard Plans</h5>
                        <p>Total : <?php echo $result['total_standard']; ?> | Assigned : <?php echo $result['total_standard_assigned']; ?> | Expired : <?php echo $result['total_standard_expiry']; ?> | Live : <?php echo $result['total_standard_live']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 r-mt-30">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Advanced Plans</h5>
                        <p>Total : <?php echo $result['total_advanced']; ?> | Assigned : <?php echo $result['total_advanced_assigned']; ?> | Expired : <?php echo $result['total_advanced_expiry']; ?> | Live : <?php echo $result['total_advanced_live']; ?></p>
                    </div>
                </div>
            </div>
            
        
        </div>
		
		<div class="row" style="margin-top:25px;">
			<div class="col-sm-12 col-lg-4 col-md-6">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Requested Institutes</h5>
                        <p><a href="requested_plans">Total : <?php echo $result['total_requested']; ?></a></p>
                    </div>
                </div>
            </div>
			
            <div class="col-sm-12 col-lg-4 col-md-6 r-mt-30">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Registered Institutes</h5>
                        <p><a href="customers">Total : <?php echo $result['total_institutes']; ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-6 r4-mt-30">
                <div class="iq-fancy-box text-center">
                    <div class="fancy-content">
                        <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Upcoming Expiries </h5>
                        <p>With in 15 Days : <?php echo $result['total_expiry']; ?></p>
                    </div>
                </div>
            </div>
        
        </div>
		
    </div>
</section>
