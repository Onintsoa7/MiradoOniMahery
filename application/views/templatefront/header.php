<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Magnifier ou Maigrir </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('assets/front/img/mom2.png');?> ">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/owl.carousel.min.css');?>" >
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/slicknav.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/progressbar_barfiller.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/gijgo.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/gijgo.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/animated-headline.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/themify-icons.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/slick.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/nice-select.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/front/css/style.css');?>">
    
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo site_url('assets/front/img/mom.png');?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="#">Accueil</a></li>
                                                <li><a href="#">Activité</a></li>

                                                <li><a href="#">Contact</a></li>
                                                <!-- Button -->
                                                <?php if ($connect == 1) { ?>
                                                    <li class="button-header  "><a href="register.html" class="btn3">Profil</a></li>
                                                    <li class="button-header"><a href="login.html" class="btn">Deconnexion</a></li>
                                                <?php }else{ ?>
                                                    
                                                    <li class="button-header margin-left "><a href="register.html" class="btn">Inscription</a></li>
                                                    <li class="button-header"><a href="login.html" class="btn3">Connexion</a></li>
                                                <?php } ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
