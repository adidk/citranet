<!-- Begin Page Content -->
<div class="card">

    <!-- Page Heading -->
    <h1 class="h3  ml-5 mt-5"><?php echo $tittle ?></h1>
    <div class="row m-5">
        <div class="col-lg">
            <?= form_open_multipart() ?>
            <div class="form-group row ">
                <div class="form-group col-sm-6">
                    <div class="form-group row">
                        <label for="email" class="col-sm-6">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['nama']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-6 col-form-label">Id Customer</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $bayar['idcustomer']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Layanan</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['layanan'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Bank</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['bank'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Nomor Rekening</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['norekening'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Atas Nama Rekening</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['annorekening'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Nominal </label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['nominal'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Status Pembayaran</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bayar['status'] ?>" readonly>
                        </div>
                    </div>
                </div>


                <div class="form-group col-sm-6">
                    <div class="col-sm-6 col-form-label"><b>BUKTI PEMBAYARAN</b></div>

                    <div class="">
                        <img src="<?= base_url('assets/bukti/') . $bayar['bukti'] ?>" width="100%" height="auto">
                    </div>
                </div>

                <?php if ($bayar['status'] == null) : ?>

                    <div class="col-lg">
                        <div class="col-sm-10">
                            <a href="<?= base_url('admin/terima/') . $bayar['idcustomer'] ?>" class="btn btn-success mb-3">Terima</a>
                            <a href="<?= base_url('admin/tolak/') . $bayar['idcustomer'] ?>" class="btn btn-danger mb-3">Tolak</a>
                        </div>
                    </div>
                <?php endif ?>


            </div>
            </form>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->