@extends('layouts.main')
@php($title = 'About')
@section('content')
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">About Us</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Torchlight Investments is a leading web design and development
                            company dedicated to creating innovative and effective digital solutions.
                            Our team of skilled professionals is passionate
                            about the art of digital craftsmanship and committed to delivering exceptional value to our clients.
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bxs-ship"></i>
                                <h4>Our Vision</h4>
                                <p>
                                    Our mission is to transform your vision into reality.
                                    We aim to create digital experiences that are not only innovative and market leading - but most importantly,
                                    deliver commercial success.
                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Our Commitment</h4>
                                <p>We pride ourselves on our reliability, flexibility and integrity.
                                    We believe that our success is a direct reflection of the success of our clients,
                                    and we take pride in their satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main>
@endsection
