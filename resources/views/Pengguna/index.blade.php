<!DOCTYPE html>
<html lang="en">

<link rel="icon" href="{{ asset('pengguna/assets/images/logoBps.png') }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>si layanan bps kota jambi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="d-flex align-items-center justify-content-between" style="column-gap: 15px;">
                <img src="{{ asset('pengguna/assets/images/logoBps.png') }}" alt="">
                <h1 class="logo me-auto"><a href="index.html">
                        <p
                            style="font-size: 18px; margin-bottom:5px; font-style:italic; text-shadow: 2px 3px 4px rgba(0, 0, 0, 0.856);">
                            Badan pusat statistik</p>
                        <p
                            style="font-size: 18px; margin-bottom:5px; font-style:italic; text-shadow: 2px 3px 4px rgba(0,0,0,0.856);">
                            kota jambi</p>
                    </a></h1>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav id="navbar" class="navbar">
                @include('sweetalert::alert')
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan kami</a></li>
                    <li><a class="nav-link scrollto" href="#cta">Penilaian</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Badan Pusat Statistika Kota Jambi</h1>
                    <h2 style=" text-shadow: 2px 2px 4px rgba(0, 0, 0, 1) !important">Melayani dengan Profesional,
                        Integritas, dan Amanah</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/bukutamu" class="btn-get-started scrollto">Form Tamu</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-6">
                        <img src="{{ asset('pengguna/assets/images/withbpskoja.png') }}" alt="" width="100%"
                            height="100%">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 px-4">
                        <div class="section-title">
                            <h2>Tentang Kami</h2>
                        </div>
                        <strong style="font-size: 23px">VISI</strong>
                        <p style="text-align: justify; font-size:18px">Pelopor data statistik Terpercaya untuk semua</p>
                        <strong style="font-size: 23px">MISI</strong>
                        <ul>
                            <li style="font-size: 20px"><i class="ri-check-double-line"></i>Memperkuat landasan
                                konstitusional dan operasional lembaga statistik untuk penyelenggaraan statistik yang
                                efektif dan efisien.</li>
                            <li style="font-size: 20px"><i class="ri-check-double-line"></i>Menciptakan insan statistik
                                yang kompeten dan profesional, didukung pemanfaatan teknologi informasi mutakhir untuk
                                kemajuan perstatistikan Indonesia.</li>
                            <li style="font-size: 20px"><i class="ri-check-double-line"></i>Meningkatkajn kualitas
                                pelayanan informasi statistik bagi semua pihak.</li>
                            <li style="font-size: 20px"><i class="ri-check-double-line"></i>Meningkatkan koordinasi,
                                integrasi dan sinkronisasi kegiatan statistik yang diselenggarakan pemerintah dan
                                swasta, dalam kerangka Sistem Statistik Nasional (SSN) yang efektif dan efisien..</li>
                        </ul>
                        <div class="btn-web d-flex justify-content-center aligin-items-center">
                            <a href="https://jambikota.bps.go.id/" class="btn-learn-more">Web BPS Kota Jambi</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex justify-content-center"
                        style="flex-direction:column" data-aos="fade-left" data-aos-delay="100">
                        <h3>Ringkasan Data Pengunjung</h3>
                        <p style="font-size: 20px">
                            Berikut ini merupakan ringkasan jumlah pengguna buku tamu BPS Kota Jambi berdasarkan
                            kriteria pekerjaan:
                        </p>

                        <div class="row">

                            <!-- Data Pengunjung -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                    Total Pengunjung</div>
                                                <div class="h5 mb-0 font-weight text-gray-800">
                                                    <strong>{{ $customer }}</strong> orang
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data ASN -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                                    ASN</div>
                                                <div class="h5 mb-0 font-weight text-gray-800">
                                                    <strong>{{ $asn }}</strong> orang
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Pelajar/Mahasiswa-->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                    Pelajar
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight text-gray-800">
                                                            <strong>{{ $student }}</strong> orang
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-address-card fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Guru/Dosen -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-dark shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-dark text-uppercase mb-1">
                                                    Guru/Dosen</div>
                                                <div class="h5 mb-0 font-weight text-gray-800">
                                                    <strong>{{ $lecturer }}</strong> orang
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-address-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Peneliti -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                    Peneliti</div>
                                                <div class="h5 mb-0 font-weight text-gray-800">
                                                    <strong>{{ $researcher }}</strong> orang
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i
                                                    class="fas fa-american-sign-language-interpreting fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- General -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-secondary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-sm font-weight-bold text-secondary text-uppercase mb-1">
                                                    Umum</div>
                                                <div class="h5 mb-0 font-weight text-gray-800">
                                                    <strong>{{ $general_job }}</strong> orang
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('template/assets/img/skills.png') }}" class="img-fluid" alt=""
                            width="100%" height="100%">
                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg d-flex justify-content-center"
            style="padding: 25px 0 75px 0">
            <div class="container d-flex justify-content-center" style="flex-direction: column" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan kami</h2>
                    <p style="font-size: 20px">
                        Pelayanan Statistik BPS Kota Jambi terdiri berbagai macam layanan.
                        Di halaman ini Anda dapat menemukan berbagai layanan yang kami sediakan.
                        #MelayaniDenganHati❤️
                    </p>
                </div>

                <div class="row">
                    <!-- Perpustakaan -->
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('template/assets/img/perpustakaan.png') }}" alt="" width="103px" height="106px" style="margin-top: -21px">
                            </div>
                            <h4 class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #385683;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                    data-title="Publikasi"
                                    data-image="{{ asset('template/assets/img/publikasi.png') }}"
                                    data-description="Publikasi adalah media penyebarluasan hasil kegiatan statistik yang dilakukan oleh Badan Pusat Statistik (BPS) kepada publik. Publikasi ini memuat berbagai data dan informasi statistik."
                                    data-standards-link="{{ asset('template/assets/img/ModalPerpustakaan.png') }}"
                                    data-button-text="Kunjungi Web ->" data-url="https://jambikota.bps.go.id/publication.html">Perpustakaan</a>
                            </h4>
                            <p style="font-size: 18px">
                                Melayani permintaan data dari pengguna data baik dari kalangan peneliti, mahasiswa, maupun kalangan umum.
                            </p>
                        </div>
                    </div>
                
                    <!-- Konsultasi Statistik -->
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('template/assets/img/konsultasi.png') }}" alt="" width="116px" height="83px">
                            </div>
                            <h4 class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #385683;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                    data-title="Hubungi"
                                    data-image="{{ asset('template/assets/img/hubungi.png') }}"
                                    data-description="Ingin tahu lebih banyak tentang layanan dan data statistik yang BPS sediakan? Hubungi kami sekarang! "
                                    data-standards-link="{{ asset('template/assets/img/ModalKonsultasi.png') }}" data-button-text="Hubungi" data-url="https://wa.me/+6285162839410">Konsultasi Statistik</a>
                            </h4>
                            <p style="font-size: 18px">
                                Konsultasi dilakukan berupa hal terkait data, metadata, klasifikasi, dan produk statistik BPS lainnya.
                            </p>
                        </div>
                    </div>
                
                    <!-- Rekomendasi Statistik -->
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('template/assets/img/rekomendasi.png') }}" alt="" width="84px" height="89px">
                            </div>
                            <h4 class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #385683;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                    data-title="Rekomendasi Kegiatan Statistik"
                                    data-image="{{ asset('template/assets/img/RKS.png') }}"
                                    data-description="Pengguna dapat dengan mudah mengakses informasi dan berbagai data statistik dari seluruh Indonesia melalui grafik, peta, dan diagram yang tersedia di situs ini."
                                    data-standards-link="{{ asset('template/assets/img/ModalRekomendasi.png') }}" data-button-text="Learn More" data-url="https://romantik.web.bps.go.id/">Rekomendasi Statistik</a>
                            </h4>
                            <p style="font-size: 18px">
                                Rekomendasi kegiatan statistik adalah saran yang diberikan oleh BPS terhadap kegiatan statistik.
                            </p>
                        </div>
                    </div>
                
                    <!-- Layanan Produk -->
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{ asset('template/assets/img/layanan.png') }}" alt="" width="88px" height="88px">
                            </div>
                            <h4 class="text-center mt-3" style="font-size: 20px; font-weight: bold; color: #385683;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal"
                                    data-title="Form Tamu"
                                    data-image="{{ asset('template/assets/img/form.png') }}"
                                    data-description="Pengguna dapat dengan mudah mengakses informasi dan berbagai data statistik dari seluruh Indonesia melalui grafik, peta, dan diagram yang tersedia di situs ini."
                                    data-standards-link="{{ asset('template/assets/img/ModalUmum.png') }}" data-button-text="Form Tamu" data-url="/bukutamu">Layanan Produk</a>
                            </h4>
                            <p style="font-size: 18px">
                                Informasi general atau yang berkaitan dengan hal-hal yang lain dapat langsung mengunjungi kantor BPS Kota Jambi.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="text-center">
                        <div>
                            <h3>Berikan Penilaian - Feedback</h3>
                        </div>
                        <div>
                            <p style="font-size: 18px">
                                Anda dapat memberikan Masukan dan Saran melalui tombol penilaian dibawah ini. <br>
                                Masukan dan Saran yang diberikan akan dilindungi dan kerahasiaan identitas Anda <br>
                                terjaga dengan baik. Berikan penilaian secara bebas tanpa paksaan.
                            </p>
                        </div>
                    </div>
                    <div class="cta-btn-container text-center">
                        <a class="cta-btn" href="feedback">Beri Nilai</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" style="justify-content: center">
            <div class="container" data-aos="fade-up" style="justify-content: center">
                <div class="row" style="justify-content: center">
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="info">
                            <div class="judul">
                                <h2 style="padding: 0 0 10px 0; color:white; font-size: 40px;">Hubungi kami</h2>
                                <p style="font-size: 18px; padding: 0 0 10px 0;">
                                    Badan Pusat Statistik Kota Jambi (BPS-Statistics of Jambi Municipality)
                                </p>
                            </div>
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <p style="font-size: 18px">Jl. Basuki Rachmat, Kota Jambi , Jambi 38128</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p style="font-size: 18px">bps1571@bps.go.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <p style="font-size: 18px">(0741) 40539</p>
                            </div>

                            <div class="calendar">
                                <i class="bi bi-calendar"></i>
                                <p style="font-size: 18px">
                                    Senin-Kamis, 08.00-16.00 WIB <br> Jumat, 08.00-15.00 WIB
                                </p>
                            </div>
                            <img src="{{ asset('template/assets/img/footBerakhlak.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer"
            style="background-color: #385683; color: white; display: flex; justify-content: center;">
            <div class="col-lg-7" style="border-top: white solid 2px;">
                <div class="row d-flex align-items-center justify-content-between" style="padding: 20px 0 30px 0">
                    <!-- Bagian 1 -->
                    <div class="col-lg-4" style="padding: 0">
                        <p style="padding: 10px 0; font-size:18px; margin:0;">Badan Pusat Statistik - 2024</p>
                    </div>
                    <!-- Bagian 2 -->
                    <div class="col-lg-4 d-flex align-items-center justify-content-end" style="padding: 0">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; flex-direction: row; column-gap: 5px;">
                            <a href="https://www.instagram.com/bps.kotajambi?igsh=MWQzbmViZzdvZGhhZg==">
                                <img src="{{ asset('template/assets/img/ig.png') }}" alt=""
                                    style="width: 47px" height="50px">
                            </a>
                            <a href="https://web.facebook.com/BPSKotaJambi">
                                <img src="{{ asset('template/assets/img/fb.png') }}" alt=""
                                    style="width: 47px" height="50px">
                            </a>
                            <a href="https://www.youtube.com/@bpskotajambi9179">
                                <img src="{{ asset('template/assets/img/yt.png') }}" alt=""
                                    style="width: 47px" height="50px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- End Footer -->


        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <a href="https://wa.me/+6285162839410" class="whatsapp-float" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1197px-WhatsApp.svg.png"
                alt="WhatsApp" width="50" height="50">
        </a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Modal -->
        <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3 class="modal-title" id="serviceModalLabel"></h3>
                        <img id="modalImage" src="" alt="" class="img-fluid mb-3 mt-3">
                        <h2><a href="#" id="standardsLink">Baca Standar Layanan!</a></h2>
                        <p id="modalDescription" style="text-align: start"></p>
                        <div id="modalHours" class="mt-3 d-flex align-items-start" style="flex-direction: column"></div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <a href="#" class="btn btn-primary" id="modalButton">Button Text</a>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Modal standar layanan -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImageContent" src="" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- Template Main JS File -->
        <script src="{{ asset('template/assets/js/main.js') }}"></script>
</body>

</html>
