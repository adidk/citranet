<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-7  mt-5 mt-lg-0">

                    <?= $this->session->flashdata('message') ?>
                    <form method="post" action="">
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" id="kontak" name="kontak">
                                <option value="">--Pilih Layanan--</option>
                                <option value="Request Follow Up Via Telepon">Request Follow Up Via Telepon</option>
                                <option value="Pengiriman Penawaran Via Email">Pengiriman Penawaran Via Email</option>
                                <option value="Keluhan Pelanggan">Keluhan Pelanggan</option>
                            </select>
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
                            <textarea class="form-control" name="keluhan" id="keluhan" rows="5" placeholder="Tulis disini" required></textarea>
                        </div>
                        <button type="submit" class=" col-xl-12 col-lg mt-3 btn btn-danger btn-user btn-block">
                            Kirim
                        </button>

                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="info mb-5">
                        <h4>Lokasi:</h4>
                        <div class="address  mt-3 mb-3">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Head Office :</p>
                                <p>
                                    Jl Petung No 31 Papringan Yogyakarta, INDONESIA 55281
                                    Phone +62-274-554444 / +62-274-553066 Fax +62-274-553055</p>
                            </div>
                        </div>
                        <div class="address  mt-3 mb-3">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Solo :</p>
                                <p>
                                    Jl Petung No 31 Papringan Yogyakarta, INDONESIA 55281
                                    Phone +62-274-554444 / +62-274-553066 Fax +62-274-553055</p>
                            </div>
                        </div>
                        <div class="address  mt-3 mb-3">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Purwokerto :</p>
                                <p>
                                    Jl Petung No 31 Papringan Yogyakarta, INDONESIA 55281
                                    Phone +62-274-554444 / +62-274-553066 Fax +62-274-553055</p>
                            </div>
                        </div>
                        <div class="address  mt-3 mb-3">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Tegal :</p>
                                <p>
                                    Jl Petung No 31 Papringan Yogyakarta, INDONESIA 55281
                                    Phone +62-274-554444 / +62-274-553066 Fax +62-274-553055</p>
                            </div>
                        </div>
                        <div>
                            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>


                </div>



            </div>

        </div>
    </section>

</main><!-- End #main -->

<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 3,
            center: {
                lat: -28.024,
                lng: 140.887
            },
        });
        // Create an array of alphabetical characters used to label the markers.
        const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        const markers = locations.map((location, i) => {
            return new google.maps.Marker({
                position: location,
                label: labels[i % labels.length],
            });
        });
        // Add a marker clusterer to manage the markers.
        new MarkerClusterer(map, markers, {
            imagePath: "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
        });
    }
    const locations = [{
            lat: -31.56391,
            lng: 147.154312
        },
        {
            lat: -33.718234,
            lng: 150.363181
        },
        {
            lat: -33.727111,
            lng: 150.371124
        },
        {
            lat: -33.848588,
            lng: 151.209834
        },
        {
            lat: -33.851702,
            lng: 151.216968
        },
        {
            lat: -34.671264,
            lng: 150.863657
        },
        {
            lat: -35.304724,
            lng: 148.662905
        },
        {
            lat: -36.817685,
            lng: 175.699196
        },
        {
            lat: -36.828611,
            lng: 175.790222
        },
        {
            lat: -37.75,
            lng: 145.116667
        },
        {
            lat: -37.759859,
            lng: 145.128708
        },
        {
            lat: -37.765015,
            lng: 145.133858
        },
        {
            lat: -37.770104,
            lng: 145.143299
        },
        {
            lat: -37.7737,
            lng: 145.145187
        },
        {
            lat: -37.774785,
            lng: 145.137978
        },
        {
            lat: -37.819616,
            lng: 144.968119
        },
        {
            lat: -38.330766,
            lng: 144.695692
        },
        {
            lat: -39.927193,
            lng: 175.053218
        },
        {
            lat: -41.330162,
            lng: 174.865694
        },
        {
            lat: -42.734358,
            lng: 147.439506
        },
        {
            lat: -42.734358,
            lng: 147.501315
        },
        {
            lat: -42.735258,
            lng: 147.438
        },
        {
            lat: -43.999792,
            lng: 170.463352
        },
    ];
</script>