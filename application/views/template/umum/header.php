<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SOHO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?= base_url() ?>assets/sailor/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/sailor/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/sailor/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/sailor/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/sailor/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Sailor - v4.3.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url('welcome') ?>">Duplicate</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url('welcome') ?>" class="<?= $index1; ?>">HOME</a></li>
                <li class="dropdown active"><a href="" class="<?= $internet; ?>"><span>INTERNET SERVICES</span> </a>
                    <ul>
                        <li class=" dropdown"><a href="" class=""><span>RESIDENTAL WIRELESS</span> </a>
                            <ul>
                                <li><a href="<?= base_url('welcome/soho') ?>">BOARDBOAND SOHO</a></li>
                                <li><a href="<?= base_url('welcome/soholite') ?>">BOARDBOAND SOHO LITE</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class=""><span>RESIDENTAL FIBER OPTIC</span> </a>
                            <ul>
                                <li><a href="<?= base_url('welcome/infinitelite') ?>">INFINITE LITE</a></li>
                                <li><a href="<?= base_url('welcome/infinitehome') ?>">INFINITE HOME</a></li>
                                <li><a href="<?= base_url('welcome/infinitecombo') ?>">INFINITE COMBO</a></li>
                                <li><a href="<?= base_url('welcome/infinitestream') ?>">INFINITE STREAM</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class=""><span>CORPORATE</span> </a>
                            <ul>
                                <li><a href="<?= base_url('welcome/fast') ?>">FAST</a></li>
                                <li><a href="<?= base_url('welcome/dia') ?>">DEDICATED INTERNET ACCESS</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="<?= $integrated; ?>"><span>INTEGRATED SYSTEM</span> </a>
                    <ul>
                        <li><a href="<?= base_url('welcome/cctv') ?>">CCTV</a></li>
                        <li><a href="<?= base_url('welcome/vpn') ?>">VPN</a></li>
                    </ul>

                </li>
                <li class="dropdown"><a href="#" class="<?= $it; ?>"><span>IT INFRASTRUCTURE</span> </a>
                    <ul>
                        <li><a href="#">HOSTING</a></li>
                        <li><a href="<?= base_url('welcome/ipb') ?>">IP PBX</a></li>
                    </ul>
                </li>
                <!-- <li class="dropdown"><a href="#"><span>COVERAGE</span> </a>
                    <ul>
                        <li><a href="#">LAYANAN WIRELESS</a></li>
                        <li><a href="#">LAYANAN FIBER OPTIC</a></li>
                    </ul>
                </li> -->
                <li class="dropdown"><a href="#" class="<?= $support; ?>"><span>SUPPORT</span> </a>
                    <ul>
                        <li><a href="<?= base_url('welcome/faq') ?>">FAQ</a></li>
                        <li><a href="<?= base_url('welcome/payment') ?>">PAYMENT METHOD</a></li>
                        <li><a href="<?= base_url('welcome/konfirmasi') ?>">KONFIRMASI PEMBAYARAN</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('welcome/hubungi') ?>" class="<?= $hubungi; ?>">HUBUNGI KAMI </a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<body>