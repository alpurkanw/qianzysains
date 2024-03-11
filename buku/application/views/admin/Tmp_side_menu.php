<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php $this->load->view("VlogoMenu"); ?>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel   mb-3 d-flex">

            <div class="info">
                <a href="<?= base_url("admin/Home") ?>" class="d-block"><?= $_SESSION["nama"]; ?> <br></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-header">DASHBOARD</li> -->
                <!-- <li class="nav-item">
                    <a href="<?= base_url("owner/CdshPenj") ?>" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Penjualan
                        </p>
                    </a>
                </li>
                <li class="nav-header">TRANSAKSI</li>

                <li class="nav-item">
                    <a href="<?= base_url("owner/Ckoreksi") ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Koreksi
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url("admin/Team") ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            TEAM Qianzy
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/Kategori") ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            LIST KATEGORI
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/Buku") ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            LIST BUKU
                        </p>
                    </a>
                </li>




                <li class="nav-item">
                    <a href="<?= base_url("Auth/logout") ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            LOGOUT
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>