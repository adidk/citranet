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
                    <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['nama']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">ID CUSTOMMER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['idcustomer']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">LAYANAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['layanan'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">bank</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['bank'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NOMOR REKENING</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['norekening'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">ATAS NAMA REKENING</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['annorekening'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">NOMINAL PEMBAYARAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['nominal'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">STATUS PEMBAYARAN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['status'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2 col-form-label"><b>BUKTI PEMBAYARAN</b></div>
                <div class="col-sm-10">
                    <div class="row">

                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/bukti/') . $bayar['bukti'] ?>">
                            <?= $bayar['bukti']?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="col-sm-10">
                    <a href="<?=base_url('admin/tolak/'). $bayar['idcustomer']?>" class="btn btn-danger mb-3" >Tolak</a>
                    <a href="<?=base_url('admin/terima/'). $bayar['idcustomer']?>" class="btn btn-danger mb-3" >Terima</a>
                </div>
            </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->