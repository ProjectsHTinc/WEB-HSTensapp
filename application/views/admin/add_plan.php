<section class="overview-block-ptb grey-bg" style="margin-top:50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Plan Details</h4>
                    <form id="plan_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">                          
                            <div class="section-field">
                              <select name="institute_type" >
                                  <option value="">Select Insitute Type</option>
                                  <option value="1">School</option>
                                  <option value="2">College</option>
                                  <option value="3">PIA</option>
                                </select>
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
                                <input class=" " id="plan_name" type="text" placeholder="Plan Name *" name="plan_name">
                            </div>
                            <div class="section-field">
                                <input class="" id="no_of_users" type="text" placeholder="Number of Users *" name="no_of_users">
                            </div>
                            
                            <div class="section-field">
                                <input class="" id="pricing" type="text" placeholder="Plan Pricing*" name="pricing">
                            </div>
							<div class="section-field">
                                <input class="" id="discount" type="text" placeholder="Discount Price" name="discount">
                            </div>
							 <div class="section-field">
                                <textarea class="" id="notes" type="text" rows="6" cols="6" placeholder="Add Notes" name="notes"></textarea>
                            </div>
                            
                            <button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Save</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
