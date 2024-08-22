@extends('layouts.main')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1>Better digital experience with Torchlight</h1>
                    <h2>We are team of talented software developers always up to date with the latest trends in technology</h2>
                    <a href="#about" class="btn-get-started scrollto">Read More</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="/img/undraw_programmer_re_owql.svg" class="img-fluid animated w-75" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->


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


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Clients</h2>
                    <p>They trusted us</p>
                </div>

                <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
                    <img src="/img/ncst.png" alt="">
                    <img src="/img/finances.jpg" alt="">
                    <img src="/img/logo-dark.png" alt="">
                    <img src="/img/holdings.JPG" alt="">
                    <img src="/img/construction.JPG" alt="">
                    <img src="/img/ccap.jpg" alt="">
                    <img src="/img/livestock.JPG" alt="">

                </div>
            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Portfolio</h2>
                    <p>Check out some of our works</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($works as $work)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="/img/{{$work['image']}}.png" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="/img/{{$work['image']}}.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                                    <a href="{{$work['link']}}" title="More Details"><i class="icofont-link"></i></a>
                                </div>
                                <div class="portfolio-info">
                                    <h4>{{$work['description']}}</h4>
                                    <p>{{$work['cat']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Services</h2>
                    <p>We are ready to be at your service</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-html5"></i></div>
                            <h4 class="title"><a href="">Web Designing</a></h4>
                            <p class="description">We develop highly customized websites just to meet your needs while supporting you after you host </p>
                            <br>
                            <p class="get-started"><a href="{{route('web-designing')}}">Read More</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-server"></i></div>
                            <h4 class="title"><a href="">Web Hosting</a></h4>
                            <p class="description">Our servers have 99.99% uptime which means you dont have to relax and are heavily affordable</p>
                            <br>
                            <p class="get-started"><a href="{{route('web-hosting')}}">Read More</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-android"></i></div>
                            <h4 class="title"><a href="">App Development</a></h4>
                            <p class="description">We specialize in development of cross-platform applications whether IOS or Android</p>
                            <br>
                            <p class="get-started"><a href="#about">Read More</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Email Hosting</a></h4>
                            <p class="description">Let your emails be more professional and customized for your company</p>
                            <br>
                            <p class="get-started"><a href="{{route('email-hosting')}}">Read More</a></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-search"></i></div>
                            <h4 class="title"><a href="">SEO optimization</a></h4>
                            <p class="description">Let your site stand out of the crowd and let search engines index your site quickly </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-money"></i></div>
                            <h4 class="title"><a href="">Digital Marketing</a></h4>
                            <p class="description">Reach out to millions with your business idea on social media with a few hours </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Frequently Asked Questions</p>
                </div>

                <ul class="faq-list">
                    @foreach($faqs as $index => $faq)
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-toggle="collapse" class="{{$index == 0?'':'collapsed'}}" href="#faq{{$index}}">{{$faq['question']}} <i class="icofont-simple-up"></i></a>
                            <div id="faq{{$index}}" class="collapse {{$index == 0?'show':''}}" data-parent=".faq-list">
                                <p>
                                    {{$faq['answer']}}
                                </p>
                            </div>
                        </li>
                    @endforeach


                </ul>

            </div>
        </section><!-- End F.A.Q Section -->



    </main>
@endsection
