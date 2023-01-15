@extends('layouts.template')

@section('judul')
    Beranda
@endsection

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">PT KOKOH KUAT TERPERCAYA</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Bisnis semen di Indonesia dari tahun ke tahun semakin
                        meningkat, seiring dengan pembangunan infrastruktur di Indonesia.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="{{ url('/') }}#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Jelajahi</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/tema/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
@endsection

@section('main')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Tentang Kami</h3>
                        <h2>PT Kokoh Kuat Terpercaya (PT. KKT)
                        </h2>
                        <p>
                            PT. KKT adalah salah satu perusahaan distributor Semen Indonesia yang
                            memasarkan produk Semen Tonasa. Berdiri sejak tanggal 29 Desember 2014 sesuai dengan akte
                            pendirian No 93 tgl 29 Desember 2014 di Notaris Dr. Abdul Muis SH MH di Makassar.
                            <br>
                            Awal mula berdiri PT KKT terdiri dari 12 pemegang saham, kemudian setelah dilakukan RUPS tahun
                            2016 untuk kinerja tahun 2015 terjadi perubahan pemegang saham yang semula 12 orang kemudian
                            menjadi 2 orang saja.
                            <br>
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="{{ url('/tentang') }}"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Struktur</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/tema/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- Feature Tabs -->
            <div class="row feture-tabs mt-0" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Sebaran Wilayah Pemasaran dan Visi Misi PT. KOKOH KUAT TERPERCAYA</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Wilayah Pemasaran</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Visi</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Misi</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p>Wilayah penjualan PT KKT berada di Provinsi Sulawesi Selatan yang meliputi kabupaten
                                Bone,
                                Soppeng, Wajo, Sidrap, Pinrang dan Kotamadya Parepare.
                                <br>Dibagi menjadi 2 wilayah pemasaran:
                            </p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Wilayah pemasaran 1 : Kabupaten Bone, Soppeng, dan wajo.</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>Wilayah pemasaran 2 : Kabupaten Sidrap, Pinrang, dan Kotamadya Parepare.</h4>
                            </div>
                            <p>Dilengkapi sales disetiap wilayah pasar dan sarana lainnya seperti gudang dan kantor
                                perwakilan, dengan harapan pelayanan ke mitra akan selalu berjalan dan terjaga dengan
                                baik.
                            </p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="d-flex align-items-center justify-content-center text-center mb-2">
                                <h3>“Berkembang bersama membangun bangsa dan menjadi distributor Semen Indonesia
                                    terbesar”
                                </h3>
                            </div>
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">
                            <p>Misi PT. KOKOH KUAT TERPERCAYA :</p>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-1-circle"></i>
                                <h4>Memasarkan produk Semen Indonesia diwilayah pasar PT. KOKOH KUAT TERPERCAYA.</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-2-circle"></i>
                                <h4>Memberikan layanan terbaik ke mitra kerja PT. KOKOH KUAT TERPERCAYA.</h4>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-3-circle"></i>
                                <h4>Menjadikan perusahaan sebagai distributor berkinerja baik dan sehat.</h4>
                            </div>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="{{ asset('/tema/img/features-2.png') }}" class="img-fluid" alt="">
                </div>

            </div><!-- End Feature Tabs -->

        </div>

    </section><!-- End Features Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Keunggulan Kami</h2>
                <p>Keunggulan Yang Kami Tawarkan</p>
            </header>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <img src="{{ asset('/tema/img/values-1.png') }}" class="img-fluid" alt="">
                        <h3>Jaminan Mutu dan Kualitas</h3>
                        <p>Seluruh hasil kami dibuat dengan kualifikasi teknis dan kualitas di atas Standar Nasional
                            Indonesia (SNI).</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <img src="{{ asset('/tema/img/values-2.png') }}" class="img-fluid" alt="">
                        <h3>Teknologi dan Inovasi</h3>
                        <p>Kami sangat meyakini bahwa adaptasi teknologi dan inovasi adalah solusi jangka panjang pada
                            perusahaan</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box">
                        <img src="{{ asset('/tema/img/values-3.png') }}" class="img-fluid" alt="">
                        <h3>Profesional dan Kompeten</h3>
                        <p>Didukung dan dikerjakan oleh tenaga terampil serta sumber daya manusia yang profesional dan
                            kompeten.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Layanan</h2>
                <p>Pelayanan Yang Kami Tawarkan</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box orange">
                        <i class="ri-money-dollar-circle-fill icon"></i>
                        <h3>Sales Pemasaran</h3>
                        <p>Kegiatan distribusi didukung dengan 8 orang sales pemasaran yang tersebar di seluruh wilayah
                            pemasaran.</p>
                        {{-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box blue">
                        <i class="ri-truck-fill icon"></i>
                        <h3>Unit Pengantaran</h3>
                        <p>Kami memiliki 100 unit mobil untuk kegiatan pengantaran.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box green">
                        <i class="ri-home-4-fill icon"></i>
                        <h3>Unit Gudang</h3>
                        <p>Untuk menunjang kegiatan distribusi, kami memiliki 8 unit gudang yang tersebar di setiap wilayah
                            pemasaran.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box red">
                        <i class="ri-service-fill icon"></i>
                        <h3>Pengalaman Operasi</h3>
                        <p>Beroperasi sejak 29 Desember 2014 membuat kaya akan pengalaman.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box purple">
                        <i class="ri-discuss-line icon"></i>
                        <h3>Akses Toko</h3>
                        <p>Kegiatan pemesanan produk oleh toko dapat dipermudah dengan penggunaan perangkat lunak akses toko
                            yang berbasis mobile.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-bar-chart-grouped-fill icon"></i>
                        <h3>Inovasi Untuk Kemajuan</h3>
                        <p>Terus bergerak maju untuk menciptakan inovasi bagi bangsa.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Produk</h2>
                <p>Produk Kami</p>
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">Semen Tonasa</h3>
                        <div class="price">50<span>kg</span></div>
                        <img src="{{ asset('/tema/img/Tonasa50.png') }}" class="img-fluid" alt="">
                        <a href="{{ url('/') }}#contact" class="btn-buy">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <span class="featured">Best Seller</span>
                        <h3 style="color: #65c600;">Semen Tonasa</h3>
                        <div class="price">40<span>kg</span></div>
                        <img src="{{ asset('/tema/img/Tonasa40.png') }}" class="img-fluid" alt="">
                        <a href="{{ url('/') }}#contact" class="btn-buy">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <h3 style="color: #ff901c;">Semen Dynamix</h3>
                        <div class="price">50<span>kg</span></div>
                        <img src="{{ asset('/tema/img/Dynamix50.png') }}" class="img-fluid" alt="">
                        <a href="{{ url('/') }}#contact" class="btn-buy">Hubungi Kami</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <h3 style="color: #ff0071;">Semen Dynamix</h3>
                        <div class="price">40<span>kg</span></div>
                        <img src="{{ asset('/tema/img/Dynamix40.png') }}" class="img-fluid" alt="">
                        <a href="{{ url('/') }}#contact" class="btn-buy">Hubungi Kami</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Portfolio</h2>
                <p>Dokumentasi Gudang</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-bone">Bone</li>
                        <li data-filter=".filter-parepare">Parepare</li>
                        <li data-filter=".filter-pinrang">Pinrang</li>
                        <li data-filter=".filter-sidrap">Sidrap</li>
                        <li data-filter=".filter-soppeng">Soppeng</li>
                        <li data-filter=".filter-wajo">Wajo</li>
                    </ul>
                </div>
            </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-bone">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/palakka1.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Palakka 1</h4>
                            <p>Bone</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/palakka1.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Palakka 1</h3>
                                    Alamat gudang Jl. Mt. Haryono, Palakka, Bone &lt;br&gt;
                                    Kapasitas Gudang : 15,000 zak (750 Ton) &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 50 meter x 110 meter &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.535786764467986, 120.2930859303791
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Palakka 1 Bone</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317.75003932326507!2d120.29304312596298!3d-4.535903260003901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4a55b9f442768f0!2zNMKwMzInMDguOCJTIDEyMMKwMTcnMzUuMSJF!5e0!3m2!1sid!2sid!4v1669946832523!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-soppeng">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/soppeng.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Soppeng</h4>
                            <p>Soppeng</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/soppeng.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Soppeng</h3>
                                    Alamat : Jalan Poros Maros - Soppeng, Takalalla, Tettikengrarae, Kec. Mario Riwawo, Kabupaten Soppeng, Sulawesi Selatan &lt;br&gt;
                                    Kapasitas Gudang : 3.000 zak &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 5 m x 15 m &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.459431593451369, 119.95068102950002
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Soppeng</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.7397208140055!2d119.94849231463374!3d-4.459426248574578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2064553d90eb9d76!2zNMKwMjcnMzQuMCJTIDExOcKwNTcnMDIuNSJF!5e0!3m2!1sid!2sid!4v1670210034666!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-bone">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/labuaja.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Labuaja</h4>
                            <p>Bone</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/labuaja.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Labuaja</h3>
                                    Alamat gudang Desa Labuaja, Kec. Kahu, Bone &lt;br&gt;
                                    Kapasitas Gudang : 3.000 zak (150 Ton) &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 12 meter x 15 meter &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.987310967444413, 120.11797295261934
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Labuaja Bone</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.0088609806281!2d120.1180582937958!3d-4.987383525718556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6e76bd4e808b03d!2zNMKwNTknMTQuMyJTIDEyMMKwMDcnMDQuNyJF!5e0!3m2!1sid!2sid!4v1669947238055!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-wajo">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/wajo.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Wajo</h4>
                            <p>Wajo</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/wajo.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Wajo</h3>
                                    Alamat : Jalan Poros Sengkang - Sabbangparu, Sompe, Sabbang Paru, Kabupaten Wajo, Sulawesi Selatan 90961 &lt;br&gt;
                                    Kapasitas Gudang : 3.000 zak &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 12 m x 13 m &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.213060485606713, 120.01002926616897
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Wajo</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.0368881440745!2d120.00784061463199!3d-4.213055147008204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6d113cff13be468!2zNMKwMTInNDcuMCJTIDEyMMKwMDAnMzYuMSJF!5e0!3m2!1sid!2sid!4v1670210390331!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-parepare">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/parepare.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Parepare</h4>
                            <p>Parepare</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/parepare.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Parepare</h3>
                                    Alamat gudang Jl. Jend. Muh Yamin, Bacukiki, Pare-pare &lt;br&gt;
                                    Kapasitas Gudang : 3,500 zak (175 Ton) &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 10 meter x 15 meter &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.004863302950783, 119.66549906296623
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Parepare</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1347.5096814029866!2d119.66473289235587!3d-4.005025967445515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5b20d5af61a739e!2zNMKwMDAnMTcuNSJTIDExOcKwMzknNTUuOCJF!5e0!3m2!1sid!2sid!4v1669947331968!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pinrang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/pinrang.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Pinrang</h4>
                            <p>Pinrang</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/pinrang.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Pinrang</h3>
                                    Alamat gudang Desa Barugae, Kec. Duampanua, Pinrang &lt;br&gt;
                                    Kapasitas Gudang : 12.000 zak (600 Ton) &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 9 meter x 24 meter &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -3.570558181575831, 119.53803075579012
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Pinrang</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0735554998664!2d119.53584211462751!3d-3.570552843389748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd175bb53a628e6de!2zM8KwMzQnMTQuMCJTIDExOcKwMzInMTYuOSJF!5e0!3m2!1sid!2sid!4v1669947383106!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-bone">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/palakka2.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Palakka 2</h4>
                            <p>Bone</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/palakka2.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Palakka 2</h3>
                                    Alamat gudang Jl. Mt. Haryono, Palakka, Bone &lt;br&gt;
                                    Kapasitas Gudang : 15,000 zak (750 Ton) &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 65 meter x 100 meter &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -4.535786764467986, 120.2930859303791
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Palakka 2 Bone</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317.75003932326507!2d120.29304312596298!3d-4.535903260003901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf4a55b9f442768f0!2zNMKwMzInMDguOCJTIDEyMMKwMTcnMzUuMSJF!5e0!3m2!1sid!2sid!4v1669946832523!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-sidrap">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('/tema/img/portfolio/sidrap.png') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Gudang Sidrap</h4>
                            <p>Sidrap</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('/tema/img/portfolio/sidrap.png') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" onmouseover="this.title='Deskripsi';"
                                    title="
                                    <h3>Gudang Sidrap</h3>
                                    Alamat : Jalan Sejahterah, Kelurahan Majelling, Sidrap &lt;br&gt;
                                    Kapasitas Gudang : 4.200 zak &lt;br&gt;
                                    Status Gudang : Sewa &lt;br&gt;
                                    Ukuran Gudang : 17 m x 13 m &lt;br&gt;
                                    Handling : Manual &lt;br&gt;
                                    Koordinat : -3.9238131057986187, 119.7999809534582
                                    "><i
                                        class="bi bi-fullscreen"></i></a>
                                <a data-gallery="portfolioGallery" class="portfokio-lightbox"
                                    onmouseover="this.title='Map';"
                                    title='<div class="text-center">
                                        <h2>Map Gudang Sidrap</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4767.900696711544!2d119.79737207396379!3d-3.9236775219596405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x760d550ba315af4c!2zM8KwNTUnMjUuNyJTIDExOcKwNDcnNTkuOSJF!5e0!3m2!1sid!2sid!4v1669947427126!5m2!1sid!2sid" 
                                        width="70%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>'>
                                    <i class="bi bi-geo-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                {{-- <h2>Penghargaan</h2> --}}
                <p>Capaian Penghargaan</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Pencapaian Kinerja Penjualan Terbaik
                            </h3>
                            <div class="profile">
                                <img src="{{ asset('/tema/img/testimonials/p1.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Penjualan Tonasa 50KG</h3>
                                <h4>Tahun 2017</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Sulawesi Selatan
                            </h3>
                            <div class="profile">
                                <img src="{{ asset('/tema/img/testimonials/p2.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 1</h3>
                                <h4>Tahun 2020</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Nasional
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p3.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 3</h3>
                                <h4>Tahun 2020</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Nasional
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p4.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 4</h3>
                                <h4>Tahun 2021</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Sulawesi Selatan
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p5.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 1</h3>
                                <h4>Tahun 2021</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Nasional
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p6.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 4</h3>
                                <h4>Tahun 2018</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Sulawesi Selatan
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p7.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 1</h3>
                                <h4>Tahun 2019</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Nasional
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p8.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 3</h3>
                                <h4>Tahun 2019</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Sulawesi Selatan
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p9.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 1</h3>
                                <h4>Tahun 2018</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Retail Kategori Pemasaran
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p10.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 1</h3>
                                <h4>Tahun 2019</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>
                                Distributor Penjualan Skala<br>
                                Sulawesi Selatan
                            </h3>
                            <div class="profile mt-auto">
                                <img src="{{ asset('/tema/img/testimonials/p11.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Peringkat 3</h3>
                                <h4>Tahun 2017</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Tim</h2>
                <p>Struktur Manajemen</p>
            </header>

            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('/tema/img/team/1.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/yasir_machmud/" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Yasir Machmud, SE.</h4>
                            <span>Pemegang Saham</span>
                            <p>SEMANGAT.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('/tema/img/team/2.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/andifitri18/" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Hj. Andi Fitri Ilham</h4>
                            <span>Komisaris</span>
                            <p>InsyaAllah Berkah.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('/tema/img/team/3.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/taufikrusly/" class="instagram"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Taufik Rusly</h4>
                            <span>Direktur Utama</span>
                            <p>Kerja, Kerja, Kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Berita</h2>
                <p>Postingan Berita Terbaru</p>
            </header>
            <div class="row">
                @foreach ($newBerita as $newB)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('storage/' . $newB->gambar) }}" class="img-fluid"
                                    style="width:800px" alt="Berita"></div>
                            <span
                                class="post-date">{{ \Carbon\Carbon::parse($newB->created_at)->isoFormat('dddd, D MMMM Y') }}</span>
                            <h3 class="post-title">{{ $newB->judul }}
                            </h3>
                            <a href="{{ $newB->tautan }}"
                                class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Kontak</h2>
                <p>Hubungi Kami</p>
            </header>

            <div class="mb-3">
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.734409534322!2d119.4440487147639!3d-5.146392453465987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2c953e021cb%3A0xa5b7f19d36484df5!2sPT%20KOKOH%20KUAT%20TERPERCAYA!5e0!3m2!1sid!2sid!4v1664845165097!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. Andi Pangeran Pettarani 2 No. 34A<br>
                                    Kecamatan Panakukang<br>
                                    Makassar, Sulawesi Selatan<br>
                                    90231<br></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Waktu Buka</h3>
                                <p>Senin - Jum'at<br>08:00 - 16:30<br>Sabtu<br>08:00 - 12:00</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>(0411) 8960918</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>kokohkuat.terpercaya@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="info-box">
                        <img src="{{ asset('/tema/img/tonasaLogo.png') }}" alt="Logo Tonasa" width="400px"
                            height="400px">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
