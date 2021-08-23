<!-- Begin Page Content -->
<div class="card">

    <!-- Page Heading -->
    <h1 class="h3  ml-5 mt-5"><?php echo $tittle ?></h1>
    <div class="row m-5">
        <div class="col-lg">
            <?= form_open_multipart() ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2">NAMA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['name']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">ALAMAT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['alamat']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">LAYANAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['nomor'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">bank</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['kontak'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NOMOR REKENING</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['response'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['status'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">STATUS PEMBAYARAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['status'] ?>" readonly>
                </div>
            </div>
           
            <div class="col-lg">
                <div class="col-sm-10">
                    <a href="<?=base_url('admin/tindakankeluhan/'). $bayar['id']?>" class="btn btn-danger mb-3" >TINDAK KELUHAN</a>
                </div>
            </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->