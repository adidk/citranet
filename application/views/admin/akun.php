<!-- Begin Page Content -->
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<h2 class="ml-5 mt-3">Welcome <?= $user['name'] ?>
</h2>
<?= $this->session->flashdata('message') ?>

<div class="row ml-5 mt-2">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="profile-pic mb-3 mt-3">
                    <img src="<?= base_url('/assets/bukti/') . $user['image'] ?>" width="150" class="rounded-circle" alt="user" />

                    <h4 class="mt-3 mb-0"><?= $user['name'] ?> </h4>
                    <h4 class="mb-0"><?= $user['email'] ?></h4>
                    <button id="profil" class="btn btn-primary center-block mt-3">Ubah Profil</button>

                </div>
            </div>

        </div>
    </div>
    <div class="gantiprofil col-lg-5" style="display: none;">
        <div class="card">
            <div class="card-body">
                <?= form_open_multipart('admin/unggah'); ?>

                <div class="form-group mt-3">
                    <small class="form-text text-muted">Pilih Gambar Profilmu</small>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
                <button type="sumbit" class="btn btn-primary center-block">Simpan</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

</div>
<div class="row ml-5 ">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="" class="mt-3" method="POST">
                    <div class="form-group">
                        <small id="name" class="form-text text-muted">Nama</small>
                        <input type="text" class="form-control" aria-describedby="name" placeholder="First Name" value="<?= $user['name'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <small id="name" class="form-text text-muted">Email</small>
                        <input type="text" class="form-control" aria-describedby="name" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <small id="name" class="form-text text-muted">Bergabung pada</small>
                        <input type="text" class="form-control" aria-describedby="name" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                    </div>
                </form>
                <button type="sumbit" id="ganti" class="btn btn-primary mt-3">Ubah Password</button>

            </div>

        </div>
    </div>

    <div class="gantipassword col-lg-6" style="display: none;">
        <div class="card">
            <div class="card-body">
                <form class="mt-3" method="POST">
                    <div class="form-group">
                        <small id="name" class="form-text text-muted">Password</small>
                        <input type="password" class="form-control" id="current_pass" aria-describedby="name" placeholder="Password" name="password" value="">
                        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <small id="name" class="form-text text-muted">Password</small>
                        <input type="password" class="form-control" name="password1" aria-describedby="name" placeholder="Ulangi password" value="">
                        <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="sumbit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<script>
    $(document).ready(function() {
        $('#profil').click(function() {
            $('.gantiprofil').toggle("slide");
        });
        $('#ganti').click(function() {
            $('.gantipassword').toggle("slide");
        });
    });
</script>
<!-- End of Main Content -->