<?php 
	if (count($user_purchased_plans)>0){ 
		foreach($user_purchased_plans as $rows){  
			$old_plan_id = $rows->plan_id; 
		}
	} else {
		    $old_plan_id = "";
	}
?>
 	<section id="pricing" class="overview-block-ptb grey-bg iq-price-table" style="padding-top:150px;">
		<form id="plans_select_form" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">

					<?php $i = 0; foreach($inst_plans as $rows){ ?>

                    <div class="col-md-3 col-lg-3 wow flipInY r4-mt-30" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: flipInY;">
                        <div class="iq-pricing pricing-02 text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax="{&quot;speed&quot;: 0.6}" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; z-index: 0;" data-jarallax-original-styles="background: url(images/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>₹</small> <?php echo $rows->pricing; ?><small></small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white"><?php echo $rows->plan_name; ?></span>
                            <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;" id="jarallax-container-2"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;http://localhost/ensapp/images/bg/08.jpg&quot;); position: fixed; top: 0px; left: 495.5px; width: 358px; height: 220.9px; overflow: hidden; pointer-events: none; margin-top: 43.05px; transform: translate3d(0px, 86.97px, 0px);"></div></div></div>
                            <ul>
                                <li><?php echo $rows->no_of_users; ?> Users</li>
                                <li><?php echo $rows->duration; ?> Years</li>
                            </ul>
                            <div class="price-footer">
								<?php if ($old_plan_id != $rows->id) { ?>
								<input type="radio" name="plan_id" value="<?php echo $rows->id; ?>" <?php if ($i == '0') {?><?php } ?>>
								<?php } ?>
                            </div>
                        </div>
                    </div>
					
					<?php $i = $i+1;  } ?>
                </div>
				<?php if ($old_plan_id !="") { ?>
					<button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15" style="float:right;">Change Plan</button>
				<?php } else { ?>
					<button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15" style="float:right;">Purchase</button>
				<?php }  ?>
            </div></form>
        </section>    