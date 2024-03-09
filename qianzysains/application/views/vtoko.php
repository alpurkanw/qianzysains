<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>List Buku Kami</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/compro/assets/'); ?>img/team/iconTab.png" rel="icon">
    <link href="<?= base_url('assets/compro/assets/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">




    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/compro/assets/'); ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/compro/assets/'); ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0">
                <a href="<?= base_url(); ?>">Qianzy</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url('assets/compro/assets/'); ?>img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <!-- <li><a class="nav-link scrollto " href="#hero">Home</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto active" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url("Auth"); ?>" class="btn btn-outline-warning">Login</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs p-2">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="input-container col-md-4">
                        <input class="form-control" id="keyword-buku" onkeyup="searchFilter()" type="text" placeholder="Cari Judul Buku" autofocus="on">
                        <i class="fas fa-search"></i>
                    </div>
                    <!-- <div class="input-container col-md-3 text-right">
                        <a href="" class="btn btn-primary">Keranjang 0 Items</a> |
                        <a href="" class="btn btn-info">Register</a>

                    </div> -->
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row ">
                    <?php foreach ($buks as $key => $buk) {
                    ?>
                        <div class="col-lg-3">
                            <div class="card ">
                                <img src="<?= base_url("assets/image/buku/") . $buk->gambar; ?>" class="img rounded-1 border-1" height="200">
                                <div class="card-body text-center">
                                    <h5 class="card-title  h5">
                                        <?= $buk->judul; ?>
                                    </h5>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <a href="<?= base_url("Home/detailProd/") . $buk->id; ?>" style="width: 100%;" class="btn  btn-outline-warning btn-block  ">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>



                </div>


            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/compro/assets/'); ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/compro/assets/'); ?>js/main.js"></script>

</body>

</html>