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
                <a href="../">Qianzy</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url('assets/compro/assets/'); ?>img/logo.png" alt="" class="img-fluid"></a>-->

            <div class="row">
                <div class="col">
                    <a href="<?= base_url("../"); ?>" class="btn btn-outline-warning">Home</a>
                    <a href="<?= base_url("Auth"); ?>" class="btn btn-outline-warning">Login</a>
                </div>
            </div>


        </div>
    </header><!-- End Header -->

    <main id="main">



        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h6>PENCARIAN</h6>
                        <hr class="my-2">
                        <div class="input-container shadow-sm">
                            <input class="form-control " id="keyword-buku" onkeyup="searchFilter()" type="text" placeholder="Cari Judul Buku" autofocus="on">
                            <!-- <i class="fas fa-search"></i> -->
                        </div>
                        <br>
                        <h6>BUKU BARU</h6>
                        <hr class="my-2">
                        <div class="card mb-3 shadow-sm">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="http://localhost/devel/qianzysains/buku/assets/image/buku/coverbook_fintech.jpeg" alt="..." class="img img-bordered m-1" width="100" height="100">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-1 small">
                                        <h6 class="card-title">KEPERAWATAN PSIKIATRI</h6>
                                        <small>
                                            <p class="card-text">
                                                ISBN: 978-623-195-859-4 <br>
                                                Terbit: March 2024</p>
                                            <p class="card-text"></p>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-9">
                        <div class="row ">
                            <?php foreach ($buks as $key => $buk) {
                            ?>

                                <div class="col-3 px-1">
                                    <div class="card" style="min-height: 300px;">
                                        <div class="card-header p-2">
                                            <img src="<?= base_url("assets/image/buku/") . $buk->gambar; ?>" class="img img-bordered  card-img-top" alt="..." style="min-height: 220px;">
                                        </div>

                                        <div class="card-body small p-2">
                                            <h6 class="card-title mb-1"><?= $buk->isbn; ?></h6>
                                            <p class="mb-1"><?= $buk->judul; ?></p>
                                            <a href="#" class="btn  btn-primary">Go somewhere</a>
                                        </div>

                                    </div>

                                </div>


                            <?php } ?>

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