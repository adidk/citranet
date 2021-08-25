<!-- Begin Page Content -->
<div class="card">

    <!-- Page Heading -->
    <h1 class="h3  ml-5 mt-5"><?php echo $tittle ?></h1>
    <div class="row m-5">
        <div class="col-lg">
            <?= form_open_multipart() ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['name']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $bayar['alamat']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $bayar['nomor'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Request Kontak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $bayar['kontak'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Respon Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="response" name="response" value="<?= $bayar['response'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status" value="<?= $bayar['status'] ?>" readonly>
                </div>
            </div>

            <? if ($bayar['status'] == 'sudah ditindak lanjuti') {
                # code...
            } ?>
            <?php if ($bayar['status'] != 'sudah ditindak lanjuti') : ?>
                <div class="col-lg">
                    <div class="col-sm-10">
                        <a href="<?= base_url('admin/tindakankeluhan/') . $bayar['id'] ?>" class="btn btn-danger mb-3">TINDAK KELUHAN</a>
                    </div>
                </div>
            <?php endif ?>

            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->