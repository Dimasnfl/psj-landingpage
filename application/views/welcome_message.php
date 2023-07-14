<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homepage</title>

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- ICON JUDUL -->
  <link href="assets/img/logo-psj-32.png" rel="icon">
  <!-- <link href="assets/img/logo-psj-180.png" rel="psj-icon"> -->

  <!-- Link Font Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  CSS -->
  <!-- <link href="assets/css/carousel.css" rel="stylesheet"> -->

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= NAVBAR ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">
      <div class="row justify-content-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <div class="col-xl-9 d-flex align-items-center">
          <a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera" target="_blank" class="logo mr-auto"><img src="assets/img/logo-psj.png" alt="" class="img-fluid"></a>
          <h1 class="logo mr-auto"><a href="">SIDUDA</a><br />
            <p class="logoz mr-auto">Sistem Informasi Produk<br />Daerah Kabupaten Bandung</p>
          </h1>
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#bs-carousel">Home</a></li>
              <li><a href="#faq">Info</a></li>
              <li><a href="#pricing">Product</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="drop-down"><a href="">More</a>
                <ul>
                  <li><a href="#portfolio">Galery</a></li>
                  <li><a href="#testimonials">Development Team</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <a href="http://localhost/psj-monitoring" target="_blank" class="get-started-btn scrollto">Administrator</a>
          <!-- https://sidutama.web.id/administrator/ -->
        </div>
      </div>
    </div>
  </header>



  <!-- HOME -->
  <main id="main">
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel">
      <div class="overlay"></div>
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <img src="assets/img/logo-univ.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>Universitas Widyatama</h1>
            </hgroup>
            <div><a href="https://www.widyatama.ac.id/" target="_blank" style="margin:20px auto" class="btn btn-outline-success">Lihat Selengkapnya</a></div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">
            <img src="assets/img/logo-kadin.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>KADIN Kota Bandung</h1>
            </hgroup>
            <div><a href="https://kadinbandung.or.id/" target="_blank" style="margin:20px auto" class="btn btn-outline-success">Lihat Selengkapnya</a></div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">
            <img src="assets/img/logo-pemerintah.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>Pemerintah <br />Kabupaten Bandung</h1>
            </hgroup>
            <div><a href="https://bandungkab.go.id/" style="margin:20px auto" target="_blank" class="btn btn-outline-success">Lihat Selengkapnya</a></div>
          </div>
        </div>
      </div>
    </div>


    <!-- ======= NUMBER COUNTER ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <!-- <div class="row">
        <img src="assets/img/logo-psj-180.png" alt="logo_aplikasi" width="250px" height="200px" data-aos="zoom-in" style="margin:20px auto" class="animated">
        </div>
        <div class="row">
        <a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera" target="_blank" class="btn btn-success btn-lg" data-aos="zoom-in" style="margin:20px auto"></i>Unduh Aplikasi</a>
        </div> -->
        <div class="row counters">
          <div class="col-lg-3 col-12 text-center" data-aos="flip-up">
            <span data-toggle="counter-up"><?php echo $jml_petani; ?></span>
            <p>Petani Terdaftar <br />Saat ini</p>
          </div>
          <div class="col-lg-3 col-12 text-center" data-aos="flip-up">
            <span data-toggle="counter-up"><?php echo $jml_produk; ?></span>
            <p>Produk Terdaftar <br />Saat ini</p>
          </div>
          <div class="col-lg-3 col-12 text-center" data-aos="flip-up">
            <span data-toggle="counter-up"><?php echo $jml_mitra; ?></span>
            <p>Mitra Terdaftar <br />Saat ini</p>
          </div>
          <div class="col-lg-3 col-12 text-center" data-aos="flip-up">
            <span data-toggle="counter-up"><?php echo $jml_transaksi; ?></span>
            <p>Produk Terjual <br />Saat ini</p>
          </div>
        </div>
      </div>
    </section>

    <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="bg-text col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-right">
            <h1>Petani Sejahtera</h1>
            <h2>Petani Sejahtera</b> adalah aplikasi yang dibuat sebagai opsi khusus untuk membantu para petani di Desa Sukapura dalam hal pendistribusian hasil pertanian.</h2>
            <div>
              <a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera" target="_blank" class="animated get-started-btn btn-success btn-lg" style="margin:20px auto"></i>Unduh Aplikasi</a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="150">
            <img src="assets/img/logo-psj.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>



    <section id="faq" class="section">

      <div class="container">
        <div class="section-title2">
          <h2>Info</h2>
        </div>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#">Alur Pemakaian Aplikasi <i class="glyphicon glyphicon-hand-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu1">01 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu2">02 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu3">03 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu4">04 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu5">05 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu6">06 <i class="glyphicon glyphicon-chevron-right"></i></a></li>
          <li><a data-toggle="tab" href="#menu7">07 <i class="glyphicon glyphicon-chevron-right"></i></a></li>

        </ul>

        <div class="tab-content">
          <div id="menu1" class="step tab-pane fade in active">
            <h3>Registrasi Akun</h3>
            <p>Pengguna melakukan registrasi akun di dalam aplikasi dengan mengisi data identitas pribadi. Setelah akun sudah dibuat, anda dapat melakukan proses login.</p>
          </div>
          <div id="menu2" class="step tab-pane fade">
            <h3>Daftarkan Komoditas Anda</h3>
            <p>Pengguna sudah dapat mendaftarkan produk, dengan memilih produk dan mengisi detail proses produksi.</p>
          </div>
          <div id="menu3" class="step tab-pane fade">
            <h3>Perubahan Status Produk</h3>
            <p>Ketika melakukan proses tani atau produksi, anda dapat mengubah status produk sesuai dengan kondisi saat proses produksi dilakukan.</p>
          </div>
          <div id="menu4" class="step tab-pane fade">
            <h3>Masuk Waktu Panen</h3>
            <p>Ketika sudah masuk waktu panen atau proses produksi selesai, pengguna dapat mengubah status produk menjadi "Siap Diambil".</p>
          </div>
          <div id="menu5" class="step tab-pane fade">
            <h3>Penugasan Kurir</h3>
            <p>Pengelola aplikasi akan menugaskan kurir untuk mengambil produk, apabila produk tersebut dibutuhkan pihak mitra.</p>
          </div>
          <div id="menu6" class="step tab-pane fade">
            <h3>Kurir Menjemput</h3>
            <p>Sebelum kurir menjemput produk anda, anda akan mendapat notifikasi dari kurir bahwa prouk anda akan dijemput pada tanggal yang ditentukan.</p>
          </div>
          <div id="menu7" class="step tab-pane fade">
            <h3>Transaksi Produk</h3>
            <p>Setelah kurir tiba, kurir akan membayar produk anda sesuai dengan harga pada aplikasi Petani Sejahtera, dan kurir akan meneruskannya ke pihak Mitra.</p>
          </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Registrasi Akun</h3>
                <p>Pengguna melakukan registrasi akun terlebih dahulu. Setelah akun sudah dibuat, lakukan proses login.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Daftarkan Komoditas Anda</h3>
                <p>Pengguna sudah dapat mendaftarkan produk, dengan memilih produk dan mengisi detail proses produksi.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Masuk Waktu Panen</h3>
                <p>Ketika sudah masuk waktu panen, pengguna dapat mengubah status produk menjadi "Siap Diambil".</p>
              </div>
            </div>
      </div> -->
      </div>
    </section>

    <!-- ======= INFO ======= -->
    <section id="faq2" class="faq">
      <div class="container" data-aos="fade-up">
        <!-- <div class="section-title">
          <h2>Info</h2>
        </div> -->
        <div class="faq-list">
          <ul>
            <li data-aos="flip-left" data-aos-delay="100">
              <i class="bx bx-info-circle icon-info"></i>
              <a data-toggle="collapse" href="#faq-list-1" class="collapsed">
                Apa Itu Aplikasi Petani Sejahtera ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                <p>
                  <b>Petani Sejahtera</b> adalah aplikasi yang dibuat sebagai opsi khusus untuk membantu para petani di Desa Sukapura dalam hal pendistribusian hasil pertanian, dengan dibantu oleh SIDUDA(Sistem Informasi Produk Daerah) sebagai aplikasi untuk monitoring proses pendistribusian hasil pertanian<br />
                  <br />
                  Aplikasi <b>Petani Sejahtera</b> ini hasil kolaborasi antara KADIN(Kamar Dagang dan Industri Kota Bandung) sebagai pihak pengelola, Pemerintah Kabupaten Bandung dan Desa Sukapura Kabupaten Bandung. Adapun berbagai data yang dikelola diantaranya :<br />
                  1. Data Petani <br />
                  2. Data E-Commodity <br />
                  3. Data Harga Produk <br />
                  4. Data Dusun <br />
                  5. Data Kurir <br />
                  6. Data Mitra <br />
                  7. Data Transaksi <br />
                  8. Informasi transaksi hasil penjualan, hasil tani para petani secara periode tertentu.<br />
                  9. Informasi luas lahan dan hasil panen berdasarkan jenis Commodity.<br />
                  10.Informasi luas lahan petani yang dimiliki dari berbagai jenis Commodity.<br />
                  <br />
                  Data-data ini dapat diakses oleh admin di website Administrator SIDUDA(Sistem Informasi Produk Daerah) untuk memonitoring pertanian Desa Sukapura.
                </p>
              </div>
            </li>

            <li data-aos="flip-right" data-aos-delay="200">
              <i class="bx bx-info-circle icon-info"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apa Manfaat Aplikasi Petani Sejahtera ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Adapun Manfaat aplikasi <b>Petani Sejahtera</b> adalah sebagai berikut :<br />
                  1. Memangkas jalur distribusi hasil panen para petani.<br />
                  2. Petani mendapatkan pendistribusian hasil panen yang lebih optimal.<br />
                  3. Meningkatkan kesejahteraan taraf hidup para petani.<br />
                  4. Membantu pemerintah Kabupaten Bandung dalam pengelolaan E-Commodity.<br />
                  5. Membantu aparatur desa dalam mengelola E-Commodity.<br />
                </p>
              </div>
            </li>
            <li data-aos="flip-left" data-aos-delay="300">
              <i class="bx bx-info-circle icon-info"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Siklus Penggunaan Aplikasi Petani Sejahtera <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  1. <b>KADIN</b> ke <b>Mitra</b><br />
                  Berkerja sama untuk distribusi hasil petanian.<br />
                  <br />
                  2. <b>Petani</b> ke <b>KADIN</b><br />
                  Menginput data terkait data komoditas,luas lahan,identitas,dan status produk.<br />
                  <br />
                  3. <b>Petani</b> ke <b>KADIN</b><br />
                  Kadin menerima inputan dari petani sebagai informasi kapan produk panen dan dapat diambil oleh kurir.<br />
                  <br />
                  4. <b>KADIN</b> ke <b>Petani</b><br />
                  Kadin menerima inputan dari petani untuk mengetahui kapan produk hasil pertanian panen dan siap di ambil oleh kurir.<br />
                  <br />
                  5. <b>KADIN</b> ke <b>Kurir</b><br />
                  Kadin meginput penugasan kurir untuk mengambil hasil pertanian.<br />
                  <br />
                  6. <b>Kurir</b> ke <b>KADIN</b><br />
                  Menerima inputan untuk mengambil hasil pertanian sesuai dengan waktu yang ditentukan.<br />
                  <br />
                  7. <b>Kurir</b> ke <b>Petani</b><br />
                  Kurir mengkonfirmasi kepada petani bahwa hasil pertanian akan diambil.<br />
                  <br />
                  8. <b>Kurir</b> ke <b>Mitra</b><br />
                  Mengantarkan hasil petanian dari petani menuju mitra sesuai penugasan KADIN.<br />
                </p>

                <img class="siklus" target="_blank" src="assets/img/siklus.jpeg">

              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>

    <!-- ======= PRODUK ======= -->
    <section id="pricing" class="pricing section-bgv">
      <div class="container">
        <div class="section-title2">
          <h2>Produk Komoditas</h2>
        </div>
        <div class="row" data-aos="fade-down">
          <?php foreach ($daftar_harga as $row) : ?>
            <div class="animated col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="100" style="margin:20px auto">
              <div class="box featured">
                <h3><?php echo $row->nama; ?></h3>
                <img src="assets/img/produk/<?php echo $row->foto; ?>" width="215px" height="150px">
                <!-- https://sidutama.web.id/administrator/assets/thumbnail/ -->
                <ul>
                  <li>Harga saat ini :</li>
                  <li><?php echo 'Rp ' . number_format($row->harga); ?> /kg</p>
                    <a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera" target="_blank" class="btn btn-solid-secondary">
                      <i class="glyphicon glyphicon-shopping-cart"></i>
                    </a>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>


    <!-- ======= portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galery</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Desa</li>
              <li data-filter=".filter-card">Tim</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 1</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-1.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 3</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-8.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 2</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-2.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 3</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-3.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 4</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-9.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 4"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 4</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-4.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 4"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 1</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-6.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 5</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-5.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 5"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/galeri/psj-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 2</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/galeri/psj-7.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg2">
      <div class="container" data-aos="fade-up">

        <div class="section-title2">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>
                Jl. Cikutra no 204 A Bandung, Jawa Barat, Indonesia 40124</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>petani.sejahtera@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>phone : +62-22-7275865 <br />
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Development Team</h2>
          <!-- <p>MBKM Ciparay 2022.</p> -->
        </div>

        <div class="animated owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Terus bangkit, hingga kamu terbiasa dengan KEGAGALAN.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/galung.jpg" class="testimonial-img" alt="">
            <h3>Gilang Pratama Putra</h3>
            <h4>Leader</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Bersungguh-sungguh itu sulit.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/dimas2.jpg" class="testimonial-img" alt="">
            <h3>Dimas Naufal Hakiki</h3>
            <h4>Website Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lupakan 1000 keburukan, dan ingatlah 1 kebaikan.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/irfan.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Irfan Restu Perkasa</h3>
            <h4>Android Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lakukan dengan sungguh-sungguh, atau tidak sama sekali.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/yusuf.jpg" class="testimonial-img" alt="">
            <h3>Yusuf Afandi</h3>
            <h4>Android Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hidup mulia atau mati syahid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/imen.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Aiman Abdul Hafizh</h3>
            <h4>Documentation Division 1</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Jangan pernah menyerah walaupun kegagalan terus menimpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/randy.jpg" class="testimonial-img" alt="">
            <h3>Randy Kurniawan</h3>
            <h4>Documentation Division 2</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Akan ada cerita baru dimulai, ketika cerita lama berakhir.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/team/raya.jpg" class="testimonial-img" alt="">
            <h3>Rhadhiya Wiraga Sudrajat</h3>
            <h4>Video Documentation Division</h4>
          </div>

        </div>

      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            <div class="credits">
              <p style="font-size:15px">@<a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera">Petani Sejahtera</a></p>
            </div>
          </div>

        </div>

      </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>