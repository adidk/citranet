<div class="card">
    <div class="card-header">
        <h3 class="card-title">Berita</h3>
    </div>

    
    <!-- /.card-header -->
    <div class="card-body">
        <a href="<?= base_url('admin/inputberita') ?>" class="btn btn-primary ">Tambah Berita Baru</a>
        <div class="mt-4"> <?= $this->session->flashdata('message') ?>
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="table table-bordered " role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($databerita as $a) {
                            ?>
                                <tr class="bg-light ">
                                    <td><?= $i; ?></td>
                                    <td><?= $a['judul']; ?></td>
                                    
                                    <td><a href="<?= base_url('admin/detailberita/') . $a['id'] ?>" class="btn btn-warning">Detail</a></td>
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