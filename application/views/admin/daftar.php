<div class="col-md">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Daftar User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?= $this->session->flashdata('message') ?>
        <form method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Nama Lengkap">
                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Nama Lengkap">
                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomor" name="no_telep" value="<?php echo set_value('no_telep'); ?>" placeholder="Nomor telepon dimulai dari 62+++ ">
                    <?php echo form_error('no_telep', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text-area" class="form-control" id="alamat" name="alamat" placeholder="">
                    <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>