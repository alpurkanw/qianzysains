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
    <header id="header" class="fixed-top  header-inner-pages">
        <div class="container  d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0">
                <a href="../">Qianzy</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url('assets/compro/assets/'); ?>img/logo.png" alt="" class="img-fluid"></a>-->

            <div class="row">
                <div class="col">
                    <a href="<?= base_url("Home"); ?>" class="btn btn-outline-primary">Kembali</a>
                </div>
            </div>


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Detail Buku</h2>

                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <!-- <?php print_r($buku["judul"]); ?> -->
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="swiper-slide text-center ">
                            <img class="img img-responsive shadow " style="max-width: 450px;" src="<?= base_url("assets/image/buku/") . $buku["gambar"]; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">

                        <div class="card shadow card-outline card-primary ">

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12">

                                        <input type="hidden" id="id_buku" value="<?= $buku["id"]; ?>">
                                        <h2><?= $buku["judul"]; ?></h2>
                                        <hr class="my-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Penulis :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 Penulis">sdsds</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Editor :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 Editor">sdsds</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>ISBN :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 ISBN"><?= $buku["isbn"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Tanggal Terbit :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 tgl_terbit"><?= $buku["tgl_terbit"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Ukuran :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 Ukuran"><?= $buku["ukuran"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Stok :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 Stok"><?= $buku["jum_stok"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Berat :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 Berat"><?= $buku["berat"]; ?> Kg</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Versi Cetak :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 cetak"><?= ($buku["versi_cetak"] == 1) ? "Ada" : "Tidak ada"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Versi Digital :</strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 digital"><?= ($buku["versi_digital"] == 1) ? "Ada" : "Tidak ada"; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <strong>Price : </strong>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 digital"><strong>Rp </strong><?= ($buku["harga_jual"]) ? number_format($buku["harga_jual"]) : "Belum diSet"; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">

                                    <div class="col-3">

                                        <strong>Sinopsis Buku :</strong>
                                    </div>
                                    <div class="col-auto">

                                        <p class=" Deskripsi"><?= $buku["desk"]; ?>
                                        </p>

                                    </div>
                                </div>

                                <hr>

                                <div class="row mb-2">
                                    <div class="col-3 ">
                                        <strong>Toko Online Kami :</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="<?= $buku["link_tokopedia"]; ?>" class="btn mb-2 " target="_parent" style="background-color: #42B549;">Tokopedia</a>
                                        <br>
                                        <a href="<?= $buku["link_shopee"]; ?>" target="_parent" class="btn btn-danger mb-2">Shopee</a>
                                        <br>
                                        <a href="<?= $buku["link_bukalapak"]; ?>" target="_parent" class="btn btn-danger">Bukalapak</a>
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


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


    <script>
        $(document).ready(function() {
            // alert();

            var id_buku = $("#id_buku").val();
            // alert(id_buku);
            // return;

            var url = '<?= base_url("Home/ambilPenulis/") ?>' + id_buku;
            // alert(url);
            // return;


            var penulis = "";
            var editor = "";
            $.get(url, function(data) {

                // {"Editor":["alpurkan2"],"Penulis":["tesss3","nma","alpurkan2"]}

                var jenis = JSON.parse(data)
                penulis = (jenis.Penulis != "") ? jenis.Penulis : "Data Penulis belum Diinput";
                editor = (jenis.Editor != "") ? jenis.Editor : "Data Editor belum Diinput";
                // alert(jenis.Penulis)
                $(".Penulis ").text(penulis);
                $(".Editor ").text(editor);
            })


        })
    </script>

</body>

</html>