<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Assign Plan</h4>
                    
					<?php 
					if (count($plan_details)>0){ 
						foreach($plan_details as $rows){}
					?>
						<form id="assign_plan_form" name="assign_plan_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">                          
                            <div class="section-field">
                                <input class=" " id="institute_name" type="text" placeholder="Plan Name *" name="institute_name" value="<?php echo $rows->institute_name ; ?>" disabled>
                            </div>
							 <div class="section-field">
                                <input class=" " id="plan_name" type="text" placeholder="Plan Name *" name="plan_name" value="<?php echo $rows->plan_name; ?>" disabled>
                            </div>
							<div class="section-field">
							 <select name="duration" >
                                  <option value="">Select Plan Duration</option>
                                  <option value="1">One Year</option>
                                  <option value="2">Two Years</option>
                                  <option value="3">Three Years</option>
								  <option value="4">Four Years</option>
								  <option value="5">Five Years</option>
                                </select>
                            </div>							
                            <div class="section-field">
                                <input class="" id="no_of_users" type="text" placeholder="Number of Users *" name="no_of_users" value="">
                            </div>
                            
                            <div class="section-field">
                                <input class="" id="pricing" type="text" placeholder="Plan Pricing*" name="pricing" value="">
                            </div>
							 <div class="section-field">
                                <textarea class="" id="notes" type="text" rows="6" cols="6" placeholder="Add Notes" name="notes"></textarea>
                            </div>
                            <input type="hidden" name="plan_id" value="<?php echo $rows->id; ?>" >
                            <button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Save</button>
                        </div>
                    </form>
					
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
