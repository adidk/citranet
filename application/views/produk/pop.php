<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog Single</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li>Blog Single</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="<?= base_url('/assets/img/berita/') . $berita['gambar'] ?>" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html"><?= $berita['judul'] ?></a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $berita['by'] ?></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $berita['dcreated'] ?></time></a></li>

              </ul>
            </div>

            <div class="entry-content">

              <?= htmlspecialchars_decode($berita['isi']) ?>

            </div>



          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->



      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->