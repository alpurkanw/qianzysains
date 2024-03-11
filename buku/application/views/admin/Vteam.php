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
                                <div class="card-header p-1">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4>List Team </h4>
                                        <div class="input-container">
                                            <a href="<?= base_url("admin/Team/tambah"); ?>" class="btn btn-outline-primary">Tambah Team</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-2">
                                    <!-- <button class="btn btn-primary btn_export">tes</button> -->
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <div class="tes_data">
                                        <table id="list_lap_bar" class="table table-sm table-bordered table-striped  ">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Urutan Tampil </th>
                                                    <th>Nama </th>
                                                    <th>Jabatan</th>
                                                    <th>Email</th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                // print_r($teams);
                                                foreach ($teams as $key => $team) {

                                                ?>
                                                    <tr>
                                                        <td><?= $no; ?></td>
                                                        <td><?= $team->urutan; ?></td>
                                                        <td><?= $team->nama; ?></td>
                                                        <td><?= $team->jabatan; ?></td>
                                                        <td><?= $team->email; ?></td>
                                                        <td>

                                                            <a href="<?= base_url("admin/Team/hapus/") . $team->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Dihapus?')">delete</a>
                                                            <!-- <button type="button" class="btn btn-sm btn-danger"> Detail</button> -->
                                                            <a href="<?= base_url("admin/Team/updateTeamOpenForm/") . $team->id; ?>" class="btn btn-warning btn-sm">Update</a>
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
                                    <h6 class="font-weight-bold text-primary ">Form Tambah Team</h6>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="<?= base_url("admin/Team/tambah_proses"); ?>" enctype="multipart/form-data">


                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Nama</label>
                                                    <input type="text" class="form-control " name="nama" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Jabatan</label>
                                                    <input type="text" class="form-control " name="jabatan" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Email</label>
                                                    <input type="text" class="form-control " name="email" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="file_gambar">Gambar </label>
                                                    <input type="file" class="form-control-file" name="file_gambar" placeholder="file gambar">
                                                    <span class="small">Hanya jenis gambar gif|jpg|png|jpeg yang boleh diupload dan tidak boleh lebih dari 2 MB </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="IG">IG</label>
                                                    <input type="text" class="form-control " name="ig" placeholder="Tambahkan link profile Instagram">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">FB</label>
                                                    <input type="text" class="form-control " name="fb" placeholder="Tambahkan link profile facebook">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="col">
                                                    <div class="form-group ">
                                                        <label for="harga_beli">Twitter</label>
                                                        <input type="text" class="form-control " name="twt" placeholder="Tambahkan link profile Twitter">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_jual">Keterangan</label>
                                                    <textarea class="form-control " rows="5" name="ket" placeholder="Berisikan deskripsi singkat "></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group text-right">
                                                    <a href="https://kiosprogram.com/admin/" class="btn  btn-secondary shadow-sm  mb-2 "> Batal</a>
                                                    <button type="Submit" class="btn btn-primary shadow-sm  mb-2 "><i class="fas fa-plus " onclick="return submit_data_(event);"></i> Submit</button>
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
                                    <h6 class="font-weight-bold text-primary ">Form Tambah Team</h6>
                                </div>
                                <div class="card-body">

                                    <form method="POST" action="<?= base_url("admin/Team/updateTeamProses"); ?>" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col ">
                                                <?php
                                                ($team["gambar"]) ? $foto = $team["gambar"] : $foto = "empty_image.png";
                                                // echo $foto;
                                                ?>
                                                <img src="<?= base_url("assets/image/team/") . $foto; ?>"><br>
                                                <div class="form-group">
                                                    <label for="file_gambar">Ubah Gambar </label>
                                                    <input type="file" class="form-control-file" name="file_gambar" placeholder="file gambar">
                                                </div>
                                                <br>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Nama</label>
                                                    <input type="hidden" class="form-control " name="file_gambar_old" value="<?= $team["gambar"]; ?>">
                                                    <input type="hidden" class="form-control " name="id" value="<?= $team["id"]; ?>">
                                                    <input type="text" class="form-control " name="nama" value="<?= $team["nama"]; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Jabatan</label>
                                                    <input type="text" class="form-control " name="jabatan" value="<?= $team["jabatan"]; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="IG">IG</label>
                                                    <input type="text" class="form-control " name="ig" value="<?= $team["ig"]; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">FB</label>
                                                    <input type="text" class="form-control " name="fb" value="<?= $team["fb"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="col">
                                                    <div class="form-group ">
                                                        <label for="harga_beli">Twitter</label>
                                                        <input type="text" class="form-control " name="twt" value="<?= $team["twt"]; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_beli">Email</label>
                                                    <input type="text" class="form-control " name="email" value="<?= $team["email"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                            <div class="col">
                                                <div class="form-group ">
                                                    <label for="harga_jual">Keterangan</label>
                                                    <textarea class="form-control " rows="5" name="ket"><?= $team["ket"]; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group text-right">
                                                    <a href="https://kiosprogram.com/admin/" class="btn  btn-secondary shadow-sm  mb-2 "> Batal</a>
                                                    <button type="Submit" class="btn btn-primary shadow-sm  mb-2 "><i class="fas fa-plus " onclick="return submit_data_(event);"></i> Submit</button>
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




    <script>
        $(document).ready(function() {

            // $('.btn_export').click(function() {

            //     // alert('sds');
            //     myWin = window.open("", "", "width=700,height=500");
            //     myWin.document.write($('.tes_data').clone(true));
            // });

            //Date range picker

            // $('#list_lap_bar').DataTable();

        });
    </script>
</body>

</html>