<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('judul') - KKT</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/tema/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/tema/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/tema/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/tema/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/tema/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/tema/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/tema/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/tema/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5f23f83c10.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('/tema/css/style.css') }}" rel="stylesheet">
    @yield('ekstracss')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('/tema/img/logo.png') }}" alt="">
                <span>KOKOH KUAT TERPERCAYA</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#pricing">Pricing</a></li>
                    <li class="dropdown"><a href="#"><span>Other</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('/') }}#faq">FAQ</a></li>
                            <li class="dropdown"><a href="#"><span>Portfolio</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ url('/') }}#portfolio">Gudang</a></li>
                                    <li><a href="{{ url('/') }}#team">Team</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/berita') }}">Berita</a></li>
                            <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact</a></li>
                    <li>
                        <a class="getstarted scrollto" href="{{ url('/login') }}">Login</a>
                    </li>
                    {{-- @if (Auth::check())
                        <li><a class="getstarted scrollto" href="{{ url('/index') }}">Dashboard</a></li>
                        <li>
                            <a class="getstarted scrollto bg-danger" href="{{ url('/logout') }}">Logout</a>
                        </li>
                    @else
                        <li>
                            <a class="getstarted scrollto" href="{{ url('/login') }}">Login</a>
                        </li>
                    @endif --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('hero')

    <main id="main">
        @yield('main')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                            <img src="{{ asset('/tema/img/logo.png') }}" alt="">
                            <span>KOKOH KUAT TERPERCAYA</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="https://www.twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#about">About us</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#services">Services</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Product</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#pricing">Semen
                                    Tonasa</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#pricing">Semen
                                    Dynamix</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Andi Pangeran Pettarani 2 No. 34A<br>
                            Kecamatan Panakukang<br>
                            Makassar, Sulawesi Selatan<br>
                            90231<br><br>

                            <strong>Phone:</strong> (0411) 8960918<br>
                            <strong>Email:</strong> kokohkuat.terpercaya@yahoo.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>KOKOH KUAT TERPERCAYA</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/tema/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/tema/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/tema/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/tema/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/tema/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/tema/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/tema/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/tema/js/main.js') }}"></script>
    @yield('ekstrajs')

</body>

</html>
