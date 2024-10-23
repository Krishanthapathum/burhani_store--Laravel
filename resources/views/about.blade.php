@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>Us</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                            <li class="breadcrumb-item">
                                <div class="fa fa-chevron-right"></div>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



<!-- Our Vision Mission Section Start -->
<div class="our-vision-mission">
    <div class="container">
        <!-- Vision Mission Box Start -->
        <div class="row vision-mission-box align-items-center">
            <div class="col-lg-6">
                <!-- Our Vision Image Start -->
                <div class="our-vision-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('images/aggrishop.png') }}" alt="">
                    </figure>

                </div>
                <!-- Our Vision Image End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Vision Content Start -->
                <div class="our-vision-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title dark-bg-1">
                            <span> About Us</span>
                        </div>
                        <h3 class="wow fadeInUp">Who we are</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>A Turly Run Business For
                                <br></span>3 Genarations</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Originally established as Fancy Stores, a
                            retail outlet in the refreshing mist of Bandarawela town, our journey futher expanded
                            with the birth of Burhani Stores. </p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Having initially begun as an agricultural wing
                            of
                            Fancy Stores, we have now emerged as a prominent figure in the country's agro irrigation
                            sector. Through consistent upgrades and unwavering customer service, we have maintained
                            our position as a steadfast and devoted establishment in the nation.</p>

                        <!-- <label for="file">File progress:</label> -->

                        <!-- <progress id="file" max="100" value="70">70%</progress> -->

                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Our Vision Content End -->
            </div>
        </div>
        <!-- Vision Mission Box End -->



    </div>
</div>
<!-- Our Vision Mission Section End -->

<!-- Our Counter Section Start -->
<div class="our-counter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Our Counter Box Start -->
                <div class="our-counter-box">
                    <!-- Counter Content Box Start -->
                    <div class="counter-content-box">
                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-expertise-1.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">65</span>%</h2>
                                <p class="text-center">Agriculture Based Products
                                </p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-counter-1.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">30</span>%</h2>
                                <p>Hardware Tools</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-expertise-2.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">5</span>%</h2>
                                <p>Other Products</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>
                    <!-- Counter Content Box End -->

                    <!-- Counter Image Start -->
                    <div class="counter-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/gardenIrrigationabout.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Counter Image End -->
                </div>
                <!-- Our Counter Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Counter Section End -->






<!-- Why choose Us Section Start -->
<div class="why-choose-us about-why-choose">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2">
                <!-- Why choose Image Start -->
                <div class="why-choose-image">
                    <figure>
                        <img src="{{ asset('images/why-choose-image.png') }}" alt="Why Choose Us">
                    </figure>
                </div>
                <!-- Why choose Image End -->
            </div>

            <div class="col-lg-6 order-lg-2 order-1">
                <!-- Why choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title">
                            <span>Why Us?</span>
                        </div>
                        <h3 class="wow fadeInUp">Why Choose Us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Why choose us <span>for your
                                needs?</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Choose us for reliable agricultural products:
                            tailored solutions, premium quality, and seamless installation to maximize your farm’s
                            potential.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why choose Body Start -->
                    <div class="why-choose-body wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Expertise">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>industry expertise & knowledge</h3>
                                <p>With years of experience, we offer the best products and services to meet your
                                    agricultural needs.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->

                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Quality">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>premium quality products</h3>
                                <p>We provide top-tier agricultural equipment and solutions with exceptional quality
                                    to ensure long-lasting performance.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->

                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Customer Service">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>seamless installation & support</h3>
                                <p>Our professional team ensures hassle-free installation and offers continuous
                                    support for smooth operations.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->

                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Sustainability">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>commitment to sustainability</h3>
                                <p>We prioritize sustainable practices, ensuring that our products are eco-friendly
                                    and contribute to a greener future.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->
                    </div>

                    <!-- Why choose Body End -->
                </div>
                <!-- Why choose Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Why choose Us Section End -->

<!-- Our partners Start -->
<div class="our-pricing">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Logo 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/logo-w1.png') }}" alt="Logo 1" class="logo-hover" />
                </div>
                <!-- Logo 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/logo-w2.png') }}" alt="Logo 2" class="logo-hover" />
                </div>
                <!-- Logo 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/logo-w3.png') }}" alt="Logo 3" class="logo-hover" />
                </div>
                <!-- Logo 4 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/logo-w4.png') }}" alt="Logo 4" class="logo-hover" />
                </div>
                <!-- Logo 5 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/logo-w5.png') }}" alt="Logo 5" class="logo-hover" />
                </div>
            </div>

            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->

        </div>
    </div>
</div>
<!-- Our partners End -->

<!-- Our Faqs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Faqs Content Start -->
                <div class="our-faqs-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title">
                            <span>FAQs</span>
                        </div>
                        <h3 class="wow fadeInUp">FAQs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Frequently Asked <span>Questions</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Find answers to common questions about our
                            agricultural products and services. From installation procedures to pricing, we cover
                            everything you need to know about our company and offerings.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Faqs CTA Start -->
                    <div class="our-faqs-cta wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Faqs CTA Box Start -->
                        <div class="faqs-cta-box">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-faqs-cta-box.svg') }}" alt="">
                            </div>
                            <div class="faqs-cta-content">
                                <h3>Still Have Questions?</h3>
                                <p>What question or topic would you like assistance with today?</p>
                            </div>
                        </div>
                        <!-- Faqs CTA Box End -->

                        <!-- Faqs CTA Btn Start -->
                        <div class="faqs-cta-btn">
                            <a href="{{ url('contact/#page-contact-us') }}" class="btn-default">Get in Touch</a>
                        </div>
                        <!-- Faqs CTA Btn End -->
                    </div>
                    <!-- Our Faqs CTA End -->
                </div>
                <!-- Our Faqs Content End -->
            </div>

            <div class="col-lg-6">
                <div class="our-faq-section">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    How do I purchase and install your agricultural products?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>You can purchase our products directly from our website or through a
                                        consultation.
                                        Installation services can be arranged at an additional cost.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    What is the cost of your products and services?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Costs depend on the product type and installation requirements. We provide a
                                        detailed quote after an initial consultation to fit your budget.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Do you offer installation support for all your products?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, we provide installation support for all our products. Our team ensures
                                        that
                                        everything is set up according to your requirements and standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can I return or exchange products if needed?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, we offer a return or exchange policy within 7 days of purchase.
                                        Conditions
                                        apply depending on product usage and condition.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What types of agricultural products do you offer?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>We offer a wide range of agricultural products including irrigation systems,
                                        greenhouse equipment, and other Aggricultural products. Contact us for
                                        specific product
                                        inquiries.</p>
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
</div>
<!-- Our Faqs Section End -->


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,            // Display 4 logos at once
            spaceBetween: 10,            // Space between slides (10px)
            loop: true,                  // Enable continuous looping
            autoplay: {
                delay: 2000,             // Auto swipe every 2 seconds (2000ms)
                disableOnInteraction: false,  // Continue autoplay after interaction
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

@endsection
