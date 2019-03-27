$(document).ready(function() {
    jQuery("#load").fadeOut();
    jQuery("#loading").delay(0).fadeOut("slow");
    $('#back-to-top').fadeOut();
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 250) {
            $('#back-to-top').fadeIn(1400);
        } else {
            $('#back-to-top').fadeOut(400);
        }
    });
    $('#top').on('click', function() {
        $('top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $(".navbar a").on("click", function(event) {
        $(".navbar-collapse").collapse('hide');
    });
    $('.iq-accordion .iq-ad-block .ad-details').hide();
    $('.iq-accordion .iq-ad-block:first').addClass('ad-active').children().slideDown('slow');
    $('.iq-accordion .iq-ad-block').on("click", function() {
        if ($(this).children('div').is(':hidden')) {
            $('.iq-accordion .iq-ad-block').removeClass('ad-active').children('div').slideUp('slow');
            $(this).toggleClass('ad-active').children('div').slideDown('slow');
        }
    });
    $('.navbar-nav li a').on('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 0
        }, 1500);
        e.preventDefault();
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });
    $('#iq-amazing-tab').on('click', 'a', function() {
        $('#iq-amazing-tab  li a.active1').removeClass('active1');
        $(this).addClass('active1');
    });
    var mySkrollr = skrollr.init({
        forceHeight: false,
        easings: {
            easeOutBack: function(p, s) {
                s = 1.70158;
                p = p - 1;
                return (p * p * ((s + 1) * p + s) + 1);
            }
        },
        mobileCheck: function() {
            return false;
        }
    });
    $('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        tLoading: 'Loading image #%curr%...',
        type: 'image',
        mainClass: 'mfp-img-mobile',
        gallery: {
            navigateByImgClick: true,
            enabled: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        disableOn: 700,
        mainClass: 'mfp-fade',
        preloader: false,
        removalDelay: 160,
        fixedContentPos: false
    });
    $('#countdown').countdown({
        date: '10/01/2019 23:59:59',
        day: 'Day',
        days: 'Days'
    });
    $('.iq-progress-bar > span').each(function() {
        var $this = $(this);
        var width = $(this).data('percent');
        $this.css({
            'transition': 'width 2s'
        });
        setTimeout(function() {
            $this.appear(function() {
                $this.css('width', width + '%');
            });
        }, 500);
    });
    $('.iq-widget-menu > ul > li > a').on('click', function() {
        var checkElement = $(this).next();
        $('.iq-widget-menu li').removeClass('active');
        $(this).closest('li').addClass('active');
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            $(this).closest('li').removeClass('active');
            checkElement.slideUp('normal');
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('.iq-widget-menu ul ul:visible').slideUp('normal');
            checkElement.slideDown('normal');
        }
        if ($(this).closest('li').find('ul').children().length === 0) {
            return true;
        } else {
            return false;
        }
    });
    $('.timer').countTo();
    $(window).on('scroll', function(e) {
        if ($('#how-it-works').length && $('#great-screenshots').length) {
            if ($(this).scrollTop() >= ($('#how-it-works').offset().top - 2000)) {
                $('#great-screenshots ul li').children('a[aria-selected=true]').addClass('active');
                e.preventDefault();
            }
        }
    });
    var slide = $('.slider-single');
    var slideTotal = slide.length - 1;
    var slideCurrent = -1;

    function slideInitial() {
        slide.addClass('proactivede');
        setTimeout(function() {
            slideRight();
        }, 500);
    }

    function slideRight() {
        if (slideCurrent < slideTotal) {
            slideCurrent++;
        } else {
            slideCurrent = 0;
        }
        if (slideCurrent > 0) {
            var preactiveSlide = slide.eq(slideCurrent - 1);
        } else {
            var preactiveSlide = slide.eq(slideTotal);
        }
        var activeSlide = slide.eq(slideCurrent);
        if (slideCurrent < slideTotal) {
            var proactiveSlide = slide.eq(slideCurrent + 1);
        } else {
            var proactiveSlide = slide.eq(0);
        }
        slide.each(function() {
            var thisSlide = $(this);
            if (thisSlide.hasClass('preactivede')) {
                thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
            }
            if (thisSlide.hasClass('preactive')) {
                thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
            }
        });
        preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
        activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
        proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
    }

    function slideLeft() {
        if (slideCurrent > 0) {
            slideCurrent--;
        } else {
            slideCurrent = slideTotal;
        }
        if (slideCurrent < slideTotal) {
            var proactiveSlide = slide.eq(slideCurrent + 1);
        } else {
            var proactiveSlide = slide.eq(0);
        }
        var activeSlide = slide.eq(slideCurrent);
        if (slideCurrent > 0) {
            var preactiveSlide = slide.eq(slideCurrent - 1);
        } else {
            var preactiveSlide = slide.eq(slideTotal);
        }
        slide.each(function() {
            var thisSlide = $(this);
            if (thisSlide.hasClass('proactivede')) {
                thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
            }
            if (thisSlide.hasClass('proactive')) {
                thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
            }
        });
        preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
        activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
        proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
    }
    var left = $('.slider-left');
    var right = $('.slider-right');
    left.on('click', function() {
        slideLeft();
    });
    right.on('click', function() {
        slideRight();
    });
    slideInitial();
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();
    $('.owl-carousel').each(function() {
        var $carousel = $(this);
        $carousel.owlCarousel({
            items: $carousel.data("items"),
            loop: $carousel.data("loop"),
            margin: $carousel.data("margin"),
            nav: $carousel.data("nav"),
            dots: $carousel.data("dots"),
            autoplay: $carousel.data("autoplay"),
            autoplayTimeout: $carousel.data("autoplay-timeout"),
            navText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: $carousel.data("items-mobile-sm")
                },
                480: {
                    items: $carousel.data("items-mobile")
                },
                786: {
                    items: $carousel.data("items-tab")
                },
                1023: {
                    items: $carousel.data("items-laptop")
                },
                1199: {
                    items: $carousel.data("items")
                }
            }
        });
    });


    $('#registerform').validate({
      rules: {
        name: {
            required: true
        },
          username: {
              required: true
          },
          password: {
              required: true,
              // alphanumeric: true
          },
          email: {
								required: true,
								email: true,
								remote: {
											 url: "home/checkemail",
											 type: "post"
										}
						},

          phone: {
            required: true,
                maxlength: 10,
                minlength:10,
                number:true,
                remote: {
                       url: "home/checkmobile",
                       type: "post"
                    }
          }
      },
      messages: {
          name: "Please enter name",
          username: "Please enter Username",
          email: {
									 required: "Please enter your email address.",
									 email: "Please enter a valid email address.",
									 remote: "Email already in use!"
							 },
           password: {
                   required: "Please enter password.",
                   alphanumeric: "Please enter letters and numbers",
               },
          phone: {
              required: "Enter mobile number",
              maxlength:"Maximum 10 digits",
              minlength:"Minimum 10 digits",
              remote: "Mobile number Already Exist",
              number:"Only Numbers"

             }
      },
    submitHandler: function(form) {
      $.ajax({
                 url: "home/get_register",
                 type: 'POST',
                 data: $('#registerform').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
                       $("#loading").show();
                       setTimeout(function(){ },3000);
                     if (stats=="success") {
                        $("#loading").hide();
                         $('#last_insert').val(response.last_id);
                         $("#otp_section").show();
                         $("#ins_details").hide();
                         $('#first_form').hide();
                   }else{

                       }
                 }
             });
           }

});
jQuery.validator.addMethod("alphanumeric", function(value, element) {
return this.optional(element) || /^\w+$/i.test(value);
}, "Letters, numbers, and underscores only please");


    $('#ins_detail_form').validate({
      rules: {
        institute_code: {
            required: true,
            lettersonly: true,
            maxlength: 10,
            minlength:6,
            remote: {
                   url: "home/check_ins_code",
                   type: "post"
                }
        },
          institute_name: {
              required: true,
              remote: {
                     url: "home/check_ins_name",
                     type: "post"
                  }
          },
          institute_type: {
              required: true
          },
          city: {
              required: true
          },
          state: {
              required: true
          },
          no_of_student: {
              required: true
          },
          how_you_hear: {
              required: true
          },
          notes: {
              required: true
          },
          contact_person: {
              required: true
          },
          person_designation: {
              required: true
          }
      },
      messages: {
          city: "Please Enter City",
          contact_person: "Please Enter Contact Person",
          state: "Please Enter State",
          person_designation: "Enter Person Designation",
          institute_type: "Select Institute Type",
          institute_code: {
									 required: "Enter the Institute Code.",
                   lettersonly: "Only Characters",
                   maxlength:"Maximum 10 Characters",
                   minlength:"Minimum 6 Characters",
									 remote: "Institute Code already in Exist!"
							 },
          institute_name: {
									 required: "Please enter Institute Name",
									 remote: "Institute Name already in Exist!"
							 },
          no_of_student: {
              required: "Enter No Of Students",
              number:"Only Numbers"

             }
      },
    submitHandler: function(form) {
      $.ajax({
                 url: "home/get_ins_details",
                 type: 'POST',
                 data: $('#ins_detail_form').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
                     if (stats=="success") {
                       swal({
                         title: "Thank you for Registering!",
                         text: "Verfiy Your Email",
                         type: "success"
                     }).then(function() {
                         window.location = "login";
                     });
                   }else{

                       }
                 }
             });
           }

});



$('#login_form').validate({
  rules: {
      email: {
          required: true
      },
      password: {
          required: true
      }
  },
  messages: {
      email: "Please Enter Email",
      password: "Please Enter Password"
  },
submitHandler: function(form) {
  $.ajax({
             url: "home/check_login",
             type: 'POST',
             data: $('#login_form').serialize(),
             dataType: "json",
             success: function(response) {
                var stats=response.status;
                 if (stats=="success") {
                   swal('Logging in Please wait')
                   window.setTimeout(function () {
                    location.href = "dashboard";
                }, 3000);

               }else if(stats=='incomplete'){
                 $("#loading").hide();
                  $('#last_insert').val(response.last_id)
                  $("#ins_details").show();
                  $('#login_section').hide();
               }else{
                   $('#res').html(response.msg)
                   }
             }
         });
       }

});

$('#mobile_otp_form').validate({
  rules: {
      otp: {
          required: true,
          maxlength: 6,
          minlength:6
      }
  },
  messages: {
    otp: {
             required: "Enter the OTP.",
             lettersonly: "Only Characters",
             maxlength:"Maximum 6 Numbers",
             minlength:"Minimum 6 Numbers"

         }
  },
submitHandler: function(form) {
  $.ajax({
             url: "home/check_otp",
             type: 'POST',
             data: $('#mobile_otp_form').serialize(),
             dataType: "json",
             success: function(response) {
                var stats=response.status;
                 if (stats=="success"){
                   $("#loading").hide();
                    $('#last_insert_id').val(response.last_id);
                    $("#otp_section").hide();
                    $("#ins_details").show();
                    $('#first_form').hide();

               }else{
                   $('#res').html(response.msg)
                   }
             }
         });
       }

});


  $('#plan_form').validate({
      rules: {
         plan_name: {
              required: true
          },
          institute_type: {
              required: true
          },
          no_of_users: {
              required: true,
			  number:true
          },
          duration: {
              required: true
          },
          pricing: {
              required: true,
			  number:true
          }
         
      },
      messages: {
          plan_name: "Please Enter Plan Name",
		  institute_type: "Select Institute Type",
          duration: "Select Plan Duration",
		  pricing: {
              required: "Please Enter Plan Price",
              number:"Only Numbers"
             },
          no_of_users: {
              required: "Enter No Of Users",
              number:"Only Numbers"
             }
      },
    submitHandler: function(form) {
      $.ajax({
                 url: "get_plan_details",
                 type: 'POST',
                 data: $('#plan_form').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
                     if (stats=="success") {
                       swal({
                         title: "Plan Added!..",
                         type: "success"
                     }).then(function() {
                         window.location = "plans";
                     });
                   }else{

                       }
                 }
             });
           }

});


 $('#edit_plan_form').validate({
      rules: {
         plan_name: {
              required: true
          },
          institute_type: {
              required: true
          },
          no_of_users: {
              required: true,
			  number:true
          },
          duration: {
              required: true
          },
          pricing: {
              required: true,
			  number:true
          }
         
      },
      messages: {
          plan_name: "Please Enter Plan Name",
		  institute_type: "Select Institute Type",
          duration: "Select Plan Duration",
		  pricing: {
              required: "Please Enter Plan Price",
              number:"Only Numbers"
             },
          no_of_users: {
              required: "Enter No Of Users",
              number:"Only Numbers"
             }
      },
    submitHandler: function(form) {
      $.ajax({
                 url: "../update_plan_details",
                 type: 'POST',
                 data: $('#edit_plan_form').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
                     if (stats=="success") {
                       swal({
                         title: "Plan Updated!..",
                         type: "success"
                     }).then(function() {
                         window.location = "../plans";
                     });
                   }else{

                       }
                 }
             });
           }

});


$('#plans_select_form').validate({
    submitHandler: function(form) {
      $.ajax({
                 url: "user/user_select_plan",
                 type: 'POST',
                 data: $('#plans_select_form').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
					var last_insert_id=response.last_insert_id;
                     if (stats=="success") {
                       swal({
                         title: "Plan Selected!..",
                         type: "success"
                     }).then(function() {
                         window.location = "user/payment_plan/"+last_insert_id;
                     });
                   }else{

                       }
                 }
             });
           }

});

$('#plans_update_form').validate({
    submitHandler: function(form) {
      $.ajax({
                 url: "../user_select_plan",
                 type: 'POST',
                 data: $('#plans_update_form').serialize(),
                 dataType: "json",
                 success: function(response) {
                    var stats=response.status;
					var last_insert_id=response.last_insert_id;
                     if (stats=="success") {
                       swal({
                         title: "Plan Selected!..",
                         type: "success"
                     }).then(function() {
                         window.location = "../payment_plan/"+last_insert_id;
                     });
                   }else{

                       }
                 }
             });
           }

});

});
