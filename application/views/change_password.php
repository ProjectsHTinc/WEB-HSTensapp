<?php foreach($user_details as $rows){ }?>

<section id="contact-us" class="footer-info white-bg" style="margin-top:100px;">
    <div class="container" style="min-height:450px;">
        <div class="row justify-content-center" id="first_form">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Change Password</h4>
                    <form id="passwordform"  method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
                            <div class="section-field">
                                <input class=" " id="new_password" type="text" placeholder="Enter New Password*" name="new_password">
                            </div>
                            <div class="section-field">
                                <input class="" id="confirm_password" type="password" placeholder="Confirm New Password*" name="confirm_password">
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
