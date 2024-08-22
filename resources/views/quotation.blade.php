@extends('layouts.main')
@php($title = 'Quotation')
@section('content')

    <main class="main mt-5">
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Request For Quotation</h2>
                </div>

                <div class="row">

                    <div class="col-lg-7 ml-auto mr-auto mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        @livewire('quotation-form')
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->
@endsection
