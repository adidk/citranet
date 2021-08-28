<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light" style="text-align: center;">
            <h3><?= $user['name'] ?></h3>
        </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
                <li class="nav-item">
                    <a href="<?= base_url('admin')?>" class="nav-link <?=$dashboard?>">
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/daftarpelanggan') ?>" class="nav-link <?=$daftar?>">
                        <p>
                            Pelanggan
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin/validasipembayaran') ?>" class="nav-link <?=$validasi?>">
                        <p>
                            Validasi Pembayaran
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin/keluhan') ?>" class="nav-link <?=$keluhanactivate?>">
                        <p>
                            Keluhan
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('admin/berita') ?>" class="nav-link <?=$berita?>">
                        <p>
                            Berita
                        </p>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">