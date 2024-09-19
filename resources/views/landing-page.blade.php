<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NEWS KOMINFO BONDOWOSO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}assets/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('') }}assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header fixed-top">
        <div class="branding d-flex align-items-center" style="background-color: yellow;">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/logokom.png" alt="Logo" style="max-height: 50px;">
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="">Beranda</a></li>
                        <li><a href="#about" class="active">Berita</a></li>
                        <li><a href="#services">Profil</a></li>
                        <li><a href="#portfolio">Galeri</a></li>
                        <li class="dropdown"><a href="#"><span>Informasi</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#"></a></li>
                                <li class="dropdown"><a href="#"><span>Informasi</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Pendidikan</a></li>
                                        <li><a href="#">pajak</a></li>
                                        <li><a href="#">BPJS</a></li>
                                        <li><a href="#">RSUD</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pendidikan</a></li>
                                <li><a href="#">pajak</a></li>
                                <li><a href="#">BPJS</a></li>
                                <li><a href="#">RSUD</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <!-- pak kepala  -->
    <main class="main">

        <section id="call-to-action" class="call-to-action section">

            <div class="container" data-aos="zoom-out">

                <div class="row g-5 align-items-center">

                    <!-- Text content aligned to the left on larger screens -->
                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Sambutan <em>Kepala Dinas</em> Ghozal Rawan, AP, M.M.</h3>
                        <p>Semangat untuk mencapai Bondowoso menjadi SMART CITY</p>
                        <a class="cta-btn align-self-start" href="#">Call To Action</a>
                    </div>

                    <!-- Image aligned to the right on larger screens -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-center order-first order-md-last">
                        <div class="img" style="margin-top: 100px;"> <!-- Adjusted margin-top to bring image up -->
                            <img src="assets/img/ketua.png" alt="Kepala Dinas" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </main>

</body>

</html>

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
                data-aos="zoom-out">
                <img src="assets/img/LogoPemkab2021.png" class="img-fluid animated" alt=""
                    style="width: 30cm; height: 80%; object-fit: cover;">
                <div class="container" data-aos="fade-up" data-aos-delay="50">
                    <div class="row justify-content-start">
                        <div class="col-lg-15">
                            <h2>Welcome to Day</h2>
                            <p>Kami mengelola Informasi terkini untuk semua dengan secara efisien</p>
                            <a href="/login" class="btn-get-started"
                                style="background-color: black; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Get
                                Started</a>


                            <!-- Tombol akan mengarah ke halaman login -->
                        </div>
                    </div>
                </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>BERITA BONDOWOSO<br></span>
                <h2>informasi terkini<br></h2>
                <p>Kami memastikan kerahasiaan dan keakuratan informasi terkini</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/karnaval.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Jadwal Bondowoso Karnaval Budaya</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /laporpak -->

 <!-- di laporkan  -->
 <!-- Section: Form Lapor -->
 <section id="form-section" class="form-section section">
    <div class="container" data-aos="fade-up">
        <h2 style="text-align: center; font-weight: bold;">Sampaikan Laporan Anda</h2>
        <form action="/submit-report" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table-modern">
                <!-- Klasifikasi Laporan -->
                <tr>
                    <td><label for="classification" class="label-modern">Pilih Klasifikasi Laporan</label></td>
                    <td>
                        <input type="radio" id="pengaduan" name="classification" value="pengaduan" checked>
                        <label for="pengaduan">Aspirasi masyarakat</label>
                    </td>
                </tr>

                <!-- Judul Laporan -->
                <tr>
                    <td><label for="title" class="label-modern">Judul Laporan</label></td>
                    <td>
                        <input type="text" class="input-modern" id="title" name="title" placeholder="Ketik Judul Laporan Anda" required>
                    </td>
                </tr>

                <!-- Isi Laporan -->
                <tr>
                    <td><label for="content" class="label-modern">Isi Laporan</label></td>
                    <td>
                        <textarea class="input-modern" id="content" name="content" rows="4" placeholder="Ketik Isi Laporan Anda" required></textarea>
                    </td>
                </tr>

                <!-- Tanggal Kejadian -->
                <tr>
                    <td><label for="date" class="label-modern">Tanggal Kejadian</label></td>
                    <td>
                        <input type="date" class="input-modern" id="date" name="date" required>
                    </td>
                </tr>

                <!-- Lokasi Kejadian -->
                <tr>
                    <td><label for="location" class="label-modern">Lokasi Kejadian</label></td>
                    <td>
                        <input type="text" class="input-modern" id="location" name="location" placeholder="Ketik Lokasi Kejadian" required>
                    </td>
                </tr>

                <!-- Instansi Tujuan -->
                <tr>
                    <td><label for="institution" class="label-modern">Instansi Tujuan</label></td>
                    <td>
                        <select class="input-modern" id="institution" name="institution">
                            <option value="" disabled selected>Pilih Instansi Tujuan</option>
                            <option value="Instansi1">Instansi 1</option>
                            <option value="Instansi2">Instansi 2</option>
                            <option value="Instansi3">Instansi 3</option>
                        </select>
                    </td>
                </tr>

                <!-- Kategori Laporan -->
                <tr>
                    <td><label for="category" class="label-modern">Kategori Laporan</label></td>
                    <td>
                        <select class="input-modern" id="category" name="category">
                            <option value="" disabled selected>Pilih Kategori Laporan</option>
                            <option value="Kategori1">Kategori 1</option>
                            <option value="Kategori2">Kategori 2</option>
                            <option value="Kategori3">Kategori 3</option>
                        </select>
                    </td>
                </tr>

                <!-- Upload Lampiran -->
                <tr>
                    <td><label for="file" class="label-modern">Upload Lampiran</label></td>
                    <td>
                        <input type="file" class="input-modern" id="file" name="file">
                    </td>
                </tr>

                <!-- Privasi Laporan -->
                <tr>
                    <td><label class="label-modern">Privasi Laporan</label></td>
                    <td>
                        <input type="radio" id="anonim" name="privacy" value="anonim">
                        <label for="anonim">Anonim</label>
                        <input type="radio" id="rahasia" name="privacy" value="rahasia">
                        <label for="rahasia">Rahasia</label>
                    </td>
                </tr>

                <!-- Submit Button -->
                <form action="{{ route('lapor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Form fields lainnya -->
                    ...
                    <button type="submit" class="btn-modern">LAPOR!</button>
                </form>

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container section-title" data-aos="fade-up">
                <span> Partnership Kami <br></span>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/logo-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Call To Action Section -->
<!-- /Call To Action Section -->

        <!-- Onfocus Section -->
        <section id="onfocus" class="onfocus section">

            <div class="container-fluid p-0" data-aos="fade-up">
                <div class="row g-0">
                    <!-- Video Section -->
                    <div class="col-lg-6 video-play position-relative">
                        <iframe id="video-frame" width="800" height="683"
                            src="https://www.youtube.com/embed/V9417Rt_ovs?autoplay=1&loop=1&playlist=V9417Rt_ovs"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                    <!-- Text Section -->
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100 p-4">
                            <h3>Ijen Geopark Menuju UNESCO GLOBAL GEOPARK UGG o</h3>
                            <p class="fst-italic">
                                kepala Dinas Komunikasi dan Informatika (Diskominfo), Kabupaten Bondowoso, Jawa Timur
                                Ghozal Rawan mengajak kepada seluruh element masyarakat untuk ikut serta mendukung dan
                                mensukseskan Bondowoso menuju UNESCO Global Geopark (UGG).
                                Ajakan tersebut tertuang dalam sebuah Video pendek berdurasi sekian detik yang kemudian
                                tersebar luas di seluruh Media Sosial seperti WhatsApp dan aplikasi lainnya.
                                "Saya mengajak kepada seluruh lapisan masyarakat untuk mensukseskan Bondowoso Ijen
                                Geopark, mari kita sukseskan Ijen Geopark," ungkapnya.
                                Seperti diketahui, Peninjauan tim asesor yang tinggal menghitung hari untuk datang ke
                                Kabupaten Bondowoso guna memenuhi syarat agar sebuah kabupaten bisa membawa nama menjadi
                                Ijen Geopark.
                                Dengan semangat tinggi, Kadis Kominfo berharap agar program Bondowoso menuju Ijen
                                Geopark ini bisa mendapatkan dukungan dan suport dari seluruh element masyarakat.
                                Sampai saat ini, semua persiapan menyambut kedatangan tim asesor telah dimatangkan oleh
                                segenap jajaran Organisasi Perangkat Daerah dan pihak - pihak lain agar semaksimal
                                mungkin untuk memberikan kesan hangat kepada tim asesor.
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Dinas Komunikasi dan Informatika.</li>
                                <li><i class="bi bi-check-circle"></i> Dinas Komunikasi dan Informatika</li>
                                <li><i class="bi bi-check-circle"></i> Dinas Komunikasi dan Informatikaabupaten
                                    Bondowoso Mengucapkan, Selamat menjalankan ibadah puasa Ramadan Tahun 1443 H.</li>
                            </ul>
                            <a href="#" class="read-more align-self-start"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- /Onfocus Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <i class="bi bi-binoculars" style="color: #0dcaf0;"></i>
                            <h4>Indonesia.go.id</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <i class="bi bi-box-seam" style="color: #6610f2;"></i>
                            <h4>Kominfo</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <i class="bi bi-brightness-high" style="color: #20c997;"></i>
                            <h4>Siaran Pers</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                            <i class="bi bi-command" style="color: #df1529;"></i>
                            <h4>Sertifikasi</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                            <i class="bi bi-easel" style="color: #0d6efd;"></i>
                            <h4>Digital Talent</h4>
                        </a>
                    </li><!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                            <i class="bi bi-map" style="color: #fd7e14;"></i>
                            <h4>Sertif Perizinan</h4>
                        </a>
                    </li><!-- End Tab 6 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Indonesia.go.id</h3>
                                <p class="fst-italic">
                                    Portal informasi dan Berita Resmi Indonesia
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Layanan Kominfo </h3>
                                <p>
                                    Daftar Layanan Publik Bidang Komunikasi dan Informatika
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum
                                        asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-2.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Siaran Pers</h3>
                                <p>
                                    Siaran Pers
                                    Produk Siaran Pers Biro Humas Sekretariat Jenderal Kemkominfo
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum
                                        asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-3.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane fade" id="features-tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Sertifikasi dan Pelatihan</h3>
                                <p>
                                    Sertifikasi dan Pelatihan Bidang Komunikasi dan Informatika
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-4.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane fade" id="features-tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Digital Talent</h3>
                                <p>
                                    Digital Talent Scholarship 2020 adalah program beasiswa untuk meningkatkan
                                    keterampilan dan daya saing SDM bidang teknologi informasi dan komunikasi
                                    Sertifikasi & Perizinan
                                    Sertifikasi & Perizinan
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-5.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane fade" id="features-tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Sertifikasi & Perizinan</h3>
                                <p>
                                    Daftar Sertifikasi, Perizinan dan Pengujian Bidang Komunikasi dan Informatika
                                </p>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                        in voluptate velit.</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                        storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-6.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 6 -->

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container text-center section-title" data-aos="fade-up">
                <h2>VISI DAN MISI INSPEKTORAT JENDERAL</h2>
                <p>ERDASARKAN KEPUTUSAN MENTERI KOMUNIKASI DAN INFORMATIKA REPUBLIK INDONESIA NOMOR.757 TAHUN 2018
                    TENTANG PIAGRAM AUDIT INTERN KEMENTERIAN KOMUNIKASI DAN INFORMATIKA</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="800">
                        <div class="service-item text-center">
                            <div class="details position-relative mt-3">
                                <div class="icon mb-2">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <h3>VISI</h3>
                                <p>Visi Inspektorat Jenderal Kementerian Komunikasi dan Informatika adalah mewujudkan
                                    fungsi pengawasan intern yang independen, profesional, dan berintegritas dalam
                                    rangka mendukung terwujudnya tata kelola pemerintahan yang baik (good governance) di
                                    lingkungan Kementerian Komunikasi dan Informatika.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="800">
                        <div class="service-item text-center">
                            <div class="details position-relative mt-3">
                                <div class="icon mb-2">
                                    <i class="bi bi-broadcast"></i>
                                </div>
                                <h3>MISI</h3>
                                <p>1. Diterapkannya prinsip-prinsip tata kelola pemerintahan yang baik secara konsisten
                                    di lingkungan Kementerian Komunikasi dan Informatika;</p>
                                <p>2. Terselenggaranya kegiatan setiap Satuan Kerja di lingkungan Kementerian Komunikasi
                                    dan Informatika secara ekonomis, efisien, dan efektif;</p>
                                <p>3. Terselenggaranya efektivitas pengawasan melalui penguatan SDM pengawasan yang
                                    profesional.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>
            <!-- End Service Item -->

            <!-- End Service Item -->

            <!-- End Service Item -->

            </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Pricing</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Free Plan</h3>
                                <h4><sup>$</sup>0<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                        hendrerit</span></li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>

                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-item featured">

                            <div class="pricing-header">
                                <h3>Business Plan</h3>
                                <h4><sup>$</sup>29<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>

                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="pricing-item">

                            <div class="pricing-header">
                                <h3>Developer Plan</h3>
                                <h4><sup>$</sup>49<span> / month</span></h4>
                            </div>

                            <ul>
                                <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>

                            <div class="text-center mt-auto">
                                <a href="#" class="buy-btn">Buy Now</a>
                            </div>

                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3><span>Syarat dan Dokumen </span><strong>Pendaftaran CPNS 2024</strong></h3>
                            <p>
                                Solo - Kementerian Komunikasi dan Informatika (Kominfo) resmi membuka 4.215 formasi
                                dalam pengadaan Calon Aparatur Sipil Negara (CPNS) 2024. Berikut rincian syarat dan
                                dokumen yang perlu dipersiapkan oleh para pelamar untuk pendaftaran CPNS 2024 Kominfo.
                                Mengacu dari Pengumuman Nomor: 158/SJ/KP.03.01/08/2024 tentang Seleksi Pengadaan Calon
                                Pegawai Negeri Sipil Kementerian Komunikasi dan Informatika Tahun Anggaran 2024,
                                disampaikan bahwa pada tahun 2024 ini Kominfo resmi membuka formasi CPNS sebesar 4.215
                                formasi.
                            </p>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Ilustrasi seleksi CPNS 2024 Kominfo Foto: casn.kominfo.go.id</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2">
                        <img src="assets/img/pns.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container-fluid">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">Books</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-1.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-1.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-2.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-2.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/product-3.jpg"
                                        data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/branding-3.jpg"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-book"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Team</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>kak gem kak gem</h4>
                                <span>kata katanya dong</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>singkat saja</h4>
                                <span>di belakang saya kosong </span>
                                <span>di depan saya ada kamu</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>paham </h4>
                                <span>paham</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Blog Posts</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author-2.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                    soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/blog-author-3.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>

        </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p><i class="bi bi-geo-alt"></i> Lokasi Dinas Komunikasi dan Informatika (DISKOMINFO) Kabupaten
                    Bondowoso</p>

            </div><!-- End Section Title -->
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4723667784656!2d113.82165827497588!3d-7.924090667383413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dd25dd81460d%3A0x3c6be134cb8361e0!2sDinas%20Komunikasi%20dan%20Informatika%20(%20DISKOMINFO%20)%20Kabupaten%20Bondowoso!5e0!3m2!1sen!2sid!4v1693236120742!5m2!1sen!2sid"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>


            </div><!-- End Info Item -->

            <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">HeroBiz</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Hic solutasetp</h4>
                        <ul>
                            <li><a href="#">Molestiae accusamus iure</a></li>
                            <li><a href="#">Excepturi dignissimos</a></li>
                            <li><a href="#">Suscipit distinctio</a></li>
                            <li><a href="#">Dilecta</a></li>
                            <li><a href="#">Sit quas consectetur</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Nobis illum</h4>
                        <ul>
                            <li><a href="#">Ipsam</a></li>
                            <li><a href="#">Laudantium dolorum</a></li>
                            <li><a href="#">Dinera</a></li>
                            <li><a href="#">Trodelas</a></li>
                            <li><a href="#">Flexo</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
