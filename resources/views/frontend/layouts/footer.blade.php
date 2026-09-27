<!-- Footer Gallery Start -->
<div class="footer-gallery">
    <div class="container-fluid">
        <!-- Footer Gallery Image Start -->
        <div class="footer-gallery-list page-gallery-box wow fadeInUp">
            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-1.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->

            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-2.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->

            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-3.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->

            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-4.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->

            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-5.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->

            <!-- Image Gallery start -->
            <div class="photo-gallery">
                <figure class="image-anime">
                    <img src="{{ asset('frontend/images/gallery/gallery-6.webp') }}" alt="">
                </figure>
            </div>
            <!-- Image Gallery end -->
        </div>
        <!-- Footer Gallery Image End -->
    </div>
</div>
<!-- Footer Gallery End -->

<!-- Main Footer Start -->
<footer class="main-footer dark-section">
    <div class="container">
        <div class="row footer-row">

            <!-- Column 1: Logo + Description + Social -->
            <div class="col-xl-4 col-md-6 mb-5">
                <div class="footer-brand-box">
                    <div class="footer-brand-logo">
                        <img src="{{ asset('frontend/images/logo/logo.png') }}" alt="">
                    </div>
                    <p class="footer-brand-desc">
                        Your trusted destination for premium beauty and laser treatments. Look good, feel confident
                        — every visit.
                    </p>
                    <div class="footer-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Column 2: Pages -->
            <div class="col-xl-2 col-md-6 mb-5">
                <div class="footer-links">
                    <h2>Pages</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 3: Our Services -->
            <div class="col-xl-3 col-md-6 mb-5">
                <div class="footer-links">
                    <h2>Our Services</h2>
                    <ul>
                        <li><a href="{{ route('services') }}">Laser Hair Removal</a></li>
                        <li><a href="{{ route('services') }}">Custom Facials & IPL</a></li>
                        <li><a href="{{ route('services') }}">Hair Color & Cut</a></li>
                        <li><a href="{{ route('services') }}">Full Body Waxing</a></li>
                        <li><a href="{{ route('services') }}">Microblading</a></li>
                        <li><a href="{{ route('services') }}">Makeup & Hair Style</a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="col-xl-3 col-md-6 mb-5">
                <div class="footer-links">
                    <h2>Contact Us</h2>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:{{ $settings['phone'] ?? '' }}">+1 (604) 506-4358</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:{{ $settings['email'] ?? '' }}">info@gogorgeous.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>16674 64 Ave, Surrey, BC V3S 0W5, Canada</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Copyright Start -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright &copy; {{ date('Y') }} Go Go Gorgeous. All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Main Footer End -->

<!-- Jquery Library File -->
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
<!-- Bootstrap js file -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Validator js file -->
<script src="{{ asset('frontend/js/validator.min.js') }}"></script>
<!-- SlickNav js file -->
<script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
<!-- Swiper js file -->
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
<!-- Counter js file -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<!-- Magnific js file -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
<!-- Parallax js -->
<script src="{{ asset('frontend/js/parallaxie.js') }}"></script>
<!-- MagicCursor js file -->
<script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontend/js/magiccursor.js') }}"></script>
<!-- Text Effect js file -->
<script src="{{ asset('frontend/js/SplitText.min.js') }}"></script>
<script src="{{ asset('frontend/js/ScrollTrigger.min.js') }}"></script>
<!-- YTPlayer js File -->
<script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!-- Wow js file -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<!-- Main Custom js file -->
<script src="{{ asset('frontend/js/function.js') }}"></script>

</body>

</html>

