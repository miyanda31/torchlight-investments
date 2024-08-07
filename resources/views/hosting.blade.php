@extends('layouts.main')

@section('content')
    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Why choose us</h2>
                    <p>With 99.99% uptime, you cant go wrong with us</p>
                </div>

                <div class="row">
                    @foreach($reasons as $reason)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-{{$reason['icon']}}"></i></div>
                                <h4 class="title"><a href="">{{$reason['name']}}</a></h4>
                                <p class="description">{{$reason['description']}}</p>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- Pricing Start -->
        <div class="container-fluid py-5">
            <div class="container-fluid px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Hosting Plans</h1>
                </div>

                <div class="row gx-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.2s">
                        <div class="position-relative  shadow rounded border-top border-5 border-primary">
                            <div class="d-flex  icon-center align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="bx bx-user bx-sm text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Basic</h4>
                                <p class="mb-0">Perfect for individuals who want a web presence</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>4,000 <small class="align-bottom" style="font-size: 18px">/ Month</small>
                                </h1>
{{--                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>--}}
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Single Domain</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>5GB NVME SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED SSL</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>One Click WordPress Installs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Weekly Backups</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>10 E-mail IDs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>5GB Bandwidth</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>LiteSpeed Technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.4s">
                        <div class="position-relative shadow rounded border-top border-5 border-secondary">
                            <div class="d-flex  icon-center align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="bx bx-card bx-sm text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Standard</h4>
                                <p class="mb-0">Perfect for companies or organizations that want a more customized and visually appealing web presence for their clients</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-success mb-1">All features in Basic</p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>7,000 <small class="align-bottom" style="font-size: 18px">/ Month</small>
                                </h1>

{{--                                <a class="btn btn-secondary px-4 py-2" href="">Buy Now</a>--}}
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i> Host a single website</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED NVME SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED SSL</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Weekly Backups</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>One Click WordPress Installs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Email IDs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Bandwidth</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>LiteSpeed Technology</p>
                                <p  class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>PREMIUM SEO TOOL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex  icon-center align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="bx bx-sm bx-credit-card text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Business</h4>
                                <p class="mb-0">Perfect for start-ups or established businesses who want to incorporate features or migrate to a paperless way of managing things</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <p class="text-success mb-1">All features in Standard</p>
                                <h1 class="mb-3">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>10,000 <small class="align-bottom" style="font-size: 18px">/ Month</small>
                                </h1>
{{--                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>--}}
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i> Host a single website</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED NVME SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Daily Backups</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>One Click WordPress Installs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED SSL</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Subdomains SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Email IDs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Bandwidth</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>LiteSpeed Technology</p>
                                <p  class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>PREMIUM SEO TOOL</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex icon-center bg-success rounded-circle">
                                <i class="bx bx-cog bx-sm text-white text-center"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Premium</h4>
                                <p class="mb-0">Heavily customized and tailored to your needs</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <h1>
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>15,000 <small class="align-bottom" style="font-size: 18px">/ Month</small>

                                </h1>
{{--                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>--}}
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i> Host a single website</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED NVME SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED SSL</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Daily Backups</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>One Click WordPress Installs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Subdomains</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Email IDs</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>UNLIMITED Bandwidth</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>LiteSpeed Technology</p>
                                <p  class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>PREMIUM SEO TOOL</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Pricing End -->



    </main>
@endsection
