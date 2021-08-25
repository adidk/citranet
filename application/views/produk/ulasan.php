<main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Ulasan</h4>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">

                <div class="row">
                    <div class="col-lg-7  mt-5 mt-lg-0" id="example">

                        <?= $this->session->flashdata('message') ?>
                        <?= form_open_multipart(''); ?>
                        <div class="col-md form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id="Nama" placeholder="nama" required>
                        </div>
                        <div class="col-md  mt-3 ">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Rating Kami</label>
                            <select class="form-control" id="rating" name="rating">
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Ketik Ulasan Anda</label>
                            <textarea class="form-control" name="ulasan" id="ulasan" placeholder="Tulis ulasan anda" required>
                            </textarea>
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
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->