<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Plan Details</h4>
                    <form id="edit_plan_form" name="edit_plan_form" method="post" action="" enctype="multipart/form-data">
					<?php foreach($plan_details as $rows){}?>
                        <div class="contact-form">                          
                            <div class="section-field">
                              <select name="institute_type" >
                                  <option value="">Select Insitute Type</option>
                                  <option value="1">School</option>
                                  <option value="2">College</option>
                                  <option value="3">PIA</option>
                                </select>
								<script language="JavaScript">document.edit_plan_form.institute_type.value="<?php echo $rows->plan_type ; ?>";</script>
                            </div>
							<div class="section-field">
							 <select name="duration" >
                                  <option value="">Select Plan Duration</option>
								  <option value="0">Demo Plan</option>
                                  <option value="1">One Year</option>
                                  <option value="2">Two Years</option>
                                  <option value="3">Three Years</option>
								  <option value="4">Four Years</option>
								  <option value="5">Five Years</option>
                                </select>
								<script language="JavaScript">document.edit_plan_form.duration.value="<?php echo $rows->duration  ; ?>";</script>
                            </div>
							 <div class="section-field">
                                <input class=" " id="plan_name" type="text" placeholder="Plan Name *" name="plan_name" value="<?php echo $rows->plan_name ; ?>">
                            </div>
                            <div class="section-field">
                                <input class="" id="no_of_users" type="text" placeholder="Number of Users *" name="no_of_users" value="<?php echo $rows->no_of_users ; ?>">
                            </div>
                            
                            <div class="section-field">
                                <input class="" id="pricing" type="text" placeholder="Plan Pricing*" name="pricing" value="<?php echo $rows->pricing ; ?>">
                            </div>
							<div class="section-field">
                                <input class="" id="discount" type="text" placeholder="Discount Price" name="discount">
                            </div>
							 <div class="section-field">
                                <textarea class="" id="notes" type="text" rows="6" cols="6" placeholder="Add Notes" name="notes"><?php echo $rows->notes ; ?></textarea>
                            </div>
							 <div class="section-field">
                                <select name="status" >
                                  <option value="Active">Active</option>
                                  <option value="Inactive">Inactive</option>
                                </select>
								<script language="JavaScript">document.edit_plan_form.status.value="<?php echo $rows->status; ?>";</script>
                            </div>
                            <input type="hidden" name="plan_id" value="<?php echo $rows->id; ?>" >
                            <button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
