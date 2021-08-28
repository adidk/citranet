<div class="card">
    <div class="card-header">
        <h3 class="card-title">Keluhan Pelanggan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
           
            <div class="row">
                <div class="col-sm-12">
                    <table id="example" class="table table-bordered " role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th>No</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ALAMAT</th>
                                <th>WAKTU DAFTAR</th>
                                <th>REQUEST KONTAK</th>
                                <th>STATUS</th>
                                <th>AKSI </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($keluhan as $a) {
                            ?>
                                <tr class="bg-light ">
                                    <td><?= $i; ?></td>
                                    <td><?= $a['name']; ?></td>
                                    <td><?= $a['email']; ?></td>
                                    <td><?= $a['alamat']; ?></td>
                                    <td><?= $a['d_created']; ?></td>
                                    <td><?= $a['kontak']; ?></td>
                                    <td><?= $a['status']; ?></td>
                                    <td><a href="<?= base_url('admin/detailkeluhan/') . $a['id'] ?>" class="btn btn-warning">Detail</a></td>
                                <?php
                                $i++;
                            };
                                ?>
                        </tbody>
                       

                        <script type="text/javascript" src="<?php echo base_url('assets/vendor/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/vendor/adminlte/plugins/datatables/datatables.min.js') ?>"></script>
                        <script type="text/javascript" src="<?php echo base_url('assets/vendor/adminlte/plugins/dataTables.bootstrap.min.js') ?>"></script>
                        <script>
                            var tabel = null;



                            $(document).ready(function() {
                                tabel = $('#table-keluhan').DataTable({

                                });


                            });
                        </script>
                    </table>
                </div>
            </div>
        
        </div>
    </div>
    <!-- /.card-body -->
</div>