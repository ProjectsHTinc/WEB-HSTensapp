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
                        <p class="iq-font-white iq-pt-15 iq-mb-20 iq-mlr-100 iq-plr-50">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
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
                                <h3 class="title iq-tw-7">How it Works</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12 col-lg-4">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon1.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Easy to Customize</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon2.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Multipurpose layout</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="iq-works-box no-shadow text-center">
                                <img src="<?php echo base_url(); ?>assets/images/services/icon3.png" alt="#">
                                <h5 class="iq-tw-7 text-uppercase iq-mt-25 iq-mb-15">Unique Design</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
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
                        <h2 class="iq-tw-6 iq-mb-25">What is Sofbox ?</h2>
                        <p class="iq-font-15">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="iq-font-15 iq-mt-20">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h6 class="iq-tw-6 iq-mt-25">Discover our best ever services.</h6>
                        <a href="javascript:void(0)" class="button iq-mt-10">Click Here</a>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <img class="iq-works-img" src="<?php echo base_url(); ?>assets/images/drive/01.png" alt="drive01">
                    </div>
                </div>
            </div>
            <div class="iq-objects">
                <span class="iq-objects-01">
<img src="<?php echo base_url(); ?>assets/images/drive/02.png" alt="drive02">
</span>
                <span class="iq-objects-02" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/03.png" alt="drive02">
</span>
                <span class="iq-objects-03" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/04.png" alt="drive02">
</span>
                <span class="iq-objects-04 iq-fadebounce">
<span class="iq-round"></span>
                </span>
            </div>
        </section>

        <section id="software-features" class="overview-block-ptb iq-mt-50 software">
            <div class="iq-software-demo">
                <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/drive/05.png" alt="drive05">
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <h2 class="iq-tw-6 iq-mb-25">Software Features</h2>
                        <p class="iq-font-15">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <ul class="iq-mt-40 iq-list">
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                            <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="iq-objects-software">
                <span class="iq-objects-01" data-bottom="transform:translatey(50px)" data-top="transform:translatey(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/03.png" alt="drive02">
</span>
                <span class="iq-objects-02" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/04.png" alt="drive02">
</span>
                <span class="iq-objects-03 iq-fadebounce">
<span class="iq-round"></span>
                </span>
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

        <div id="features" class="iq-amazing-tab white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active1" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i aria-hidden="true" class="ion-monitor"></i><span>Desktop View</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i aria-hidden="true" class="ion-ipad"></i><span>Tab View</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contactt" role="tab" aria-controls="contactt" aria-selected="false"><i aria-hidden="true" class="ion-iphone"></i><span>Mobile View</span></a>
                            </li>
                        </ul>
                        <div class="tab-content iq-mt-50" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <img class="img-fluid mx-auto d-block" src="<?php echo base_url(); ?>assets/images/drive/06.png" alt="screenshots1"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2 class="iq-tw-6 iq-mb-25">Software Features</h2>
                                <p class="iq-font-15">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="iq-mt-40 iq-list">
                                    <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                                    <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                                    <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                                    <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                                    <li class="iq-tw-6"><i class="ion-android-done-all iq-mr-10 iq-font-blue iq-font-30"></i><span class="iq-font-black">Simply dummy text of the Lorem Ipsum is printing and type setting industry.</span></li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="contactt" role="tabpanel" aria-labelledby="contact-tab"><img class="img-fluid mx-auto d-block" src="<?php echo base_url(); ?>assets/images/drive/06.png" alt="screenshots3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">High Resolution</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r4-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-settings"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Color Schemes</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-social-googleplus-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Google Fonts</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-heart-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Clean Codes</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-checkmark-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Responsive Design</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-color-wand-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Easy to Use</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-photos-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Perfect Showcase</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 iq-mt-30">
                        <div class="iq-fancy-box text-center">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-videocam-outline"></i>
                            </div>
                            <div class="fancy-content">
                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Video Animation</h5>
                                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="iq-pt-80 iq-counter-box iq-bg-over iq-over-blue-90 iq-font-white iq-parallax" data-jarallax='{"speed": 0.6}' style="background: url(images/bg/02.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left">
                        <div class="counter"> <i class="ion-ios-folder-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">APP DOWNLOADS</label>
                                <span class="timer iq-tw-7" data-to="1540" data-speed="10000">1540</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r4-mt-30">
                        <div class="counter"> <i class="ion-ios-paper-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">HAPPY CLIENTS</label>
                                <span class="timer iq-tw-7" data-to="2530" data-speed="10000">2530</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r-mt-30">
                        <div class="counter"> <i class="ion-ios-person-outline " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">ACTIVE ACCOUNTS</label>
                                <span class="timer iq-tw-7" data-to="8120" data-speed="10000">8120</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 text-left r-mt-30">
                        <div class="counter"> <i class="ion-ios-star " aria-hidden="true"></i>
                            <div class="counter-date">
                                <label class="iq-font-white text-uppercase">TOTAL APP RATES</label>
                                <span class="timer iq-tw-7" data-to="1620" data-speed="10000">1620</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter-info iq-mt-60 iq-pt-40">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="iq-mt-30">It has survived not only five centuries, but also the leap into electronic type setting, Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="javascript:void(0)" class="button bt-black iq-mt-15 iq-mb-30">Download</a>
                        </div>
                        <div class="col-lg-6">
                            <div class="counter-info-img">
                                <img class="center-block" src="images/drive/07.png" alt="#">
                                <div class="waves-box">
                                    <a href="video/01.html" class="iq-video popup-youtube"><i class="ion-ios-play-outline"></i></a>
                                    <div class="iq-waves">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <section id="team" class="overview-block-ptb white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Meet the Team</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-3 col-md-6">
                        <div class="iq-team grey-bg">
                            <div class="iq-team-img">
                                <img src="<?php echo base_url(); ?>assets/images/team/01.jpg" class="img-fluid center-block" alt="#">
                            </div>
                            <div class="iq-team-info text-center">
                                <h5 class="iq-font-black iq-tw-6">JD Adams</h5>
                                <span class="team-post iq-tw-5">Web Designer</span>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r4-mt-30">
                        <div class="iq-team grey-bg">
                            <div class="iq-team-img">
                                <img src="<?php echo base_url(); ?>assets/images/team/02.jpg" class="img-fluid center-block" alt="#">
                            </div>
                            <div class="iq-team-info text-center">
                                <h5 class="iq-font-black iq-tw-6">Rinkal Oberoi</h5>
                                <span class="team-post iq-tw-5">Web Designer</span>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-team grey-bg">
                            <div class="iq-team-img">
                                <img src="<?php echo base_url(); ?>assets/images/team/03.jpg" class="img-fluid center-block" alt="#">
                            </div>
                            <div class="iq-team-info text-center">
                                <h5 class="iq-font-black iq-tw-6">Jason Deol</h5>
                                <span class="team-post iq-tw-5">Web Designer</span>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-md-6 r-mt-30">
                        <div class="iq-team grey-bg">
                            <div class="iq-team-img">
                                <img src="<?php echo base_url(); ?>assets/images/team/04.jpg" class="img-fluid center-block" alt="#">
                            </div>
                            <div class="iq-team-info text-center">
                                <h5 class="iq-font-black iq-tw-6">kush Jackson</h5>
                                <span class="team-post iq-tw-5">Web Designer</span>
                            </div>
                            <div class="share">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                                </ul>
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
            <div class="iq-objects-asked">
                <span class="iq-objects-01">
<img src="<?php echo base_url(); ?>assets/images/drive/02.png" alt="drive02">
</span>
                <span class="iq-objects-02" data-bottom="transform:translatex(50px)" data-top="transform:translatex(-100px);">
<img src="<?php echo base_url(); ?>assets/images/drive/04.png" alt="drive02">
</span>
                <span class="iq-objects-03 iq-fadebounce">
<span class="iq-round"></span>
                </span>
            </div>
        </section>

        <section id="blog" class="overview-block-ptb grey-bg iq-blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-title">
                            <h3 class="title iq-tw-7">Latest Blog Post</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley,</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="media-wrapper">
                                            <video style="width:100%;height:100%;" id="player1" poster="video/01.jpg" controls preload="none">
                                                <source type="video/m4v" src="video/01.html" />
                                                <source type="video/webm" src="video/01.webm" />
                                                <source type="video/ogg" src="video/01.ogv" />
                                            </video>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With HTML Video</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="images/blog/01.jpg" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Image</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="iq-bolg-video">
                                            <iframe src="https://player.vimeo.com/video/176916362"></iframe>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Vimeo</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="iq-bolg-video">
                                            <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Youtube</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="images/blog/03.jpg" alt="#">
                                        <div class="players" id="player2-container">
                                            <div class="media-wrapper">
                                                <audio id="player2" preload="none" controls>
                                                    <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Audio</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <img class="img-fluid center-block" src="images/blog/02.jpg" alt="#">
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Image</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="iq-blog-box">
                                    <div class="iq-blog-image clearfix">
                                        <div class="owl-carousel arrow-1" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/01.jpg" alt="#">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/02.jpg" alt="#">
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid" src="images/blog/03.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="iq-blog-detail">
                                        <div class="blog-title"> <a href="blog-single.html"><h5 class="iq-tw-6 iq-mb-10">Blogpost With Slider</h5> </a> </div>
                                        <div class="blog-content">
                                            <p>Quae laboriosam sunt consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. hic perspiciatis.</p>
                                        </div>
                                        <div class="iq-blog-meta">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-user-circle" aria-hidden="true"></i> Tom Herry</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> 12 Aug 2017</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comment-o" aria-hidden="true"></i> 5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="iq-our-clients white-bg iq-ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="5" data-items-laptop="5" data-items-tab="4" data-items-mobile="3" data-items-mobile-sm="1" data-margin="30">
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/01.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/02.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/03.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/04.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/05.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/06.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/07.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/08.png" alt="#"></div>
                            <div class="item"> <img class="img-fluid center-block" src="images/clients/09.png" alt="#"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <a class="button bt-white iq-ml-25" href="javascript:void(0)">subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us" class="footer-info white-bg">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6 col-lg-4">
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
                </div>
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" style="border:0" allowfullscreen></iframe>
        </section>
        <section class="footer-info iq-pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="iq-footer-box text-left">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-location-outline"></i>
                            </div>
                            <div class="footer-content">
                                <h4 class="iq-tw-6 iq-pb-10">Address</h4>
                                <p>1234 North Avenue Luke Lane, South Bend, IN 360001</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 r4-mt-30">
                        <div class="iq-footer-box text-left">
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
                    <div class="col-md-6 col-lg-3 r-mt-30">
                        <div class="iq-footer-box text-left">
                            <div class="iq-icon">
                                <i aria-hidden="true" class="ion-ios-email-outline"></i>
                            </div>
                            <div class="footer-content">
                                <h4 class="iq-tw-6 iq-pb-10">Mail</h4>
                                <p><a href="https://iqonicthemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="07747277776875734774686165687f2964686a">[email&#160;protected]</a>
                                    <br>24 X 7 online support
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 align-self-center">
                        <ul class="info-share">
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row iq-mt-40">
                    <div class="col-sm-12 text-center">
                        <div class="footer-copyright iq-ptb-20">Copyright @<span id="copyright"> <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="javascript:void(0)" class="text-green">Sofbox.</a> All Rights Reserved </div>
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
