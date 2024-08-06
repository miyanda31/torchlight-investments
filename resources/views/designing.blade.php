@extends('layouts.main')

@section('content')
    <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Why choose us</h2>
                <p>We are specialists in web designing</p>
            </div>

            <div class="row">
                @foreach($reasons as $reason)
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-{{$reason['icon']}}"></i></div>
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
                    <h1 class="mb-3">Our Design Plans</h1>
                    <p style="font-weight: normal; font-size: medium" class="text-center mb-1">All our web design plans come with the following included. We have you covered so dont pay for what is free</p>
                </div>
               <div class="container">
                   <div class="row gx-4 text-secondary text-center">
                       <div class="w-100 wow fadeInUp mb-5 clearfix" data-wow-delay="0.2s">
                           <ul class="list-unstyled text-advert">
                               <li><i class="bx bx-sm bx-check"></i> Free SSL</li>
                               <li><i class="bx bx-sm bx-check"></i> Customized Pages</li>
                               <li><i class="bx bx-sm bx-check"></i> WhatsApp Chat</li>
                               <li><i class="bx bx-sm bx-check"></i> Single Domain (com/net/org)</li>
                               <li><i class="bx bx-sm bx-check"></i> Unlimited Emails</li>
                               <li><i class="bx bx-sm bx-check"></i> Unlimited Subdomains</li>
                               <li><i class="bx bx-sm bx-check"></i> Automated Backup</li>
                               <li><i class="bx bx-sm bx-check"></i> Free Updates</li>
                               <li><i class="bx bx-sm bx-check"></i> Free 1 yr Hosting</li>
                               <li><i class="bx bx-sm bx-check"></i> Contact Form</li>
                               <li><i class="bx bx-sm bx-check"></i> SEO optimization</li>
                               <li><i class="bx bx-sm bx-check"></i> 1 cPanel</li>
                           </ul>

                       </div>
                   </div>
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
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>100,000
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>10 GB SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>5 Customized Pages</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Basic CMS</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Single Blog</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Single Sub-domain</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Contact Form</p>
                                <p class="mb-0"><i class="bx bx-check bx-sm text-success me-3"></i>Video Training</p>
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
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>250,000
                                </h1>

                                <a class="btn btn-secondary px-4 py-2" href="">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>30 GB SSD</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Logo Design</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>10 Customized Pages</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Facebook Chat</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Social Media Integration</p>
                                <p  class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Booking Form</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Video Training</p>
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
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">K</small>750,000
                                </h1>
                                <a class="btn btn-primary px-4 py-2" href="">Buy Now</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Unlimited Disk Space</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Logo Design</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Whatsapp/Facebook Chat</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Invoicing/Quotations</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Billing</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Orders</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Tickets/Enquiries</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Email Campaigns</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Financial Reports</p>
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>Online/In-Person Training</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex icon-center bg-success rounded-circle">
                                <i class="bx bx-cog bx-sm text-white text-center"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">Customized</h4>
                                <p class="mb-0">Heavily customized and tailored to your needs</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="">Request For Quotation</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-2"><i class="bx bx-check bx-sm text-success me-3"></i>
                                    For heavily customized sites, you can always contact us so that we meet your
                                    needs via whatsapp for instant response</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Pricing End -->

    </main>
@endsection
