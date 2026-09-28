@extends('frontend.layouts.main')
@section('title', 'Contact Us - Go Go Gorgeous')
@section('meta_description',
    'Get in touch with Go Go Gorgeous to book your beauty or laser hair removal
    appointment. Visit our clinic or contact our expert team for a free
    consultation.')
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
                <div class="col-xl-6">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Contact Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Contact Our Experts for Your Perfect
                                Look</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Schedule your appointment with our expert team
                                and enjoy a smooth, hassle-free beauty and skin care experience tailored just for you.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info List Start -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-location-primary.svg') }}"
                                        alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Address :</h3>
                                    <p>16674 64 Ave, Surrey, BC V3S 0W5, Canada</p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-phone-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Phone Number :</h3>
                                    <p><a href="tel:+16045064358">+1 (604) 506-4358</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-mail-primary.svg') }}" alt="">
                                </div>
                                <div class="contact-info-item-content">
                                    <h3>Email Address :</h3>
                                    <p><a href="mailto:info@gogorgeous.com">info@gogorgeous.com</a></p>
                                </div>
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Info List End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" method="POST" data-toggle="validator"
                                class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label>Full Name:</label>
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            placeholder="Enter First Name *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>Last Name:</label>
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>Email Address:</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter Email Address *" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label>Phone Number:</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter Phone Number" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <label>Select Service:</label>
                                        <select name="service" class="form-control" required>
                                            <option value="" disabled selected>Choose a Service</option>
                                            @foreach($services as $service)
                                            <option value="{{ $service->title }}">{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <label>Message:</label>
                                        <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write Message Here......"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">Submit now</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Visit Our Location</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Come Visit Our Style Studio</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Visit our clinic and experience professional
                            beauty and laser care in a clean, comfortable, and welcoming environment. Conveniently
                            located for easy access.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2611.315337876273!2d-122.76092609999999!3d49.118646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485da8477ae80b5%3A0x53ba85eafa900078!2sGo%20Go%20Gorgeous%20Beauty%20Salon!5e0!3m2!1sen!2s!4v1788153134563!5m2!1sen!2s"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->


@endsection

