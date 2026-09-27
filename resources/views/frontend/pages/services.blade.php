@extends('frontend.layouts.main')
@section('title', 'Our Services - Go Go Gorgeous')
@section('meta_description',
    'Explore our full range of beauty and laser services including hair color,
    facials, waxing, threading, laser hair removal, IPL skin rejuvenation,
    microblading, and body sculpting.')
@section('meta_keywords',
    'beauty services, laser hair removal, facials, hair coloring, waxing,
    threading, microblading, body sculpting, skin rejuvenation')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our Services</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Services Section Start -->
    <div class="page-services py-5">
        <div class="container">
            <div class="row">
                @foreach($services as $index => $service)
                @php
                    $titleWords = explode(' ', trim($service->title));
                    $lastWord = count($titleWords) > 1 ? array_pop($titleWords) : '';
                    $prefixWords = implode(' ', $titleWords);
                @endphp
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="{{ $index * 0.05 }}s">
                        <!-- Top Image with Wave Divider -->
                        <div class="service-media-card">
                            <figure>
                                <img src="{{ $service->featured_image_url }}" alt="{{ $service->title }}" class="service-img">
                            </figure>
                            <div class="service-wave-divider">
                                <svg viewBox="0 0 500 80" preserveAspectRatio="none">
                                    <path d="M 0,35 C 130,65 240,40 500,10 L 500,80 L 0,80 Z" class="wave-bg" />
                                    <path d="M 0,35 C 130,65 240,40 500,10" class="wave-line" />
                                </svg>
                            </div>
                        </div>

                        <!-- Card Body Content -->
                        <div class="service-content-card">
                            <div>
                                <div class="service-title-box">
                                    <h2>
                                        <a href="{{ route('contact') }}">
                                            @if(!empty($prefixWords))
                                                <span>{{ $prefixWords }}</span> <span class="text-pink">{{ $lastWord }}</span>
                                            @else
                                                <span class="text-pink">{{ $service->title }}</span>
                                            @endif
                                        </a>
                                    </h2>
                                </div>
                                <div class="service-desc-box">
                                    <p>{{ $service->description }}</p>
                                </div>
                                <div class="service-accent-bar"></div>
                            </div>

                            <div class="service-action-row">
                                <div class="service-price-pill">
                                    @if($service->price > 0)
                                        ${{ number_format($service->price, 2) }}
                                    @else
                                        Consultation
                                    @endif
                                </div>
                                <a href="{{ route('contact') }}" class="service-book-btn">
                                    Book Now <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Services Section End -->


    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Why Choose Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">What Makes Go Go Gorgeous Truly
                                Different</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We don't just offer beauty services — we
                                deliver a complete experience built on trust, quality, and attention to every detail.
                                Our goal is to ensure you leave feeling confident, comfortable, and truly gorgeous.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Certified & Expert Beauticians</li>
                                <li>Personalized Treatment Plans</li>
                                <li>Premium Quality Products & Equipment</li>
                                <li>Guaranteed Client Satisfaction</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->

                        <!-- Why Choose Body Start -->
                        <div class="why-choose-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- Why Choose Button Start -->
                            <div class="why-choose-btn">
                                <a href="{{ route('contact') }}" class="btn-default">Book Appointment</a>
                            </div>
                            <!-- Why Choose Body Button End -->

                            <!-- Why Choose Contact Box Start -->
                            <div class="why-choose-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-headphone-white.svg') }}"
                                        alt="">
                                </div>
                                <div class="why-choose-contact-content">
                                    <p>Contact Us!</p>
                                    <h3><a href="tel:+16045064358">+1 (604) 506-4358</a></h3>
                                </div>
                            </div>
                            <!-- Why Choose Contact Box End -->
                        </div>
                        <!-- Why Choose Body End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-xl-5">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure>
                            <img src="{{ asset('frontend/images/about/why-choose-us.webp') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our FAQS Section Start -->
    <div class="our-faqs dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- FAQS Content Start -->
                    <div class="faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Common Questions</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Everything You Need to Know Before
                                Your
                                Visit</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions about our services, pricing,
                                or
                                appointments? We've answered some of the most common queries below.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQS Content Button Start -->
                        <div class="faqs-content-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="frontend/faqs.html" class="btn-default btn-highlighted">View all FAQ's</a>
                        </div>
                        <!-- FAQS Content Button End -->
                    </div>
                    <!-- FAQS Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Do I need to book an appointment in advance?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" role="region"
                                aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, we recommend booking in advance to secure your preferred time slot,
                                        especially for laser and skin treatments.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    What services do you offer?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We offer a full range of beauty and laser services including hair coloring,
                                        cutting, facials, waxing, threading, laser hair removal, skin rejuvenation,
                                        microblading, body sculpting, and more.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    How long does a typical laser session take?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Depending on the treatment area, a laser session usually takes 15 to 45 minutes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Are your products and equipment hygienic?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" role="region"
                                aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Absolutely. We follow strict hygiene protocols and use sterilized, high-quality
                                        equipment and products for every client.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQS Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Testimonials</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">What Our Happy Clients Say</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Real experiences from our valued clients who
                            trust
                            us with their beauty and skin care needs.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonials Slider Start -->
                    <div class="testimonials-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonials Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonials Item Start -->
                                    <div class="testimonials-item">
                                        <div class="testimonials-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/gallery/gallery-1.webp') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="testimonials-item-body">
                                            <div class="testimonials-item-content">
                                                <span class="testimonials-item-rating-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                <p>"I got laser hair removal done here and the results are amazing. The
                                                    staff was very professional and made me feel comfortable throughout
                                                    the process."</p>
                                            </div>
                                            <div class="testimonials-item-author">
                                                <div class="testimonials-item-author-content">
                                                    <h2>Mahnoor Fatima</h2>
                                                    <p>Satisfied Client</p>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('frontend/images/icons/testimonial-quote.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials Item End -->
                                </div>
                                <!-- Testimonials Slide End -->

                                <!-- Testimonials Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonials Item Start -->
                                    <div class="testimonials-item">
                                        <div class="testimonials-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/gallery/gallery-2.webp') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="testimonials-item-body">
                                            <div class="testimonials-item-content">
                                                <span class="testimonials-item-rating-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                <p>"Best facial I've ever had! My skin feels so fresh and glowing.
                                                    Highly recommend Go Go Gorgeous to everyone."</p>
                                            </div>
                                            <div class="testimonials-item-author">
                                                <div class="testimonials-item-author-content">
                                                    <h2>Areeba Siddiqui</h2>
                                                    <p>Satisfied Client</p>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('frontend/images/icons/testimonial-quote.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials Item End -->
                                </div>
                                <!-- Testimonials Slide End -->

                                <!-- Testimonials Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonials Item Start -->
                                    <div class="testimonials-item">
                                        <div class="testimonials-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/gallery/gallery-3.webp') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="testimonials-item-body">
                                            <div class="testimonials-item-content">
                                                <span class="testimonials-item-rating-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <p>"The hair coloring service exceeded my expectations. Very skilled
                                                        team and a relaxing environment."</p>
                                            </div>
                                            <div class="testimonials-item-author">
                                                <div class="testimonials-item-author-content">
                                                    <h2>Zainab Tariq</h2>
                                                    <p>Satisfied Client</p>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('frontend/images/icons/testimonial-quote.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials Item End -->
                                </div>
                                <!-- Testimonials Slide End -->

                                <!-- Testimonials Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonials Item Start -->
                                    <div class="testimonials-item">
                                        <div class="testimonials-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/gallery/gallery-4.webp') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="testimonials-item-body">
                                            <div class="testimonials-item-content">
                                                <span class="testimonials-item-rating-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                <p>"I've been coming here for microblading and skin treatments for
                                                    months now. Consistent quality every single time."</p>
                                            </div>
                                            <div class="testimonials-item-author">
                                                <div class="testimonials-item-author-content">
                                                    <h2>Kinza Rehman</h2>
                                                    <p>Satisfied Client</p>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('frontend/images/icons/testimonial-quote.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials Item End -->
                                </div>
                                <!-- Testimonials Slide End -->

                                <!-- Testimonials Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonials Item Start -->
                                    <div class="testimonials-item">
                                        <div class="testimonials-item-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('frontend/images/gallery/gallery-5.webp') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="testimonials-item-body">
                                            <div class="testimonials-item-content">
                                                <span class="testimonials-item-rating-star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                <p>"Clean, professional, and truly caring staff. My go-to place for all
                                                    beauty needs."</p>
                                            </div>
                                            <div class="testimonials-item-author">
                                                <div class="testimonials-item-author-content">
                                                    <h2>Noor-ul-Ain Sheikh</h2>
                                                    <p>Satisfied Client</p>
                                                </div>
                                                <div class="testimonial-item-quote">
                                                    <img src="{{ asset('frontend/images/icons/testimonial-quote.svg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonials Item End -->
                                </div>
                                <!-- Testimonials Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials Slider End --> <!-- Testimonials Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp">
                        <ul class="section-footer-border-list">
                            <li class="m-0 p-0">Trusted By <b>10,000+</b> Happy Clients</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <b><span class="counter">4.9</span>/5</b>
                            </li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->


@endsection
