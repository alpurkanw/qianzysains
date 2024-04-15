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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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
                    <a href="<?= base_url("../"); ?>" class="btn btn-outline-primary">Home</a>
                    <a href="<?= base_url("Auth"); ?>" class="btn btn-outline-primary">Login</a>
                </div>
            </div>


        </div>
    </header><!-- End Header -->

    <main id="main">



        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details mt-5">
            <div class="container">


                <div class="row my-3">
                    <div class="col-6 mx-auto">
                        <form action="<?= base_url("Home/cari_buku"); ?>" method="post">
                            <div class="input-container shadow-sm">
                                <div class="input-group">
                                    <input class="form-control" name="kunci" type="hidden" value="<?= $this->security->get_csrf_hash(); ?>">
                                    <input class="form-control" name="keyw" type="text" placeholder="Cari Judul Buku" autofocus="on" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="submit">
                                            <i class="fas fa-search"></i> Search <!-- Ikon search menggunakan Font Awesome -->
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-12">
                        <div class="row ">
                            <?php foreach ($buks as $key => $buk) {
                            ?>


                                <div class="col-3 px-1 item_buku" data-toggle="modal" data-target="#exampleModal" data-gambar="<?= $buk->gambar; ?>" data-judul="<?= strtoupper($buk->judul); ?>" data-editor="<?= $buk->editor; ?>" data-jum_stok="<?= $buk->jum_stok; ?>" data-isbn="<?= $buk->isbn; ?>" data-tgl_terbit="<?= $buk->tgl_terbit; ?>" data-ukuran="<?= $buk->ukuran; ?>" data-harga_jual="<?= $buk->harga_jual; ?>" data-kategori="<?= $buk->kategori; ?>" data-berat="<?= $buk->berat; ?>" data-versi_cetak="<?= $buk->versi_cetak; ?>" data-versi_digital="<?= $buk->versi_digital; ?>" data-desk="<?= $buk->desk; ?>">
                                    <div class="card border-0" style="min-height: auto;">
                                        <div class="card-header shadow-sm p-2 text-center">
                                            <img src="<?= base_url("assets/image/buku/") . $buk->gambar; ?>" class="img mx-4 img-bordered  card-img-top" alt="..." style="height: 300px; width:220px">
                                            <!-- height="100" -->
                                        </div>

                                        <div class="card-body small p-2">
                                            <h6 class="card-title mb-1"><?= $buk->isbn; ?> </h6>
                                            <h6 class="font-weight-bold mb-1"><?= strtoupper($buk->judul); ?> </h6>
                                            <!-- <a href="#" class="btn  btn-primary">Go somewhere</a> -->
                                        </div>

                                    </div>

                                </div>


                            <?php } ?>



                        </div>

                    </div>
                </div>



                <div class="row mt-5">
                    <div class="col">

                        <h6>BUKU BARU</h6>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col-3">


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
                                                    </p>
                                                    <p class="card-text"></p>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-3">


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
                            <div class="col-3">


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
                            <div class="col-3">


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
                        </div>
                    </div>
                </div>



            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




    <!-- Modal -->
    <div class="modal fade" id="mdl_buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  ">
            <div class="modal-content ">
                <div class="card modal-dialog-scrollable">
                    <div class="card-header text-center">

                        <img src="#" class="img gambar" height="600" width="400">
                    </div>
                    <div class="card-body">
                        <h3 class="h3 font-weight-bold judul text-right">Card title that wraps to a new line</h3>

                        <div class="row">
                            <hr>
                            <div class="col-12">


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
                                        <p class="mb-0 ISBN">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Tanggal Terbit :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 tgl_terbit">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Ukuran :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 Ukuran">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Stok :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 Stok">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Berat :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 Berat">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Versi Cetak :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 cetak">sdsds</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <strong>Versi Digital :</strong>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 digital">sdsds</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr class="my-3">
                                <div class="col-3">

                                    <strong>Deskripsi :</strong>
                                </div>
                                <div class="col-auto">

                                    <p class=" Deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur similique quam itaque nemo rem placeat quae beatae nesciunt voluptas, ullam quisquam quidem deserunt doloribus ab eum provident cum facere corporis!
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi distinctio rem velit vero natus incidunt veritatis deleniti fuga similique architecto illo maiores necessitatibus, fugiat assumenda. Porro amet animi consectetur culpa.
                                    </p>

                                </div>
                            </div>

                            <hr>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


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
            var path = '<?= base_url("assets/image/buku/") ?>';
            $(".item_buku").on("click", function() {

                var tgl_terbit = $(this).data("tgl_terbit").toString();

                $('#mdl_buku .gambar').attr('src', path + $(this).data("gambar"));


                $("#mdl_buku .judul").text($(this).data("judul"));
                $("#mdl_buku .Editor").text($(this).data("editor"));
                $("#mdl_buku .tgl_terbit").text(tgl_terbit.substring(0, 4) + "-" + tgl_terbit.substring(4, 6) + "-" + tgl_terbit.substring(6));
                $("#mdl_buku .Ukuran ").text($(this).data("ukuran"));
                $("#mdl_buku .Stok ").text(($(this).data("jum_stok") > 0) ? "Tersedia" : "Tidak Tersedia");
                $("#mdl_buku .Berat ").text($(this).data("berat") + " Kg");
                $("#mdl_buku .cetak").text(($(this).data("versi_cetak") > 0) ? "Tersedia" : "Tidak Tersedia");
                $("#mdl_buku .digital").text(($(this).data("versi_digital") > 0) ? "Tersedia" : "Tidak Tersedia");
                $("#mdl_buku .Deskripsi").text($(this).data("desk"));
                // $("#mdl_buku .editor").val($(this).data("editor"));
                // $("#mdl_buku .editor").val($(this).data("editor"));
                // $("#mdl_buku .editor").val($(this).data("editor"));

                $("#mdl_buku").modal("toggle");
            });


            // $('#exampleModal').on('show.bs.modal', function(event) {
            //     var buku = $(this).data('gambar') // Button that triggered the modal
            //     var gambar = button.data('gambar') // Extract info from data-* attributes
            //     alert(buku)
            // })

        })
    </script>
</body>

</html>