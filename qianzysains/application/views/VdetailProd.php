<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Gp Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/compro/assets/'); ?>img/favicon.png" rel="icon">
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
                    <li><a class="nav-link scrollto" href="#contact"></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url('Home/toko'); ?>" class="get-started-btn scrollto">
                Kembali</a>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Product Detail</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">
                    <div class="col-5">
                        <div class="swiper-slide text-center ">
                            <img class="img img-responsive shadow " style="max-width: 450px;" src="<?= base_url("assets/image/buku/") . $buku["gambar"]; ?>" alt="">
                        </div>
                    </div>
                    <div class="col">

                        <div class="card shadow card-outline card-primary ">

                            <div class="card-body">
                                <div class="row">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <span class="font-weight-bold h4"><?= $buku["judul"]; ?></span>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Penulis :</strong>
                                                <p class="mb-0"><?= $buku["penulis"]; ?></p>

                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Editor :</strong>
                                                <p class="mb-0"><?= $buku["editor"]; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <strong>Deskripsi </strong>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <p class="text-left"><?= $buku["desk"]; ?></p>
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td>ISBN :</td>
                                                        <td><?= $buku["isbn"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Terbit :</td>
                                                        <td><?= $buku["tgl_terbit"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ukuran</td>
                                                        <td><?= $buku["ukuran"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stok :</td>
                                                        <td><?= $buku["jum_stok"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat :</td>
                                                        <td><?= $buku["berat"]; ?> Kg</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Versi Cetak :</td>
                                                        <td><?= ($buku["versi_cetak"] == 1) ? "Ada" : "Tidak ada"; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Versi Digital :</td>
                                                        <td><?= ($buku["versi_digital"] == 1) ? "Ada" : "Tidak ada";  ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                </div>

                                <strong>Pembelian</strong> <br>
                                <div class="row mt-2">
                                    <div class="col">
                                        <a href="https://api.whatsapp.com/send?text=halomin" target="_blank" title="Chat Penjual" class="btn  btn-success">Lewat Whatsapp <i class="fa fa-whatsapp"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="<?= $buku["link_shoope"]; ?>" style="background-color: rgb(251,83,48);" target="_blank" title="Pembelian Via Shopee" class="btn btn-success">Lewat Shopee </a>
                                    </div>
                                    <div class="col">
                                        <a href="<?= $buku["link_tokopedia"]; ?>" style="background-color: rgb(29,199,100);" target="_blank" title="Pembelian Via Tokopedia" class="btn btn-success">Lewat Tokopedia </a>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- sdsdsdsd -->

                    </div>

                </div>




            </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->






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