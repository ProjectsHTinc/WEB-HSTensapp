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

    <div class="container" style="margin-top:20px;">
        <div class="row" id="total_data"></div>
        <div class="row" id="total_year_data" style="margin-top:20px;">
          <h6>Student Count based on Year</h6>
          <table class="table" id="" style="    border: 1px solid #e9ecef;">
          <thead class="thead-light">
            <tr>
            <th>S.  No</th>
            <th>From Year</th>
            <th>To Year</th>
            <th>Total</th>
            </tr>
          </thead>
          <tbody id="t_total_year">

          </tbody>
          </table>
        </div>
    </div>
</section>
<style>
.fntsize{
  font-size: 20px;
  font-weight: 600;
}
#total_year_data{
  display: none;
}

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
           dataType: 'json',
         success: function(response) {
           // alert(response.status);
             $("#total_data").empty();
            $("#t_total_year").empty();
           var total_data=response.total_count;
           var total_year=response.year_based_count;
           if(total_data.status=='success'){
             var total_length=total_data.user_data.length;
             for (j = 0; j < total_length; j++) {
               var user_list=total_data.user_data;


                 // console.log(total_data.user_data[i]['user_type_name']);
             // $('#total_data').html('<div class="col">'.total_length[i].user_type_name.'</div>');
             // $('#total_data').append('<div class="col">'+total_data.user_data[i]['user_type_name']+'</div>');
             $('#total_data').append('<div class="col"><div class="iq-fancy-box text-center"><h5 class="iq-tw-6 iq-pt-20 iq-pb-10">'+total_data.user_data[j]['user_type_name']+'</h5><div class="iq-icon fntsize">'+total_data.user_data[j]['user_count']+'</div></div></div>');
             }
             if(total_year.status=='success'){
               $('#total_year_data').show();
               var total_year_length=total_year.year_stu_count.length;
               var t=1;
               for (k = 0; k < total_year_length; k++) {
                 var year_list=total_year.year_stu_count;
                 $('#t_total_year').append('<tr><td>'+t+'</td><td>'+total_year.year_stu_count[k]['from_year']+'</td><td>'+total_year.year_stu_count[k]['to_year']+'</td><td>'+total_year.year_stu_count[k]['student']+'</td></tr>');
                 t++;
               }

             }

           }else{

           }



         }
     });


}
});

</script>
