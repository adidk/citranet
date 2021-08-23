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
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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

                <div class="col-lg-5 col-md-5 ml-4">
                    <div class="box featured">
                        <h3>POPULAR POST</h3>
                        <div class="col-lg">
                            <div class="thumbnail material-hover"><a href="<?= base_url('welcome/pop') ?>" class="link-inverse" width="" height="350">
                                </a>
                                <img src="https://www.citra.net.id/cni-content/uploads/modules/posts/thumbs/20210802104451.png" style="text-align:center;" width="100%" height="auto" class="img-responsive">
                            </div>
                            <a href="<?= base_url('welcome/pop') ?>">
                                <h2 class="text-align-center">TERIMA KASIH SOBAT INTERNET!</h2>
                            </a>
                            <div class="entry-content" style="text-align: justify;"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt fugit eveniet, quia odit explicabo alias reprehenderit. Quas, iusto? Pariatur aut nobis distinctio? Quam veniam maiores et vero totam deserunt itaque!
                                <br>
                                <a href="<?= base_url('welcome/pop') ?>" class="link-inverse">
                                    <i class="">Berita selengkapnya...</i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box featured">
                        <h3>ABOUT CITRANET</h3>
                        <div class="row">
                            <div class="col-lg-7">
                                <p style="text-align: justify;">Kami adalah Perusahaan Internet Service Provider yang berbasis di Yogyakarta dengan pengalaman selama lebih dari belasan tahun.
                                    Pelayanan terbaik dari sisi kualitas, memuaskan dengan harga yang terjangkau merupakan tujuan utama kami. Diwakili oleh tenaga yang ahli di bidangnya, kami mendedikasikan diri untuk memastikan kualitas terbaik yang kami berikan kepada pelanggan.
                                    Pengalaman kami dalam teknologi informasi mendorong kami terus aktif dalam berinovasi meningkatkan kecepatan akses sesuai dengan tuntutan zaman.</p>
                            </div>
                            <div class="col-lg-5"> <img src="assets/img/about.jpg" width="100%">

                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ml-3 col-md-6">
                    <div class="box featured">
                        <h3>BERITA LAINNYA</h3>
                        <ul>
                            <li><a href="" style="color: #414141;"> INFINITE STREAM: PAKET BARU INTERNET ...</a></li>
                            <li><a href="" style="color: #414141;"> LOMBA DESAIN TUMBLER CITRANET</a></li>
                            <li><a href="" style="color: #414141;"> CITRANET DUKUNG AKSES INTERNET UNTUK ...</a></li>
                            <li><a href="" style="color: #414141;"> KAMI SUDAH DI VAKSIN </a></li>
                            <li><a href="" style="color: #414141;"> BERKOLABORASI DENGAN PEMKOT JOGJA, CITRANET ...</a></li>
                        </ul>

                    </div>
                    <div class="box featured">
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

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>11 Agustus 2021</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In culpa placeat dolores veritatis dolorem distinctio voluptate esse nulla, quas doloribus. Deleniti numquam, veritatis natus laboriosam suscipit quasi hic odit voluptas.</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>1 Agustus 2021</span>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis ipsum placeat incidunt aut obcaecati inventore. Repellendus, dolorem quia! Sit ipsam omnis iusto odit tempora voluptas at molestiae magni ipsa nulla.</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>8 juli 2020</span>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita fugiat nisi ipsa. Commodi obcaecati doloremque suscipit vero. Veritatis unde ipsa aspernatur, deserunt minima nostrum cumque praesentium ratione obcaecati, quo repellat.</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>8 februari 2020</span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At voluptates deleniti qui? Odit totam repudiandae in aperiam! Aliquid aperiam voluptate, sit, et voluptatibus, ipsam dignissimos ab culpa perferendis pariatur ducimus.</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <section id="pricing" class="pricing">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="" style="text-align: center;">
                            <p><b>
                                   Tulis Ulasan Anda</b>
                            </p>
                            <a href="<?= base_url('welcome/ulasan'); ?>" class="btn-buy">Hubungi Kami</a>
                        </div>
                    </div>


            </section>
            <div>
            </div>
        </div>
    </section><!-- End Team Section -->

</main>