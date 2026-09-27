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
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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

    <!-- Services Grid Section Start -->
    <div class="page-service">
        <div class="container">
            <div class="row">

                <!-- Card 1: Hair Color -->
                
                @foreach($services as $index => $service)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="{{ $index * 0.1 }}s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">{{ $service->title }}</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ $service->icon_url }}" alt="{{ $service->title }}">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>{{ $service->description }}</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">${{ $service->price }}</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        

                <!-- Card 2: Hair Cut -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Hair Cut</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-hair-cut.svg') }}" alt="Hair Cut">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Professional haircuts designed to suit your face shape and personal style.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$29.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Head Massage -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Head Massage</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-head-massage.svg') }}" alt="Head Massage">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Relax and rejuvenate with a soothing head massage that relieves stress and tension.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$34.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Deep Conditioning -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Deep Conditioning</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-deep-conditioning.svg') }}"
                                alt="Deep Conditioning">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Restore moisture and shine to dry, damaged hair with our deep conditioning treatment.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$44.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5: Highlights -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Highlights</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-highlights.svg') }}" alt="Highlights">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Add dimension and brightness to your hair with expertly placed highlights.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$249</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6: Eyebrow Threading -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Eyebrow Threading</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-eyebrow-threading.svg') }}"
                                alt="Eyebrow Threading">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Get precisely shaped, natural-looking eyebrows with our threading service.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$9.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 7: Waxing Full Body -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Waxing Full Body</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-waxing-full-body.svg') }}"
                                alt="Waxing Full Body">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Smooth, hair-free skin with our gentle and effective full body waxing treatments.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$134.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 8: Waxing Full Face -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Waxing Full Face</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-waxing-full-face.svg') }}"
                                alt="Waxing Full Face">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Gentle and precise facial waxing leaving your skin silky soft and hair-free.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$24.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 9: Facials -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Facials</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-facials.svg') }}" alt="Facials">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Refresh and revitalize your skin with our customized deep-cleansing facial treatments.
                                </p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$59.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 10: Brightening Facial -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.9s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Brightening Facial</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-brightening-facial.svg') }}"
                                alt="Brightening Facial">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Brighten dull skin and even out your complexion with our specialized brightening facial.
                                </p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$69.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 11: Anti-Aging Facial -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Anti-Aging Facial</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-anti-aging-facial.svg') }}"
                                alt="Anti-Aging Facial">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Reduce fine lines, boost collagen, and restore youthful glow with our anti-aging
                                    treatment.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$79.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 12: Full Body Laser Hair Removal -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.1s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Full Body Laser Hair Removal</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-laser-full-body.svg') }}"
                                alt="Full Body Laser Hair Removal">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Achieve permanent, silky-smooth hair reduction across the body with safe, painless laser
                                    tech.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$249.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 13: Laser Hair Removal Face -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Laser Hair Removal Face</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-laser-face.svg') }}"
                                alt="Laser Hair Removal Face">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Precision facial laser hair removal targeting upper lip, chin, and sideburns gently.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$64.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 14: Photo Facial -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.3s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Photo Facial</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-photo-facial.svg') }}" alt="Photo Facial">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Improve skin texture, diminish sun damage, and even out skin tone with photo facial
                                    therapy.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$79.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 15: Skin Rejuvenation with IPL Laser -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.4s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Skin Rejuvenation (IPL)</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-skin-rejuvenation.svg') }}"
                                alt="Skin Rejuvenation IPL">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Restore youthful, radiant skin with our advanced IPL laser rejuvenation therapy.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$119.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 16: Microblading -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.5s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Microblading</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-microblading.svg') }}" alt="Microblading">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Get natural, perfectly shaped eyebrows with our semi-permanent microblading service.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$299.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 17: Body Massage -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.6s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Body Massage</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-body-massage.svg') }}" alt="Body Massage">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Relax your body and mind with our full-body therapeutic massage to melt stress away.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$79.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 18: Make up and hair style -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="service-item wow fadeInUp" data-wow-delay="1.7s">
                        <div class="service-item-header">
                            <h2><a href="{{ route('contact') }}">Make Up & Hair Style</a></h2>
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('frontend/images/icons/icon-makeup-hairstyle.svg') }}"
                                alt="Make up and hair style">
                        </div>
                        <div class="service-item-body">
                            <div class="service-item-content">
                                <p>Flawless party & event makeup paired with customized glam hair styling for your special
                                    day.</p>
                            </div>
                            <div class="service-item-btn d-flex justify-content-between align-items-center">
                                <span class="service-price">$149.99</span>
                                <a href="{{ route('contact') }}" class="readmore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services Grid Section End -->


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
