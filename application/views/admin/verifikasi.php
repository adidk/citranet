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
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID CUSTOMER</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">NAMA CUSTOMER</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">LAYANAN</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">BANK</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">NOMOR REKENING</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">ATAS NAMA REKENING</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">NOMINAL PEMBAYARAN</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Aksi</th>
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
                                    <td><?= $a['bank']; ?></td>
                                    <td><?= $a['norekening']; ?></td>
                                    <td><?= $a['annorekening']; ?></td>
                                    <td><?= $a['nominal']; ?></td>
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
