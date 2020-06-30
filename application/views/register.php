<section id="contact-us" class="footer-info white-bg" style="margin-top:100px;">
    <div class="container">
        <div class="row justify-content-center" id="first_form">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Register</h4>
                    <form id="registerform" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
                            <!-- <div class="section-field">
                                <input class=" " id="name" type="text" placeholder="Name*" name="name">
                            </div>
                            <div class="section-field">
                                <input class="" id="username" type="text" placeholder="username*" name="username">
                            </div> -->

                            <div class="section-field">
                                <input class="" id="email" type="email" placeholder="Email*" name="email">
                            </div>
                            <div class="section-field">
                                <input class="" id="phone" type="text" placeholder="Phone*" name="phone">
                            </div>
                            <div class="section-field">
                                <input class="" id="password" type="password" placeholder="Password*" name="password">
                            </div>

                            <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Register</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="otp_section">
            <div class="col-md-6 col-lg-4">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Mobile verification</h4>
                    <form id="mobile_otp_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
                            <div class="section-field">
                                <input class=" " id="name" type="text" placeholder="Enter the OTP*" name="otp">
                                <input  id="last_insert" type="hidden" name="last_insert" value="">
                            </div>
                          <!-- <span id="count">10</span> seconds... <span><a onclick="resend_otp()" id="resent_btn">Resend OTP</a></span></p> -->
                            <div class="section-field">
                                <p id="res"></p>
                            </div>
                            <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Submit OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <center><img src="<?php echo base_url(); ?>assets/loader.gif" id="loading"></center>
          <div class="container">
        <div class="row justify-content-center" id="ins_details">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Institute Details</h4>
                    <form id="ins_detail_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
                          <div class="section-field">
                              <!--<input class=" " id="institute_code" type="text" placeholder="Institute Code" name="institute_code">-->
                              <input  id="last_insert_id" type="hidden" name="last_insert" value="">
                          </div>
                            <div class="section-field">
                                <input class=" " id="institute_name" type="text" placeholder="Institute Name*" name="institute_name">
                            </div>
                            <div class="section-field">
                              <select name="institute_type" >
                                  <option value="">Select Insitute Type</option>
                                  <option value="1">School</option>
                                  <option value="2">College</option>
                                  <option value="3">PIA</option>
                                </select>
                            </div>
                            <div class="section-field">
                                <input class="" id="contact_person" type="text" placeholder="Contact Person*" name="contact_person">
                            </div>
                            <div class="section-field">
                                <input class="" id="person_designation" type="text" placeholder="Person Designation*" name="person_designation">
                            </div>
                            <div class="section-field">
                                <input class="" id="city" type="text" placeholder="City*" name="city">
                            </div>
                            <div class="section-field">
                                <input class="" id="state" type="text" placeholder="State*" name="state">
                            </div>
                            <div class="section-field">
                                <input class="" id="no_of_student" type="text" placeholder="No Of Students" name="no_of_student">
                            </div>
                            <div class="section-field">
                                <input class="" id="how_you_hear" type="text" placeholder="How You Hear us.." name="how_you_hear">
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
  </div>

</section>
<style>
#ins_details{
  display: none;
}
#otp_section{
  display: none;
}
#loading{
  display: none;
}
#resent_btn{
  display: none;
}
</style>
