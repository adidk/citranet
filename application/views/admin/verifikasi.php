<div class="card">
    <div class="card-header">
        <h3 class="card-title">Validasi pembayaran</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>NO</th>
                                <th>ID CUSTOMER</th>
                                <th>NAMA CUSTOMER</th>
                                <th>LAYANAN</th>
                                <th>TANGGAL UNGGAH</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($bayar as $a) {
                            ?>
                                <tr class="bg-light ">
                                    <td><?= $i; ?></td>
                                    <td><?= $a['idcustomer']; ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['layanan']; ?></td>
                                    <td><?= $a['d_created']; ?></td>
                                    <td><?= $a['status']; ?></td>
                                    <td><a href="<?= base_url('admin/detail/') . $a['idcustomer'] ?>" class="btn btn-warning">Detail</a></td>
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