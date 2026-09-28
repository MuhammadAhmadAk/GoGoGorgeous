@extends('frontend.layouts.main')
@section('title', 'Go Go Gorgeous - Beauty Salon & Laser Hair Removal Clinic')
@section('meta_description',
    'Go Go Gorgeous offers expert beauty and laser hair removal services including
    facials, hair coloring, skin rejuvenation, microblading, and body sculpting.
    Book your appointment today.')
@section('meta_keywords',
    'beauty salon, laser hair removal clinic, facials, hair coloring, skin
    rejuvenation, microblading, body sculpting, Go Go Gorgeous')
@section('content')


    <!-- Hero Section Start -->
    <div class="hero hero-image dark-section parallaxie" style="background-image: url('{{ \App\Models\SiteSetting::get('hero_bg_image') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('hero_bg_image'))) : asset('frontend/images/about/hero-bg-image.webp') }}');">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">{{ \App\Models\SiteSetting::get('hero_subtitle') ?? 'Beauty & Laser Care' }}</span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $settings['hero_title'] ?? 'Go Go Gorgeous' }}</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">{{ \App\Models\SiteSetting::get('hero_description') ?? 'From flawless skin to smooth, hair-free confidence - Go Go Gorgeous brings expert beauty and laser treatments together under one roof, tailored just for you.' }}</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Book Your
                                Appointment</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-xl-5">
                    <!-- Hero Working Hours Start -->
                    <div class="hero-working-hours wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Hero Working Hours Header Start -->
                        <div class="hero-working-hours-header">
                            <div class="icon-box">
                                <img src="{{ asset('frontend/images/icons/icon-clock.svg') }}" alt="">
                            </div>
                            <div class="hero-working-hours-title">
                                <h2>Opening Hours:</h2>
                            </div>
                        </div>
                        <!-- Hero Working Hours Header End -->

                        <!-- Hero Working Hours List Start -->
                        <div class="hero-working-hour-list">
                            <ul>
                                <li>Monday – Saturday <span>10:00 AM – 6:00 PM</span></li>
                                {{-- <li>Saturday <span>9:00 AM – 9:00 PM</span></li> --}}
                                <li>Sunday <span>11:00 AM – 5:00 PM</span></li>
                            </ul>
                        </div>
                        <!-- Hero Working Hours List End -->
                    </div>
                    <!-- Hero Working Hours End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Us Image Box 1 Start -->
                        <div class="about-us-image-box-1">
                            <!-- About Us Image Start -->
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="{{ \App\Models\SiteSetting::get('about_image_2') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('about_image_2'))) : asset('frontend/images/about/2.jpg') . '?v=4' }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box 1 End -->

                        <!-- About Us Image Box 2 Start -->
                        <div class="about-us-image-box-2">
                            <!-- Contact Us Circle Start -->
                            <div class="contact-us-circle">
                                <a href="{{ route('contact') }}">
                                    <img src="{{ asset('frontend/images/icons/contact-us-circle.svg') }}" alt="">
                                </a>
                            </div>
                            <!-- Contact Us Circle End -->

                            <!-- About Us Image Start -->
                            <div class="about-us-image">
                                <figure class="image-anime">
                                    <img src="{{ \App\Models\SiteSetting::get('about_image_1') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('about_image_1'))) : asset('frontend/images/about/1.jpg') . '?v=4' }}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box 2 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">About Us</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Where Beauty Meets Advanced Skin &
                                Laser Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At Go Go Gorgeous, we combine modern
                                technology with a personal touch to help you look and feel your best. From relaxing
                                salon treatments to advanced laser and skin care procedures, every service is designed
                                around your comfort and confidence.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Item List Start -->
                        <div class="about-us-item-list">
                            <!-- About Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-about-item-1.svg') }}" alt="">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Clean & Hygienic Environment</h3>
                                    <p>We maintain the highest standards of cleanliness and sterilized equipment for
                                        every treatment.</p>
                                </div>
                            </div>
                            <!-- About Item End -->

                            <!-- About Item Start -->
                            <div class="about-us-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-about-item-2.svg') }}" alt="">
                                </div>
                                <div class="about-us-item-content">
                                    <h3>Personalized Skin Consultation</h3>
                                    <p>Every client gets a free consultation to design a treatment plan suited to their
                                        skin and goals.</p>
                                </div>
                            </div>
                            <!-- About Item End -->
                        </div>
                        <!-- About Item List End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a href="{{ route('about') }}" class="btn-default">More about us</a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- About Author Box Start -->
                            <div class="about-author-box">
                                <!-- About Author Image Start -->
                                <div class="about-author-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset('frontend/images/about/ceo-avatar.webp') }}" alt="">
                                    </figure>
                                </div>
                                <!-- About Author Image End -->

                                <!-- About Author Content Start -->
                                <div class="about-author-content">
                                    <h3>Noshi</h3>
                                    <p>Founder & Skin Expert</p>
                                </div>
                                <!-- About Author Content End -->
                            </div>
                            <!-- About Author Box End -->
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Services</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Premium Beauty & Laser Solutions for a
                            Confident New You</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">

                
                @foreach($services as $index => $service)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="{{ $index * 0.05 }}s">
                        <!-- Service Real Image Showcase -->
                        <div class="service-item-media">
                            <figure>
                                <img src="{{ $service->featured_image_url }}" alt="{{ $service->title }}" class="service-img">
                            </figure>
                            <div class="service-badge">
                                <i class="fa-solid fa-sparkles"></i> 
                                <span>{{ $service->category ?? 'Real Result' }}</span>
                            </div>
                        </div>

                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">{{ $service->title }}</a></h2>
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>{{ $service->description }}</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                @if($service->price > 0)
                                    <span class="service-price">${{ number_format($service->price, 2) }}</span>
                                @else
                                    <span class="service-price">Consultation</span>
                                @endif
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

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
                            <img src="{{ \App\Models\SiteSetting::get('why_choose_us_image') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('why_choose_us_image'))) : asset('frontend/images/about/why-choose-us.webp') }}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Our History Section Start -->
    <div class="our-history">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 order-xl-1 order-2">
                    <!-- Our History Image Start -->
                    <div class="our-history-image">
                        <figure class="image-anime reveal">
                            <img src="{{ \App\Models\SiteSetting::get('our_history_image') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('our_history_image'))) : asset('frontend/images/about/ceo.webp') }}" alt="">
                        </figure>
                    </div>
                    <!-- Our History Image End -->
                </div>

                <div class="col-xl-6 order-xl-2 order-1">
                    <!-- Our History Content Start -->
                    <div class="our-history-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Our Journey</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Years of Passion for Beauty & Skin
                                Care
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our journey began with a simple mission — to
                                help every client feel confident in their own skin. Over the years, we've grown into a
                                trusted destination for advanced beauty and laser treatments, using modern techniques
                                and quality-focused care.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- History Item List Start -->
                        <div class="history-item-list">
                            <!-- History Item Start -->
                            <div class="history-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-history-item-1.svg') }}"
                                        alt="">
                                </div>
                                <div class="history-item-content">
                                    <h3>2012 — The Beginning</h3>
                                    <p>We started with a small setup and a big dream — to provide quality beauty care
                                        with a personal touch.</p>
                                </div>
                            </div>
                            <!-- History Item End -->

                            <!-- History Item Start -->
                            <div class="history-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-history-item-1.svg') }}"
                                        alt="">
                                </div>
                                <div class="history-item-content">
                                    <h3>2023 — Expansion</h3>
                                    <p>We introduced advanced laser and skin treatments, becoming a full-service beauty
                                        and laser clinic.</p>
                                </div>
                            </div>
                            <!-- History Item End -->
                        </div>
                        <!-- History Item List End -->

                        <!-- History Author Box Start -->
                        <div class="history-author-box wow fadeInUp" data-wow-delay="0.8s">
                            <!-- History Author Signature Start -->
                            <div class="history-author-sign">
                                <img src="{{ asset('frontend/images/about/ceo-sign.webp') }}" alt="">
                            </div>
                            <!-- History Author Signature End -->

                            <!-- History Author Content Start -->
                            <div class="history-author-content">
                                <p>Noshi — Founder & Owner</p>
                            </div>
                            <!-- History Author Content End -->
                        </div>
                        <!-- History Author Box End -->
                    </div>
                    <!-- Our History Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our History Section End -->

    <!-- Our Pricing Section Start -->
    <div class="our-pricing dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Pricing</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Affordable Beauty & Laser Treatment
                            Packages</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We believe great style should be accessible to
                            everyone. Our pricing is designed to offer the best quality and value, with complete
                            transparency and no hidden charges.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Pricing Item List Start -->
                      <div class="pricing-item-list">
                          @foreach($services as $index => $service)
                          <div class="pricing-item wow fadeInUp" data-wow-delay="{{ 0.1 * ($index % 4) }}s">
                              <div class="pricing-item-image">
                                  <figure class="image-anime">
                                      <img src="{{ $service->featured_image_url }}" alt="{{ $service->title }}">
                                  </figure>
                              </div>
                              <div class="pricing-item-body">
                                  <div class="pricing-item-title">
                                      <h2>{{ $service->title }}</h2>
                                      <hr>
                                      <h3>${{ $service->price }}</h3>
                                  </div>
                                  <div class="pricing-item-content">
                                      <p>{{ $service->description }}</p>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                      <!-- Pricing Item List End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/about/ceo-avatar.webp') }}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{ asset('frontend/images/icons/icon-phone-white.svg') }}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->
                        <p>Your Style, Perfected by Experts. <a href="{{ route('contact') }}">Book An Appointment</a>
                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Pricing Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-xl-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Our Team</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Meet Our Skilled Beauty & Skin Care
                            Experts
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-xl-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our team consists of certified, experienced beauticians and skin care specialists
                                dedicated to giving you the best treatment experience.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ route('team') }}" class="btn-default">View our Team members</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <div class="team-item-image">
                            <figure>
                                <img src="{{ asset('frontend/images/team/team-1.webp') }}" alt="">
                            </figure>
                        </div>
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2>Sana Mali</h2>
                                <p>Senior Beautician</p>
                            </div>
                            <div class="team-item-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item-image">
                            <figure>
                                <img src="{{ asset('frontend/images/team/team-2.webp') }}" alt="">
                            </figure>
                        </div>
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2>Hira Ahmed</h2>
                                <p>Laser & Skin Specialist</p>
                            </div>
                            <div class="team-item-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item-image">
                            <figure>
                                <img src="{{ asset('frontend/images/team/team-3.webp') }}" alt="">
                            </figure>
                        </div>
                        <div class="team-item-body">
                            <div class="team-item-content">
                                <h2>Fatima Raz</h2>
                                <p>Hair & Color Expert</p>
                            </div>
                            <div class="team-item-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/about/ceo-avatar.webp') }}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{ asset('frontend/images/icons/icon-phone-white.svg') }}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->
                        <p>Expert Hands Behind Every Great Look — <a href="{{ route('team') }}">View Team Members</a>
                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

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






