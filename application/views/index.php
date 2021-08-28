<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<main id="main">

    <section id="hero">

        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/1.png)">
                    <div class="carousel-container">
                        <div class="container">
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">

                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients ">
        <div class="">
            <div class="mt-3 ">
                <div class=" ">
                    <h4 class="label-product text-center">PRODUK</h4>
                    <div class=" align-items-center justify-content-center" style="text-align: center;">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-2">
                                <img src="<?= base_url() ?>assets/img/produk/sho.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-2  ">
                                <img src="<?= base_url() ?>assets/img/produk/fast.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-2 ">
                                <img src="<?= base_url() ?>assets/img/produk/dia.png" class="img-fluid" alt="">
                            </div>

                            <div class="col-lg-2 ">
                                <img src="<?= base_url() ?>assets/img/produk/soholite.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-2  ">
                                <img src="<?= base_url() ?>assets/img/produk/infinite.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-2  ">
                                <img src="<?= base_url() ?>assets/img/produk/infinitelite.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-2  ">
                                <img src="<?= base_url() ?>assets/img/produk/infinitehome.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-2   ">
                                <img src="<?= base_url() ?>assets/img/produk/infinitestream.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Clients Section -->
    <!-- ======= Services Section ======= -->
    <!-- ======= Portfolio Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-6 col-md-5 ml-4">
                    <div class="box featured mb-3">
                        <h3>POPULAR POST</h3>
                        <div class="col-lg">
                            <div class="thumbnail material-hover"><a href="<?= base_url('welcome/pop') ?>" class="link-inverse" width="" height="350">
                                </a>
                                <img src="https://www.citra.net.id/cni-content/uploads/modules/posts/thumbs/20210802104451.png" style="text-align:center;" width="100%" height="auto" class="img-responsive">
                            </div>
                            <a href="<?= base_url('welcome/pop') ?>">
                                <? $popular['judul'] ?>
                            </a>
                            <div class="entry-content" style="text-align: justify;"> <?= htmlspecialchars_decode(character_limiter($popular['isi'], 250)); ?>
                                <a href="<?= base_url('welcome/pop/17') ?>" class="link-inverse">
                                    <i class="">Berita selengkapnya...</i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box featured mb-3">
                        <h3><?= $about['judul'] ?></h3>
                        <div class="row">
                            <div class="col-lg-7" style="text-align: justify;">
                                <?= htmlspecialchars_decode($about['isi']); ?>
                            </div>
                            <div class="col-lg-5"> <img src="assets/img/about.jpg" width="100%">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ml-3 col-md-6">
                    <div class="box featured mb-3">
                        <h3>BERITA LAINNYA</h3>
                        <ul>
                            <?php
                            foreach ($berita as $a) {
                            ?>
                                <li style="text-align: justify;">
                                    <p><a href="<?= base_url('welcome/pop/') . $a['id'] ?>"><?= character_limiter($a['judul'], 40); ?></a></p>
                                </li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                    <div class="box featured mb-3">
                        <h3>LOKASI HOTSPOT CITRANET</h3>
                        <section id="clients" class="clients ">
                            <div class="">
                                <div class=" ">
                                    <div class=" align-items-center justify-content-center" style="text-align: center;">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-lg-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-lg-4 ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>

                                            <div class="col-lg-4  ">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- End Clients Section -->
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Pricing Section -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <p>APA KATA MEREKA TENTANG CITRANET</p>
            </div>
            <div>
                <section id="pricing" class="pricing">
                    <div class="container" data-aos="fade-up">

                        <div class="row">

                            <div class="" style="text-align: center;">
                                <p><b>
                                        Tulis Ulasan Anda</b>
                                </p>
                                <a href="<?= base_url('welcome/ulasan'); ?>" class="btn-buy">Tulis</a>
                            </div>
                        </div>


                </section>

                <div class="row">

                    <?php foreach ($ulasan->result_array() as $a) { ?>
                        <div class="col-lg-5 m-3">
                            <div class="member d-flex align-items-start">

                                <div class="pic"><img src="<?= base_url('assets/img/ulasan/') . $a['gambar'] ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4><?= $a['nama']; ?></h4>
                                    <span><?= $a['email']; ?></span>
                                    <p><?= $a['ulasan'] ?></p>
                                    <div class="social">
                                        <?php if ($a['rating'] == 1) : ?>
                                            <a href=""><i class="ri-facebook-fill"></i></a>
                                        <?php elseif ($a['rating'] == 2) : ?>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                        <?php elseif ($a['rating'] == 3) : ?>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                        <?php elseif ($a['rating'] == 4) : ?>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                        <?php elseif ($a['rating'] == 5) : ?>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                            <a href=""> <i class="ri-star-fill"></i></a>
                                        <?php endif ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>




                </div>

                <div>
                </div>
            </div>
    </section><!-- End Team Section -->

</main>