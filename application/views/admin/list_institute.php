<section class="overview-block-ptb grey-bg" style="margin-top:10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="iq-get-in">
                    <h4 class="iq-tw-7 iq-mb-20">Institute list</h4>
						              <form id="ins_form" name="ins_form" method="post" action="" enctype="multipart/form-data">
                        <div class="contact-form">
							           <div class="section-field">
							                    <select name="ins_code" id="ins_sel">

                                </select>
                            </div>
                            <button id="Save" name="submit" type="submit" value="Send" class="button iq-mt-15">Check</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>

</style>
<script>
$(document).ready(function() {
  get_ins_list();
});

function get_ins_list(){
  $.ajax({
    type: 'GET',
    url: '<?php echo base_url(); ?>metrics/list_institute',
    dataType: 'json',
    success: function (data) {
      console.log(data);
       $("#ins_sel").empty();
      if(data.status=='success'){
        var res=data.userData;
       var len=res.length;
        for (i = 0; i < len; i++) {
        $('<option>').val(res[i].institute_code).text(res[i].institute_name).appendTo('#ins_sel');
        }
      }else{
        $("#ins_sel").empty();

      }
    }
});
}


$('#ins_form').validate({ // initialize the plugin
  rules: {
      ins_code:{required:true }
  },
  messages: {
        ins_code: "Select Institute"
      },
    submitHandler: function(form) {
     $.ajax({
         url: "<?php echo base_url(); ?>metrics/list_staff",
          type:'POST',
         data: $('#ins_form').serialize(),
         success: function(response) {
           alert(response);

         }
     });


}
});

</script>
