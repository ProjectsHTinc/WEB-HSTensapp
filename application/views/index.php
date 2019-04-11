<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ENSYFI </title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl-carousel/owl.carousel.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup/magnific-popup.css" />

    <link href="<?php echo base_url(); ?>assets/css/mediaelementplayer.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />

    <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-customizer.css" />
</head>

<body data-spy="scroll" data-offset="80">
      <header id="main-header" class="header-fancy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/logo.png" alt="#">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ion-navicon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#iq-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#how-it-works">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#software-features">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#great-screenshots">Screenshots</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
								<?php $email = $this->session->userdata('email');
								if($email !=''){?>
								<li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                                   <div class="dropdown-menu">
                                     <a class="dropdown-item" href="<?php echo base_url(); ?>dashboard">Dashboard</a>
									 <a class="dropdown-item" href="<?php echo base_url(); ?>user_renewals">My Renewals</a>
									 <a class="dropdown-item" href="<?php echo base_url(); ?>user_profile">Profile</a>

                                   </div>
                                </li>
							<?php  } ?>
                            </ul>
                           <?php $email = $this->session->userdata('email');
							if($email !=''){?>
								<a href="<?php echo base_url(); ?>logout" class="button bt-black pull-right"><i class="ion-android-close"></i></a>
						<?php }else{ ?>
							  <a href="<?php echo base_url(); ?>register" class="button bt-black pull-right" title="Register"><i class="fa fa-user" aria-hidden="true"></i></a>
							  <a href="<?php echo base_url(); ?>login" class="button bt-black pull-right" title="Login here"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
						<?php  } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section id="iq-home" class="iq-banner-02 overview-block-pt iq-bg-over iq-over-blue-90 jarallax" data-jarallax-video="m4v:./video/01.m4v,webm:./video/01.webm,ogv:./video/01.ogv">
        <div class="container">
            <div class="banner-text text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class=" iq-font-white iq-tw-8">Perfect Landing Template</h1>
                        <p class="iq-font-white iq-pt-15 iq-mb-20 iq-mlr-100 iq-plr-50">The ultimate master for college, school and parent communication app in India that makes the job easy for administrators, teachers, students and parents.</p>
                        <a href="javascript:void(0)" class="button bt-black iq-mt-10 iq-mb-50">Download</a>
                    </div>
                    <div class="col-md-12">
                        <img class="banner-img img-fluid center-block" src="<?php echo base_url(); ?>assets/images/banner/03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            <span class="banner-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-50px);">
<img src="<?php echo base_url(); ?>assets/images/drive/03.png" alt="drive02">
</span>
            <span class="banner-objects-02 iq-fadebounce">
<span class="iq-round"></span>
            </span>
            <span class="banner-objects-03 iq-fadebounce">
<span class="iq-round"></span>
            </span>
            <span class="banner-objects-04" data-bottom="transform:translatex(100px)" data-top="transform:translatex(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/04.png" alt="drive02">
</span>
        </div>
    </section>

    <div class="main-content">

        <section id="how-it-works" class="overview-block-ptb it-works grey-bg">
            <div class="container">
                <div class="iq-box-shadow iq-pt-60 white-bg iq-mt-60">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="heading-title">
                                <h3 class="title iq-tw-7">MODULES FOR SCHOOLS AND COLLEGES</h3>
                                <p>This school parent app is designed for the betterment of educational institutions, teachers, parents and students, speculating their needs and requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-3">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon1.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Admin</h5>
                                <p>Rules over the access of teachers, parents & students who stay connected at all times.  </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon2.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Staff </h5>
                                <p>Helps in eliminating the paperwork, class notes and other information regarding on and off are communicated securely.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon3.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Parents</h5>
                                <p>Parents are updated with activities happening in school premises, class assignments and important notifications.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon3.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Students</h5>
                                <p>Students are updated with their attendance, performance, class assignments and important circular alerts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-works" class="overview-block-ptb how-works r-mt-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="iq-tw-6 iq-mb-25">ENSFYFI- EDUCATION SYSTEM SIMPLIFIED</h6>
                        <p class="iq-font-15">Ensyfi’s aspiration in digitising the communication world between the school and the parent, supplementing the technology materialized in 2017. This imaginative conception or anticipation helps schools save on frequency, monopolize the monotonous tasks, and schools can utilise the protected time to satisfy a human bond with the parental guys. At the parents' side, the application provides them with real-time updates about their kids at a single touch, thus creating a positive soul connect with the school. Simplifying the best of school communication app in India.</p><br>
                        <p>“Ensyfi, more the intelligence, less the algorithm.”</p>
                        <p class="iq-font-15 iq-mt-20">All in one school app for parents in India
Running a school or college is a complex endeavour and when it comes to connecting the stakeholders – the administration, teachers, students and parents is a time-consuming process and can gobble a lot of time. This school app in India is major evidence in reducing stress for school authorities. <br>
Ensyfi is a solution that aims to simplify administrative processes and connect teachers with students and parents in a seamless environment round the clock. The solution is a culmination of our deep understanding of how educational institutions work and the blending of relevant technologies for delivering a world-class product. We set an example for the teacher-parent communication app in India.
</p>

                    </div>
                    <div class="col-lg-6 align-self-center">
                        <img class="iq-works-img" src="<?php echo base_url(); ?>assets/images/drive/01.png" alt="drive01">
                    </div>
                </div>
            </div>

        </section>

        <section id="software-features" class="overview-block-ptb iq-mt-50 software">
            <div class="iq-software-demo">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/drive/05.png" alt="drive05">
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <h6 class="iq-tw-6 iq-mb-25">THE LEADING-EDGE APPLICATION CONNECTING COLLEGES AND STUDENTS IN A POPULAR APPROACH</h6>
                        <p class="iq-font-15">The solitary unique way where colleges cater to the needs and make the product doubtlessly the foremost available in the market. Ensyfi is a user-friendly college mobile app for communication between the colleges and students. The application helps in connecting the administrators and teachers to communicate with students. To make more the convenience easier, Ensyfi is a classy example. </p>
                            <h6 class="iq-tw-6 iq-mb-25">For Project Implementation Agencies</h6>
                            <p class="iq-font-15">It is almost a roller coaster ride when we make a selection for Ensyfi because here the PIA is getting benefitted by making the monitoring policy easy. The process is so simple that we make work easy for trainers and students. The trainers can just access the students profile multiple times and make the trade simple as ABC.
</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="great-screenshots" class="overview-block-ptb iq-bg-over  iq-over-blue-80 iq-screenshots iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/07.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title white">
                            <h3 class="title iq-tw-7">Great Screenshots</h3>
                            <p class="iq-font-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="screenshots-slider popup-gallery">
                            <div class="slider-container">
                                <div class="slider-content">
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" alt="1" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/02.jpg" alt="2" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/03.jpg" alt="3" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/04.jpg" alt="4" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/05.jpg" alt="5" /></a>
                                    </div>
                                    <div class="slider-single">
                                        <a href="<?php echo base_url(); ?>assets/images/screenshots/01.jpg" class="popup-img"><img class="slider-single-image" src="<?php echo base_url(); ?>assets/images/screenshots/06.jpg" alt="6" /></a>
                                    </div>
                                </div>
                                <a class="slider-left" href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
                                <a class="slider-right" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="overview-block-ptb grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Sofbox Specialities </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-6">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Centralised Operations</h5>
                                <p>A single portal for administrators, staffs, students, and parents.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r4-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-settings"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Administrative Control</h5>
                                <p>Collection of fees, manage leaves, circular or events notifications, endorsement for leaves and on-duty approvals, multi-level tracking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-social-googleplus-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Students Helpdesk</h5>
                                <p>Access to home assignments, mark sheets, and attendance records.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-heart-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Academic</h5>
                                <p>Learn about extra and co-curricular activities, view teachers and students profile.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-checkmark-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Parental controls</h5>
                                <p>Monitor Attendance, Access: Mark List, Notifications, Fee Payment History, Holiday Listing, Send Communication, Receive SMS alerts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-color-wand-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Popular</h5>
                                <p>Send (automated) and Receive SMS alerts, Create User Groups, Assign Multi-level Authorities, Customise Features, Privacy Controls, User-friendly Display, Round-the-Clock Access, Multi-channel Support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-photos-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Fees Management</h5>
                                <p>Fee Notifications, Paid/Unpaid Updates, Fee due dates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-videocam-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Teachers’ Tools</h5>
                                <p>It allows teachers to take attendance on the mobile app and all reporting is automated through the administrator.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="overview-block-ptb white-bg iq-loved-customers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title iq-mt-50">
                            <h3 class="title iq-tw-7">Loved By Our Customers</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="images/testimonial/01.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">Jason Adams</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="images/testimonial/02.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">Jenny Adams</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-client white-bg">
                                    <div class="client-img">
                                        <img alt="#" class="img-fluid rounded-circle" src="images/testimonial/03.jpg">
                                    </div>
                                    <div class="client-info">
                                        <div class="client-name iq-mb-10">
                                            <h5 class="iq-tw-6">John Deo</h5>
                                            <span class="sub-title iq-tw-6">CEO, Sofbox</span>
                                        </div>
                                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="overview-block-ptb grey-bg iq-price-table">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Affordable Price</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="iq-pricing pricing-02 text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>19<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">BASIC</span>
                            </div>
                            <ul>
                                <li>
                                    <s>100 MB Disk Space</s>
                                </li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>
                                    <s>Webmail Support</s>
                                </li>
                                <li>
                                    <s>Customer Support 24/7</s>
                                </li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 wow flipInY r4-mt-30" data-wow-duration="1s">
                        <div class="iq-pricing pricing-02 text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>29<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">STANDARD</span>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>
                                    <s>Webmail Support</s>
                                </li>
                                <li>Customer Support 24/7</li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 r4-mt-30">
                        <div class="iq-pricing pricing-02 text-center">
                            <div class="price-title iq-parallax iq-over-blue-80" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/08.jpg);">
                                <h2 class="iq-font-white iq-tw-7"><small>$</small>49<small>/Month</small></h2>
                                <span class="text-uppercase iq-tw-4 iq-font-white">ADVANCE</span>
                            </div>
                            <ul>
                                <li>100 MB Disk Space</li>
                                <li>
                                    <s>2 Subdomains</s>
                                </li>
                                <li>
                                    <s>5 Email Accounts</s>
                                </li>
                                <li>Webmail Support</li>
                                <li>Customer Support 24/7</li>
                            </ul>
                            <div class="price-footer">
                                <a class="button" href="# ">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="compare-services" class="overview-block-ptb iq-over iq-over-blue-90 iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/05.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title white">
                            <h3 class="title iq-tw-7">Compare Services</h3>
                            <p class="iq-font-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Easy to Customize</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>90</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="90"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 align-self-center text-center">
                        <h2 class="iq-font-white">V/S</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Easy to Customize</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>70</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="70"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row iq-mt-50">
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-albums-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Multipurpose layout</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>50</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="50"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 align-self-center text-center">
                        <h2 class="iq-font-white">V/S</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-albums-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Multipurpose layout</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>80</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="80"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row iq-mt-50">
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-color-wand-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Unique Design</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>100</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="100"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 align-self-center text-center">
                        <h2 class="iq-font-white">V/S</h2>
                    </div>
                    <div class="col-sm-5">
                        <div class="iq-services-box text-left iq-font-white">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-color-wand-outline"></i>
                            </div>
                            <div class="services-content">
                                <h5 class="iq-tw-6 iq-pb-10 iq-font-white">Unique Design</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="iq-progress-bar">
                                    <p class="iq-progress-bar-text">
                                        <span>40</span>
                                    </p>
                                    <div class="iq-progress-bar">
                                        <span data-percent="40"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overview-block-ptb white-bg iq-asked">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Frequently Asked Questions</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <img class="img-fluid center-block" src="<?php echo base_url(); ?>assets/images/drive/10.png" alt="drive10" style="z-index: 9; position: relative;">
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="iq-accordion iq-mt-50">
                            <div class="iq-ad-block ad-active"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Ipsum is simply dummy the printing?</a>
                                <div class="ad-details">
                                    <div class="row">
                                        <div class="col-sm-3"><img alt="#" class="img-fluid" src="<?php echo base_url(); ?>assets/images/blog/01.jpg"></div>
                                        <div class="col-sm-9"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Dummy the printing and type setting?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">Standard dummy since the 1500s?</a>
                                <div class="ad-details">
                                    <div class="row">
                                        <div class="col-sm-9"> It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</div>
                                        <div class="col-sm-3"><img alt="#" class="img-fluid" src="<?php echo base_url(); ?>assets/images/blog/01.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-ad-block"> <a href="javascript:void(0)" class="ad-title iq-tw-6 iq-font-grey">It has survived five centuries?</a>
                                <div class="ad-details">It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>





    </div>

    <footer>

        <section class="iq-ptb-80 iq-newsletter iq-bg-over iq-over-blue-90 jarallax" data-jarallax-video="m4v:./video/01.m4v,webm:./video/01.webm,ogv:./video/01.ogv">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title white iq-mb-40">
                            <h3 class="title iq-tw-7">Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword2" class="sr-only"></label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Enter Email ">
                            </div>
                            <a class="button bt-white iq-ml-25" href="javascript:void(0)">subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us" class="footer-info white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="iq-get-in">
                            <h4 class="iq-tw-7 iq-mb-20">Get in Touch</h4>
                            <form id="contact" method="post">
                                <div class="contact-form">
                                    <div class="section-field">
                                        <input class="require" id="contact_name" type="text" placeholder="Name*" name="name">
                                    </div>
                                    <div class="section-field">
                                        <input class="require" id="contact_email" type="email" placeholder="Email*" name="email">
                                    </div>
                                    <div class="section-field">
                                        <input class="require" id="contact_phone" type="text" placeholder="Phone*" name="phone">
                                    </div>
                                    <div class="section-field textarea">
                                        <textarea id="contact_message" class="input-message require" placeholder="Comment*" rows="5" name="message"></textarea>
                                    </div>
                                    <div class="section-field iq-mt-20">
                                        <div class="g-recaptcha" data-sitekey="6Lc5XV4UAAAAAJzUmGomye9Peru8lXyzT22FH0lX"></div>
                                    </div>
                                    <button id="submit" name="submit" type="submit" value="Send" class="button iq-mt-15">Send Message</button>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                                        <strong>Thank You, Your message has been received.</strong>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" >

                      <div class="iq-footer-box text-left" style="margin-top:70px;">
                          <div class="iq-icon">
                              <i aria-hidden="true" class="ion-ios-location-outline"></i>
                          </div>
                          <div class="footer-content">
                              <h4 class="iq-tw-6 iq-pb-10">Address</h4>
                              <p>1234 North Avenue Luke Lane, South Bend, IN 360001</p>
                          </div>
                      </div>

                      <div class="iq-footer-box text-left" style="margin-top:40px;">
                          <div class="iq-icon">
                              <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                          </div>
                          <div class="footer-content">
                              <h4 class="iq-tw-6 iq-pb-10">Phone</h4>
                              <p>+0123 456 789
                                  <br>Mon-Fri 8:00am - 8:00pm
                                  <br>
                              </p>
                          </div>
                      </div>


                    </div>
                    <div class="col-md-6 col-lg-3">


                      <div class="iq-footer-box text-left" style="margin-top:70px;">
                          <div class="iq-icon">
                              <i aria-hidden="true" class="ion-ios-email-outline"></i>
                          </div>
                          <div class="footer-content">
                              <h4 class="iq-tw-6 iq-pb-10">Mail</h4>
                              <p><a href="">info@ensyfi.com</a>
                                  <br>24 X 7 online support
                                  <br>
                              </p>
                          </div>
                      </div>

                      <ul class="info-share" style="margin-top:40px;">
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                      </ul>



                    </div>
                </div>
            </div>

        </section>
        <section class="footer-info iq-pt-60">
            <div class="container">

                <div class="row iq-mt-40">
                    <div class="col-sm-12 text-center">
                        <div class="footer-copyright iq-ptb-20"><span id="copyright">
                        <?php echo date("Y"); ?></span> &nbsp;Developed by
                          <a href="https://happysanztech.com" target="_blank" class="text-green">Happy Sanz Tech.</a> </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>



    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/style-customizer.js"></script>
</body>

</html>
