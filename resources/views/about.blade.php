@extends('layouts.main')
@php($title = 'About')
@section('content')


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="/img/two.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Welcome to Pamthuzi Construction and Property Management</p>
                        <h2>3+ Years Experience</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            At Pamthuzi Construction and Property Management, we pride ourselves on building foundations of vibrant communities.
                            With an aim to ensure quality and innovation, we are your trusted partner in construction and property management.
                        </p>

                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <x-facts/>
    <x-frequently/>
@endsection
