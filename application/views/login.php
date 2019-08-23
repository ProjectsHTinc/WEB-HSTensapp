<section id="contact-us" class="footer-info white-bg" style="margin-top:100px;">
    <div class="container">
        <div class="row justify-content-center" id="login_section">
			
			<div class="col-md-6 col-lg-4">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Customer Login</h4>
                    <form id="login_form" method="post" enctype="multipart/form-data">
                        <div class="contact-form">

                            <div class="section-field">
                                <input class="require" id="email" type="text" placeholder="Mobile or Email*" name="email">
                            </div>
                            <div class="section-field">
                                <input class="require" id="contact_name" type="password" placeholder="Password*" name="password">
                            </div>
                            <div class="section-field">
                                <p id="res"></p>
                            </div>
                            <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Login</button>
                        </div>
                    </form>
                </div>
            </div>

			<div class="col-md-6 col-lg-4">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">School Login</h4>
                    <form id="sch_login_form" method="post" enctype="multipart/form-data">
                        <div class="contact-form">

                            <div class="section-field">
                                <input class="require" id="school_id" type="text" placeholder="School Code*" name="school_id">
                            </div>
                            <div class="section-field">
                                <p id="sch_res"></p>
                            </div>
                            <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		
		
        <div class="row justify-content-center" id="ins_details">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Institute Details</h4>
                    <form id="ins_detail_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
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
                                <textarea class="" id="notes" type="text" rows="6" cols="6" placeholder="Add Notes" name="notes"></textarea></div>
								<input  id="last_insert" type="hidden" name="last_insert" value="">
                            <button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Save</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<style>
#ins_details{
  display: none;
}
#loading{
  display: none;
}
</style>
