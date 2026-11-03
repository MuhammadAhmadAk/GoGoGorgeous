@extends('frontend.layouts.main')
@section('title', 'Contact Us - Go Go Gorgeous')
@section('meta_description',
    'Get in touch with Go Go Gorgeous to book your beauty or laser hair removal
    appointment. Contact our expert team for a consultation.')
@section('meta_keywords',
    'contact go go gorgeous, book appointment, beauty clinic contact, laser hair
    removal booking, salon inquiry')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie" style="background-image: url('{{ \App\Models\SiteSetting::get('header_bg_contact') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('header_bg_contact'))) : asset('frontend/images/about/page-header-bg.webp') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-4 mb-xl-0">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Contact Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in Touch with Our Specialists</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Have questions about our services or ready to book your session? Reach out to our dedicated beauty and skin care specialists today.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                            @php
                                $contactPhone = \App\Models\SiteSetting::get('phone', '+1 (604) 506-4358');
                                $contactEmail = \App\Models\SiteSetting::get('email', 'info@gogorgeous.com');
                                $openingHours = \App\Models\SiteSetting::get('opening_hours', 'Mon-Sat: 9AM - 8PM');
                            @endphp

                            @if($contactPhone)
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-phone-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Phone Number :</h3>
                                    <p><a href="tel:{{ preg_replace('/[^0-9+]/', '', $contactPhone) }}">{{ $contactPhone }}</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                            @endif

                            @if($contactEmail)
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-mail-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Email Address :</h3>
                                    <p><a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                            @endif

                            @if($openingHours)
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-clock.svg') }}" alt="" onerror="this.src='{{ asset('frontend/images/icons/icon-phone-primary.svg') }}'">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Working Hours :</h3>
                                    <p>{{ $openingHours }}</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                            @endif
                        </div>
                        <!-- Contact Info List End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Call Now Card Start -->
                    <div class="contact-us-form text-center p-4 p-md-5 rounded-4 shadow-sm" style="background: #ffffff; border: 1px solid #ebebeb;">
                        <div class="section-title mb-4">
                            <span class="section-sub-title wow fadeInUp">Book An Appointment</span>
                            <h2 class="text-anime-style-3 mb-3" data-cursor="-opaque">Ready to Look & Feel Gorgeous?</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Appointments are booked directly over the phone for the fastest service and personalized consultation. Tap the button below to connect with us immediately!
                            </p>
                        </div>

                        <div class="my-4 py-2">
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contactPhone) }}" class="btn-default btn-highlighted py-3 px-5 d-inline-flex align-items-center justify-content-center gap-2" style="font-size: 1.25rem;">
                                <i class="fa-solid fa-phone-volume"></i>
                                <span>Call Now</span>
                            </a>
                        </div>

                        <div class="mt-4 pt-2">
                            <span class="text-muted d-block small mb-1">Direct Booking Line:</span>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contactPhone) }}" class="fw-bold fs-4 text-dark text-decoration-none">
                                {{ $contactPhone }}
                            </a>
                        </div>
                    </div>
                    <!-- Call Now Card End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

@endsection
