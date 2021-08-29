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
            <div class="mt-3">
                <div class=" ">
                    <h4 class="label-product text-center">PRODUK</h4>
                    <div class=" align-items-center justify-content-center" style="text-align: center;">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/sho.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/fast.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/dia.png" class="img-fluid" alt="">
                            </div>

                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/soholite.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/infinite.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/infinitelite.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 col-md-2">
                                <img src="<?= base_url() ?>assets/img/produk/infinitehome.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 col-md-2">
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
                <div class="col-lg-6 col-md-5 ml-2 mr-2">
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
                <div class="col-lg-5 ml-2 mr-2 col-md-6">
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
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <img src="assets/img/20150605032338.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="col-6 col-md-4">
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
            <div class="section-title text-center">
                <p>APA KATA MEREKA TENTANG CITRANET</p>
            </div>
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="" style="text-align: center;">
                            <p><b>Tulis Ulasan Anda</b></p>
                            <a href="<?= base_url('welcome/ulasan'); ?>" class="btn-buy">Tulis</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $count_ulasan = $this->db->count_all_results('ulasan');
                        $jumlah_slide = ceil($count_ulasan / 2); ?>
                        <?php for ($i = 1; $i <= $jumlah_slide; $i++) { ?>
                            <?php
                            $order = $i * 2;
                            $seleksi = $order - 2;
                            $ulasan = $this->db->get('ulasan', 2, $seleksi);
                            ?>
                            <?php
                            if ($order - 1 == 1) {
                                echo '<div class="carousel-item active pd-10">';
                            } else {
                                echo '<div class="carousel-item pd-10">';
                            }
                            ?>

                            <div class="row">
                                <?php foreach ($ulasan->result_array() as $ul) : ?>
                                    <div class="col-md-6 col-sm-12 mt-3 mb-3">
                                        <div class="card border-0 shadow">
                                            <div class="card-body border-0">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="<?= base_url('assets/img/ulasan/') . $ul['gambar'] ?>" alt="" class="img-fluid" style="height:100px;">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="member-info">
                                                            <h4><?= $ul['nama']; ?></h4>
                                                            <span><?= $ul['email']; ?></span>
                                                            <p><?= $ul['ulasan'] ?></p>
                                                            <div class="social">
                                                                <?php if ($ul['rating'] == 1) : ?>
                                                                    <i class="ri-facebook-fill"></i>
                                                                <?php elseif ($ul['rating'] == 2) : ?>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                <?php elseif ($ul['rating'] == 3) : ?>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                <?php elseif ($ul['rating'] == 4) : ?>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                <?php elseif ($ul['rating'] == 5) : ?>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                    <i class="ri-star-fill"></i>
                                                                <?php endif ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                    </div>
                <?php }; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end carousel -->

        </div>
        </div>
    </section><!-- End Team Section -->

</main>