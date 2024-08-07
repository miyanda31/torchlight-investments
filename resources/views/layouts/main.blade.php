<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Torchlight - {{$title??'Home'}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Website, Design, Application, Hosting, Digital Marketing, Ecommerce " name="keywords">
    <meta content="Torchlight Investments Ltd specializes in web designing and hosting, mobile application development, Ecommerce sites as well as SEO optimization " name="description">

    <!-- Favicons -->
    <link href="/favicon.icon" rel="icon">
    <link href="/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Ninestars - v2.0.0
    * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
             <a href="{{route('home')}}"><img src="/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{request()->routeIs('home')?'active':''}}"><a href="{{route('home')}}">Home</a></li>
                <li class="drop-down"><a href="#">Services</a>
                    <ul>
                        <li><a href="{{route('web-designing')}}">Web Designing</a></li>
                        <li><a href="{{route('web-hosting')}}">Web Hosting</a></li>
                        <li><a href="#">App Development</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                    </ul>
                </li>
                <li class="{{request()->routeIs('about')?'active':''}}"><a href="{{route('about')}}" >About</a></li>
                <li class="{{request()->routeIs('contact')?'active':''}}"><a href="{{route('contact')}}">Contact</a></li>
                <li class="get-started"><a href="#about">Get a Quote</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                    <h3>Torchlight Investments</h3>
                    <p>
                       c/o Katoto Secondary School <br>
                        Private Bag 36<br>
                        Mzuzu <br><br>
                        <strong>Phone:</strong> {{env('APP_PHONE')}}<br>
                        <strong>Email:</strong> {{env("APP_EMAIL")}}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i>  <a href="{{route('web-designing')}}">Projects</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}" >About</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Hosting</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Application Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Email Hosting</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                    <h4>Our Social Networks</h4>
                    <p>You can always join us or like our content on social media</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61563797277821" class="facebook"><i class="bx bxl-facebook"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Torchlight</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/venobox/venobox.min.js"></script>
<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="/js/main.js"></script>

</body>

</html>
