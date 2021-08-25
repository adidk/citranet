<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pelanggan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href="<?= base_url('admin/daftar') ?>" class="btn btn-success">Tambah Pengguna Baru</a>
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="table table-bordered " role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>Id Customer</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>Status</th>
                                <th>Masa Aktif</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($pelanggan as $a) {
                            ?>
                                <tr class="bg-light ">
                                    <td><?= $i; ?></td>
                                    <td><?= $a['id']; ?></td>
                                    <td><?= $a['name']; ?></td>
                                    <td><?= $a['email']; ?></td>
                                    <td><?= $a['alamat']; ?></td>
                                    <td><?= $a['no_telep']; ?></td>
                                    <td><?= $a['status']; ?></td>
                                    <td><?= $a['masaaktif']; ?></td>
                                    <td><a href="<?= base_url('admin/aktivasi/') . $a['id'] ?>" class="btn btn-warning">Aktifasi</a></td>
                                <?php
                                $i++;
                            };
                                ?>
                        </tbody>


                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- /.card-body -->
</div>