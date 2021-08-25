<main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4><?= $produk2; ?></h4>
                <ol>
                    <li><?= $produk1; ?></a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">

                <div class="row">
                    <div class="col-lg-7  mt-5 mt-lg-0">

                        <?= $this->session->flashdata('message') ?>
                        <?= form_open_multipart(''); ?>
                        <div class="col-md form-group">
                            <input type="text" name="nama" class="form-control" id="Nama" placeholder="nama" required>
                        </div>
                        <div class="col-md  mt-3 ">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="idcustomer" id="idcustomer" placeholder="Id Customer" required>
                        </div>

                        <div class="form-group mt-3">
                            <select class="form-control" id="layanan" name="layanan">
                                <option value="">--Pilih Layanan--</option>
                                <option value="BOARDBOAND SOHO">BOARDBOAND SOHO</option>
                                <option value="BOARDBOAND SOHO">BOARDBOAND SOHO LITE</option>
                                <option value="INFINITE LITE">INFINITE LITE</option>
                                <option value="INFINITE HOME">INFINITE HOME</option>
                                <option value="INFINITE COMBO">INFINITE COMBO</option>
                                <option value="FAST">FAST</option>
                                <option value="DEDICATED INTERNET ACCESS">DEDICATED INTERNET ACCESS</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" id="bank" name="bank">
                                <option value="">--Pilih Tujuan Pembayaran--</option>
                                <option value="BCA">BCA</option>
                                <option value="BANK CIMB NIAGA">BANK CIMB NIAGA</option>
                                <option value="BANK MANDIRI">BANK MANDIRI</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="norekening" id="norekening" placeholder="Nomor rekening Bank" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="annorekening" id="annorekening" placeholder="Atas Nama Nomor rekening" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Nominal Pembayaran" required>
                        </div>
                        <div class="form-group mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto">
                            </div>
                        </div>
                        <button type="submit" class=" col-xl-12 col-lg mt-3 btn btn-danger btn-user btn-block">
                            Kirim
                        </button>

                        <?= form_close(); ?>

                    </div>
                    <div class="col-lg-5">
                        <p><b>CITRANET sangat mengharapkan adanya masukan/saran/kritik dari Anda demi kemajuan Pelayanan CITRANET. Anda dapat menghubungi kami di :</b></p>
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <p><b>Lokasi:</b></p>
                                <p>Jl Petung No 31 Papringan Yogyakarta, INDONESIA 55281
                                    Phone +62-274-554444 / +62-274-553066 Fax +62-274-553055</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <p><b>Telepon:</b></p>
                                <p> +62-274-554444 / +62-274-553066</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p><b>fax:<b></p>
                                <p>+62-274-553055</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md center ">


                    </div>

                    <!-- <div class="col-md center mt-5 mt-lg"> -->

                    <div class="mt-4">
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1953039307423!2d109.24182421420625!3d-7.443631575411108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c2ee76fc8e9%3A0x99832f37e9ce3337!2sCitranet%20Purwokerto!5e0!3m2!1sen!2sid!4v1629731769407!5m2!1sen!2sid" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->