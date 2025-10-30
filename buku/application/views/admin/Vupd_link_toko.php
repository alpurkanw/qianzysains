<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/") ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.admin/css/ionicons.min.css"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url("assets/") ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url("assets/") ?>plugins/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/") ?>plugins/buttons.dataTables.min.css">



    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url("assets/") ?>datepick/css/bootstrap-datepicker.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

</head>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view("admin/Tmp_navbar_top"); ?>
        <!-- /.navbar -->

        <?php $this->load->view("admin/Tmp_side_menu"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-2">

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <?php if ($page == 'index') {; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-outline card-primary">

                                <!-- /.card-header -->
                                <div class="card-body p-2">
                                    <!-- <button class="btn btn-primary btn_export">tes</button> -->
                                    <div class="tes_data">
                                        <table class="table table-sm table-bordered table-striped listbuku ">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>ID - Judul Buku</th>
                                                    <th></th>
                                                    <th>ISBN</th>
                                                    <th></th>
                                                    <!-- <th></th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($buks as $key => $buk) {

                                                ?>
                                                    <tr>
                                                        <td><?= $no; ?></td>
                                                        <td>
                                                            <a href="<?= base_url("admin/buku/openfupdpic/") . $buk->id; ?>">
                                                                <img src="<?= base_url("assets/image/buku/") . $buk->gambar; ?>" class="img img-bordered img-rounded " height="80px">
                                                            </a>
                                                            <?= $buk->id . "-" . $buk->judul; ?>
                                                        </td>
                                                        <td><?= $buk->tgl_terbit; ?></td>
                                                        <td><?= $buk->isbn; ?></td>
                                                        <!-- <td>
                                                            <a href="<?= base_url("admin/Buku/tambahPenulis/") . $buk->id; ?>" class="btn btn-primary btn-sm">Tambahkan</a>
                                                        </td> -->
                                                        <td>
                                                            <a href="<?= base_url("admin/Toko/tambahlink/") . $buk->id; ?>" class="btn btn-primary btn-sm">Upd. Link</a>

                                                        </td>

                                                    </tr>
                                                <?php
                                                    $no++;
                                                }; ?>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                    </div>

                <?php }; ?>
                <?php if ($page == "form_tambah") {; ?>
                    <div class="row">
                        <div class="col">

                            <div class="card shadow card-outline card-primary ">
                                <div class="card-header py-2">
                                    <h6 class="font-weight-bold text-primary ">Update Link Toko</h6>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="<?= base_url("admin/Toko/updatelinkproses"); ?>">

                                        <input type="hidden" name="id_buku" value="<?= $buku->id; ?>">

                                        <div class="row">

                                            <div class="col">

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Judul Buku</label>
                                                            <textarea class="form-control " disabled rows="3" name="link_shoope"><?= $buku->judul; ?>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Toko Shopee</label>
                                                            <textarea class="form-control " rows="3" name="link_shopee"><?= trim($buku->link_shopee); ?>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Tokopedia</label>
                                                            <textarea class="form-control " rows="3" name="link_toped"><?= $buku->link_tokopedia; ?>
                                                            </textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Toko Bukalapak</label>
                                                            <textarea class="form-control link_bukalapak " rows="3" name="link_bukalapak"><?= $buku->link_bukalapak; ?>
                                                            </textarea>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="form-group text-right">
                                                    <a href="<?= base_url("admin/Toko/opnListBuku"); ?>" class="btn  btn-secondary shadow-sm  mb-2 ">Kembali</a>
                                                    <button type="Submit" class="btn btn-primary shadow-sm  mb-2 "> Update</button>
                                                </div>

                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>


                            <!-- sdsdsdsd -->

                        </div>

                    </div>
                <?php }; ?>

                <?php if ($page == "form_update") {; ?>
                    <div class="row">
                        <div class="col">

                            <div class="card shadow card-outline card-primary ">
                                <div class="card-header py-2">
                                    <h6 class="font-weight-bold text-primary ">Form Update Buku</h6>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="<?= base_url("admin/Buku"); ?>/updateBukuProses" enctype="multipart/form-data">



                                        <div class="row">

                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img src="<?= base_url("assets/image/buku/") . $buku["gambar"]; ?>" class="img img-bordered img-rounded " height="400px" alt="" srcset="">



                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="row">

                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="inputEmail4">Judul Buku</label>
                                                            <input type="text" class="form-control" name="judul_buku" value="<?= $buku["judul"]; ?>" autofocus="">
                                                            <input type="hidden" class="form-control" name="id" value="<?= $buku["id"]; ?>">

                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">ISBN</label>
                                                            <input type="text" class="form-control" name="isbn" value="<?= $buku["isbn"]; ?>">
                                                        </div>

                                                    </div>
                                                </div>





                                                <div class="row">

                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Tanggal Terbit</label>
                                                            <input type="text" class="form-control" name="tgl_terbit" value="<?= $buku["tgl_terbit"]; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_beli">Ukuran</label>
                                                            <input type="text" class="form-control " name="ukuran" value="<?= $buku["ukuran"]; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Stok</label>
                                                            <select class="custom-select custom-select" name="stok">
                                                                <option value="1">Ada</option>
                                                                <option value="0">Tidak Tersedia</option>


                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Berat</label>
                                                            <input type="text" class="form-control " name="berat" value="<?= $buku["berat"]; ?>">
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="kateg">Kategori</label>
                                                            <select class="custom-select custom-select" name="kateg">
                                                                <option value="0" selected="">Pilih Kategori</option>
                                                                <?php

                                                                foreach ($kategs as $key => $kateg) {
                                                                ?>
                                                                    <option value="<?= $kateg->id; ?>" <?= ($kateg->id == $buku["kategori"]) ? "SELECTED" : ""; ?>><?= $kateg->kategori; ?></option>
                                                                <?php } ?>

                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Harga jual</label>
                                                            <input type="text" class="form-control text-right" name="harga_jual" value="<?= $buku["harga_jual"]; ?>">
                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="st_cetak">Versi Cetak</label>
                                                            <select class="custom-select custom-select" name="st_cetak">
                                                                <option value="kosong" selected="">Pilih Ketersediaan</option>
                                                                <option value="0" <?= ($buku["versi_cetak"] == 0) ? "SELECTED" : ""; ?>>Kosong</option>
                                                                <option value="1" <?= ($buku["versi_cetak"] == 1) ? "SELECTED" : ""; ?>>Ada</option>
                                                            </select>

                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="st_digital">Versi Digital</label>
                                                            <select class="custom-select custom-select" name="st_digital">
                                                                <option value="kosong" selected="">Pilih Ketersediaan</option>
                                                                <option value="0" <?= ($buku["versi_digital"] == 0) ? "SELECTED" : ""; ?>>Kosong</option>
                                                                <option value="1" <?= ($buku["versi_digital"] == 1) ? "SELECTED" : ""; ?>>Ada</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- <div class="row">
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Toko Shoope</label>
                                                            <textarea class="form-control " rows="3" name="link_shopee"> <?= $buku["link_shoope"]; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Toko Google</label>
                                                            <textarea class="form-control " rows="3" name="link_google"></textarea>
                                                        </div>
                                                    </div>

                                                </div> -->
                                                <div class="row">
                                                    <!-- <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Link Toko Tokopedia</label>
                                                            <textarea class="form-control " rows="3" name="link_toped"></textarea>
                                                        </div>

                                                    </div> -->
                                                    <div class="col">
                                                        <div class="form-group ">
                                                            <label for="harga_jual">Keterangan</label>
                                                            <textarea class="form-control " rows="3" name="ket"><?= $buku["desk"]; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group text-right">
                                                    <a href="<?= base_url("admin/Buku"); ?>" class="btn  btn-secondary shadow-sm  mb-2 "> Batal</a>
                                                    <button type="Submit" class="btn btn-primary shadow-sm  mb-2 "> Update</button>
                                                </div>

                                            </div>



                                        </div>
                                    </form>

                                </div>

                            </div>


                            <!-- sdsdsdsd -->

                        </div>

                    </div>



                <?php }; ?>
                <?php if ($page == "form_update_gambar") {; ?>
                    <div class="row">
                        <div class="col">

                            <div class="card shadow card-outline card-primary ">
                                <div class="card-header py-2">
                                    <h6 class="font-weight-bold text-primary ">Form Update Gambar Buku <br>
                                    </h6>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="<?= base_url("admin/Buku"); ?>/updpicproses" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col">
                                                <h4>
                                                    <?= $buku["judul"]; ?>
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-12 ">
                                                        <label for="file_gambar">Gambar Lama</label><br>
                                                        <img src="<?= base_url("assets/image/buku/") . $buku["gambar"]; ?>" class="img img-bordered img-rounded " height="400px" alt="" srcset="">


                                                        <input type="hidden" class="form-control " name="file_gambar_old" value="<?= $buku["gambar"]; ?>">
                                                        <input type="hidden" class="form-control " name="id" value="<?= $buku["id"]; ?>">


                                                    </div>
                                                </div>





                                            </div>

                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="file_gambar">Update Gambar Buku</label>
                                                            <input type="file" class="form-control-file" name="file_gambar" placeholder="file gambar">
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="form-group text-right">
                                                    <a href="<?= base_url("admin/Buku"); ?>" class="btn  btn-secondary shadow-sm  mb-2 "> Batal</a>
                                                    <button type="Submit" class="btn btn-primary shadow-sm  mb-2 "> Update</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>


                            <!-- sdsdsdsd -->

                        </div>

                    </div>



                <?php }; ?>

                <?php if ($page == "detail_buku") {
                    (empty($buku["gambar"])) ? $foto = "team-3.jpg" : $foto =  $buku["gambar"];
                ?>
                    <div class="row">
                        <div class="col">

                            <div class="card shadow card-outline card-primary ">
                                <div class="card-header py-2">
                                    <h6 class="font-weight-bold text-primary ">Detail Buku </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="<?= base_url("assets/image/buku/") . $foto; ?>" class="img mb-2 img-bordered img-rounded " height="400px">
                                            <br>
                                            <a href="<?= base_url("admin/buku/openfupdpic/") . $buku["id"]; ?>" class="btn btn-outline-primary btn-sm">Update Gambar</a>


                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col">
                                                    <strong>Judul Buku :</strong>
                                                    <p class="mb-0 h4">
                                                        <?= $buku["judul"]; ?>
                                                    </p>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <strong>Penulis :</strong>
                                                    <p class="mb-0">

                                                        <?php
                                                        echo (isset($Penulis)) ? implode(",", $Penulis) : "Penulis belum diInput ";

                                                        ?>

                                                        <a href="<?= base_url("admin/Buku/tambahPenulis/") . $buku["id"]; ?>" class="btn btn-outline-primary btn-sm"> Tambah Penulis</a>

                                                    </p>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <strong>Editor :</strong>
                                                    <p class="mb-0">
                                                        <?php
                                                        echo (isset($Editor)) ? implode(",", $Editor) : "Penulis belum diInput ";

                                                        ?>

                                                        <a href="<?= base_url("admin/Buku/tambahPenulis/") . $buku["id"]; ?>" class="btn btn-outline-primary btn-sm"> Tambah Editor</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <table style="width: 100%;">
                                                        <tr>
                                                            <td class="font-weight-bold">ISBN :</td>
                                                            <td><?= $buku["isbn"]; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Tanggal Terbit :</td>
                                                            <td><?= $buku["tgl_terbit"]; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Ukuran</td>
                                                            <td><?= $buku["ukuran"]; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Stok :</td>
                                                            <td><?= $buku["jum_stok"]; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Berat :</td>
                                                            <td><?= $buku["berat"]; ?> Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Versi Cetak :</td>
                                                            <td><?= ($buku["versi_cetak"] == 1) ? "Ada" : "Tidak ada"; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold">Versi Digital :</td>
                                                            <td><?= ($buku["versi_digital"] == 1) ? "Ada" : "Tidak ada";  ?></td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col">
                                                    <strong>Deskripsi :</strong>

                                                    <p class="text-left"><?= $buku["desk"]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="<?= base_url("admin/Buku/"); ?>" class="btn btn-info btn-sm">Kembali</a>
                                            <a href="<?= base_url("admin/Buku/hapus/") . $buku["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Mau Delete?')">Delete</a>
                                            <a href="<?= base_url("admin/Buku/updateOpenForm/") . $buku["id"]; ?>" class="btn btn-warning btn-sm">Update</a>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!-- sdsdsdsd -->

                        </div>

                    </div>
                <?php }; ?>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

    </div>
    <!-- ./wrapper -->




    <!-- jQuery -->
    <script src="<?= base_url("assets/") ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url("assets/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="<?= base_url("assets/") ?>dist/js/adminlte.min.js"></script>
    <!-- date-range-picker -->

    <!-- DataTables -->
    <script src="<?= base_url("assets/") ?>plugins/jquery.dataTables.min.js"></script>

    <!-- DataTables
    <script src="<?= base_url("assets/") ?>plugins/jquery.dataTables.min.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/dataTables.buttons.min.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/jszip.min.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/pdfmake.min.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/vfs_fonts.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/buttons.html5.min.js"></script>
    <script src="<?= base_url("assets/") ?>plugins/buttons.print.min.js"></script> -->





    <script>
        $(document).ready(function() {

            // $('.btn_export').click(function() {

            //     // alert('sds');
            //     myWin = window.open("", "", "width=700,height=500");
            //     myWin.document.write($('.tes_data').clone(true));
            // });

            //Date range picker

            $('.listbuku').DataTable();




        });
    </script>
</body>

</html>