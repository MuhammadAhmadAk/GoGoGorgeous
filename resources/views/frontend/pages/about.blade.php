@extends('frontend.layouts.main')
@section('title', 'About Us - Go Go Gorgeous')
@section('meta_description',
    'Learn about Go Go Gorgeous, a trusted beauty and laser hair removal clinic
    dedicated to helping clients look and feel their best with expert care and
    modern treatments.')
@section('meta_keywords',
    'about go go gorgeous, beauty clinic story, laser hair removal experts, skin
    care specialists, salon team')
@section('content')


    <!-- Page Header Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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
                                    <img src="{{ \App\Models\SiteSetting::get('about_image_2') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('about_image_2'))) : asset('frontend/images/about/2.jpg') }}" alt="">
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
                                    <img src="{{ \App\Models\SiteSetting::get('about_image_1') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('about_image_1'))) : asset('frontend/images/about/1.jpg') }}" alt="">
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

    <!-- Our Approach Section Start -->
    <div class="our-approach dark-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Approach</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Our Approach to Modern Beauty & Skin Care
                            Excellence</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp">
                        <div class="approach-item-image">
                            <figure class="image-anime">
                                <img src="{{ \App\Models\SiteSetting::get('approach_image_1') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('approach_image_1'))) : asset('frontend/images/our-approach-item-image-1.jpg') }}"
                                    alt="Precision Treatment">
                            </figure>
                        </div>
                        <div class="approach-item-content">
                            <h3>Precision Treatment</h3>
                            <p>We deliver every service — from facials to laser treatments — with precision, care, and
                                attention to detail.</p>
                            <ul>
                                <li>Easy Booking</li>
                                <li>Book Instantly</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="approach-item-image">
                            <figure class="image-anime">
                                <img src="{{ \App\Models\SiteSetting::get('approach_image_2') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('approach_image_2'))) : asset('frontend/images/our-approach-item-image-2.jpg') }}"
                                    alt="Finishing & Styling">
                            </figure>
                        </div>
                        <div class="approach-item-content">
                            <h3>Finishing & Styling</h3>
                            <p>We complete every service with expert finishing touches, ensuring a polished, confident
                                look every time.</p>
                            <ul>
                                <li>Stay Sharp</li>
                                <li>Clean Cuts</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Approach Item Start -->
                    <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="approach-item-image">
                            <figure class="image-anime">
                                <img src="{{ \App\Models\SiteSetting::get('approach_image_3') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('approach_image_3'))) : asset('frontend/images/our-approach-item-image-3.jpg') }}"
                                    alt="Aftercare Advice">
                            </figure>
                        </div>
                        <div class="approach-item-content">
                            <h3>Aftercare Advice</h3>
                            <p>We guide every client with proper aftercare tips to help maintain and prolong their
                                results.</p>
                            <ul>
                                <li>Perfect Look</li>
                                <li>Trend Cuts</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Approach Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('frontend/images/about/ceo-avatar.webp') }}" alt="Happy Client">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{ asset('frontend/images/icons/icon-phone-white.svg') }}" alt="Phone">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->
                        <p>Your Beauty, Perfected by Experts — <a href="{{ route('contact') }}">Book An Appointment</a>
                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

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

    <!-- How It Works Section Start -->
    <div class="how-it-work dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">How It Works</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Experience Our Seamless Beauty &
                                Treatment Process</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our process is designed to be simple,
                                smooth,
                                and customer-focused — from the moment you book your appointment to your final
                                treatment.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Item List start -->
                        <div class="how-work-item-list">
                            <!-- How Work Item start -->
                            <div class="how-work-item wow fadeInUp">
                                <div class="how-work-item-number">
                                    <span>01</span>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Book Your Appointment</h3>
                                    <p>Choose your preferred service, date, and time through our website, call, or
                                        walk-in.</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->

                            <!-- How Work Item start -->
                            <div class="how-work-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="how-work-item-number">
                                    <span>02</span>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Consultation with Expert</h3>
                                    <p>Our specialist understands your skin type, concerns, and goals to recommend the
                                        best treatment.</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->

                            <!-- How Work Item start -->
                            <div class="how-work-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="how-work-item-number">
                                    <span>03</span>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Professional Treatment Service</h3>
                                    <p>Enjoy a professional, hygienic treatment performed with complete care and
                                        attention.</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->
                        </div>
                        <!-- How Work Item List End -->
                    </div>
                    <!-- How Work Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Video Start -->
                    <div class="how-work-bg-video wow fadeInUp" data-wow-delay="0.2s">
                          @if(\App\Models\SiteSetting::get('how_it_works_image'))
                              <img src="{{ asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('how_it_works_image'))) }}" alt="How It Works" style="width:100%; height:100%; border-radius: 15px; object-fit:cover;">
                          @else
                              <video autoplay="" muted="" playsinline="" loop="" id="workvideo">
                                  <source src="{{ asset('frontend/videos/hairline-how-it-work-video.mp4') }}" type="video/mp4">
                              </video>
                          @endif
                      </div>
                    <!-- Video End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Works Section End -->

    <!-- 6. Our Experience Section Start -->
    <div class="our-experience">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Our Experience Image Start -->
                    <div class="our-experience-image">
                        <figure class="image-anime reveal">
                            <img src="{{ \App\Models\SiteSetting::get('experience_image_main') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('experience_image_main'))) : asset('frontend/images/our-experience-image.jpg') }}" alt="Our Experience">
                        </figure>
                    </div>
                    <!-- Our Experience Image End -->
                </div>

                <div class="col-xl-6">
                    <!-- Our Experience Content Start -->
                    <div class="our-experience-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Our Experience</span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Our Experience in Modern Skin &
                                Beauty
                                Care</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">With years of hands-on experience in the
                                beauty and skin care industry, our team has mastered a wide range of treatments — from
                                classic salon services to advanced laser technology.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Our Experience Body Start -->
                        <div class="our-experience-body">
                            <!-- Our Experience Body Image Box Start -->
                            <div class="our-experience-body-image-box wow fadeInUp">
                                <!-- Our Experience Body Image Start -->
                                <div class="our-experience-body-image">
                                    <figure>
                                        <img src="{{ \App\Models\SiteSetting::get('experience_image_small') ? asset('uploads/' . str_replace('uploads/', '', \App\Models\SiteSetting::get('experience_image_small'))) : asset('frontend/images/our-experience-body-image.jpg') }}"
                                            alt="Beauty Experience">
                                    </figure>
                                </div>
                                <!-- Our Experience Body Image End -->

                                <!-- Our Experience Counter Content Start -->
                                <div class="our-experience-counter-content">
                                    <h2><span class="counter">10</span>+</h2>
                                    <p>Skilled Specialists</p>
                                </div>
                                <!-- Our Experience Counter Content End -->
                            </div>
                            <!-- Our Experience Body Image Box End -->

                            <!-- Our Experience List Start -->
                            <div class="our-experience-list wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    <li>Skilled and trained beauty experts</li>
                                    <li>Consistent quality in every treatment</li>
                                    <li>Strong attention to detail and precision</li>
                                    <li>Personalized approach for every client</li>
                                </ul>
                            </div>
                            <!-- Our Experience List End -->
                        </div>
                        <!-- Our Experience Body End -->

                        <!-- Our Experience Footer Start -->
                        <div class="our-experience-footer wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Our Experience Button Start -->
                            <div class="our-experience-btn">
                                <a href="{{ route('contact') }}" class="btn-default">Book Appointment</a>
                            </div>
                            <!-- Our Experience Button End -->

                            <!-- Our Experience Contact Box Start -->
                            <div class="why-choose-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('frontend/images/icons/icon-headphone-white.svg') }}"
                                        alt="Phone">
                                </div>
                                <div class="why-choose-contact-content">
                                    <p>Contact Us!</p>
                                    <h3><a href="tel:+16045064358">+1 (604) 506-4358</a></h3>
                                </div>
                            </div>
                            <!-- Our Experience Contact Box End -->
                        </div>
                        <!-- Our Experience Footer End -->
                    </div>
                    <!-- Our Experience Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Experience Section End -->


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




