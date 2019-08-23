<?php foreach($user_details as $rows){ }?>

<section id="contact-us" class="footer-info white-bg" style="margin-top:100px;">
    <div class="container">
        <div class="row justify-content-center" id="first_form">
            <div class="col-md-6 col-lg-4">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Profile Update</h4>
                    <form id="updateform"  method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
                            <div class="section-field">
                                <input class=" " id="inst_name" type="text" placeholder="Institute name*" name="inst_name" value="<?php echo $rows->institute_name; ?>">
                            </div>
                            <div class="section-field">
                                <input class="" id="email" type="email" placeholder="Email*" name="email" value="<?php echo $rows->email; ?>">
                            </div>
                            <div class="section-field">
                                <input class="" id="phone" type="text" placeholder="Phone*" name="phone" value="<?php echo $rows->mobile; ?>">
                            </div>
							<div class="section-field">
                                <input class="" id="contact_person" type="text" placeholder="Contact Person*" name="contact_person" value="<?php echo $rows->contact_person; ?>">
                            </div>
                            <div class="section-field">
                                <input class="" id="person_designation" type="text" placeholder="Person Designation*" name="person_designation" value="<?php echo $rows->person_designation; ?>">
                            </div>
							<input type="hidden" name ="user_id" id="user_id" value="<?php echo $rows->id; ?>">
                            <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Update</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</section>
