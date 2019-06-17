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
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/additional-methods.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />


</head>

<body data-spy="scroll" data-offset="80">
      <header id="main-header" class="header-fancy ">
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
                                    <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
                                </li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Plans</a>
                                   <div class="dropdown-menu">
                                     <a class="dropdown-item" href="<?php echo base_url(); ?>admin/add_plan">Add Plan</a>
										<a class="dropdown-item" href="<?php echo base_url(); ?>admin/plans">View Plans</a>
                                   </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>admin/customers">Customers</a>
                                </li>
                            </ul>
						<?php $user_role = $this->session->userdata('user_role');
							if($user_role !=''){?>
								<a href="<?php echo base_url(); ?>logout" class="button bt-black pull-right"><i class="ion-android-close"></i></a>
						<?php }else{ ?>
							  <a href="<?php echo base_url(); ?>login" class="button bt-black pull-right"><i class="ion-log-in"></i></a>
						<?php  } ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
