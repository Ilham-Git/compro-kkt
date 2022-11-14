@extends('layouts.template')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div>
                    <h1 class="opacity-0">-</h1>
                </div>
                <div class="col-lg-12 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <h1>STRUKTUR ORGANISASI</h1>
                </div>
                <div class="col-lg-12 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <h2>PT. KOKOH KUAT TERPERCAYA</h2>
                </div>
                <div class="col-lg-10 offset-md-1 d-flex justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('/tema/img/hero-tentang.png') }}" class="img-fluid" alt="Struktur Organisasi">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
@endsection
