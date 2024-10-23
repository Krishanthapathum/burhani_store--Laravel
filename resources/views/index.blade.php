@extends('layouts.app')

@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myVideo">
                <source src="{{ asset('images/Farmvid.mp4') }}" type="video/mp4">
            </video>


            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Welcome to Burhani Stores</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Revolutionize farming with
                                    innovative </span> Irrigation <span>&</span> Agricultural Products </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our advanced agricultural and irrigation
                                solutions boost yield and efficiency for all farming scales, merging technology with
                                tradition for optimal success.</p>
                        </div>
                        <!-- Section Title End -->

                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <a href="#our-work" class="btn-default">explore more</a>
                            <a href="#howitWork" class="btn-default btn-highlighted">how it work</a>
                        </div>
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Customer Review Section Start -->
    <div class="customer-review">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Our Happy Customers Start -->
                    <div class="our-happy-customer">
                        <div class="happy-customer-counter">
                            <h2><span class="counter">1.6</span>k+</h2>
                            <p>satisfied clients</p>
                        </div>
                    </div>
                    <!-- Our Happy Customers End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-3">
                    <!-- Customer Review Content Start -->
                    <div class="customer-review-content">
                        <p>We provide top-quality agricultural products and services. From farm equipment to
                            installation, we're committed to meeting your agricultural needs.</p>
                    </div>
                    <!-- Customer Review Content End -->
                </div>

                <div class="col-lg-4 order-lg-3 order-md-2">
                    <!-- Customer Consultation Box Start -->
                    <div class="customer-consultation-box">
                        <div class="customer-consultation-title">
                            <h3>Ready to Optimize Your Agricultural Operations?</h3>
                        </div>
                        <div class="customer-consultation-image">
                            <img src="{{ asset('images/customer-consultation-box-img.svg') }}" alt="">
                        </div>
                        <div class="customer-consultation-body">
                            <p>Contact us today for a free consultation and learn how our products and solutions can
                                boost your productivity and efficiency.</p>
                        </div>
                        <div class="customer-consultation-footer">
                            <a href="{{ url('about.html') }}" class="learn-more-btn">learn more</a>
                        </div>
                    </div>
                    <!-- Customer Consultation Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Customer Review Section End -->



    <!-- Our Expertise Section Start -->
    <div class="our-expertise">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <!-- Expertise Images Start -->
                    <div class="expertise-images">
                        <!-- Expertise Image Box 1 Start -->
                        <div class="expertise-image-box-1">
                            <div class="expertise-img-1">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/expertise-img-1.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="expertise-img-3">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/expertise-img-3.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Expertise Image Box 1 End -->

                        <!-- Expertise Image Box 2 Start -->
                        <div class="expertise-image-box-2">
                            <div class="expertise-img-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/expertise-img-2.jpg') }}" alt="">
                                </figure>
                            </div>

                            <div class="expertise-img-4">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/expertise-img-4.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Expertise Image Box 2 End -->
                    </div>
                    <!-- Expertise Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Expertise Content Start -->
                    <div class="expertise-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <div class="section-bg-title">
                                <span>expertise</span>
                            </div>
                            <h3 class="wow fadeInUp">expertise</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>From</span> Seed <span>to
                                </span>Table, <span>All Your Agriculture Needs</span></h2>

                            <p class="wow fadeInUp" data-wow-delay="0.25s">Witness the remarkable journey from seed to
                                table as nature's bounty is nurtured, harvested, and transformed with sustainable
                                practices. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Join us as we explore the interconnectedness
                                of agriculture, celebrating the
                                dedicated farmers and conscious consumers who contribute to a thriving, responsible food
                                system.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why choose Body Start -->
                        <div class="why-choose-body">
                            <!-- Why choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Best Quality Standards</h3>
                                    <p>We thrive to provide best quality standards in agriculture.</p>
                                </div>
                            </div>
                            <!-- Why choose Item End -->

                            <!-- Why choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-counter-3.svg') }}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>The diversification</h3>
                                    <p>Our diversification in vast range of products is a key to our success.</p>
                                </div>
                            </div>
                            <!-- Why choose Item End -->
                        </div>
                        <!-- Why choose Body End -->

                        <!-- Expertise Body Start -->
                        <!-- <div class="expertise-body">
                                <div class="expertise-item">
                                    <div class="icon-box">
                                        <img src="images/icon-expertise-1.svg" alt="">
                                    </div>
                                    <div class="expertise-item-content">
                                        <h3><span class="counter">92</span>%</h3>
                                        <p>gardening</p>
                                    </div>
                                </div>

                                <div class="expertise-item">
                                    <div class="icon-box">
                                        <img src="images/icon-expertise-2.svg" alt="">
                                    </div>
                                    <div class="expertise-item-content">
                                        <h3><span class="counter">82</span>%</h3>
                                        <p>landscape</p>
                                    </div>
                                </div>

                                <div class="expertise-item">
                                    <div class="icon-box">
                                        <img src="images/icon-expertise-3.svg" alt="">
                                    </div>
                                    <div class="expertise-item-content">
                                        <h3><span class="counter">98</span>%</h3>
                                        <p>seed & plants</p>
                                    </div>
                                </div>
                            </div> -->
                        <!-- Expertise Body End -->
                    </div>
                    <!-- Expertise Content End -->
                </div>


            </div>
        </div>
    </div>
    <!-- Our Expertise Section End -->


    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title dark-bg-1">
                            <span>Services</span>
                        </div>
                        <h3 class="wow fadeInUp">What We Do</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"> <span>Exceptional </span>Products
                            <span>&</span> Services <span>We Offer</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Explore our diverse range of agricultural
                            products and services, featuring advanced irrigation solutions, expert cultivation advice,
                            and sustainable farming techniques for optimal yield.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('images/service-img-1.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Title Start -->
                        <!-- <div class="service-title">
                                    <h3>Irrigation Solutions</h3>
                                </div> -->
                        <!-- Service Title End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Efficient water delivery systems for sustainable agriculture.</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="{{ asset('images/arrow-green.svg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                        <div class="text-center mt-5">
                            <h4>Irrigation <br> Solutions</h4>
                        </div>
                    </div>
                    <!-- Service Item End -->


                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('images/service-img-2.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Title Start -->
                        <!-- <div class="service-title">
                                    <h3>garden installation</h3>
                                </div> -->
                        <!-- Service Title End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Greenhouses optimize plant growth through controlled environments.</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="{{ asset('images/arrow-green.svg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                        <div class="text-center mt-5">
                            <h4>Greenhouse <br> Solutions</h4>
                        </div>
                    </div>
                    <!-- Service Item End -->

                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('images/service-img-3.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Title Start -->
                        <!-- <div class="service-title">
                                    <h3>garden installation</h3>
                                </div> -->
                        <!-- Service Title End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Chemical sprayers efficiently apply treatments to crops.</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="{{ asset('images/arrow-green.svg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                        <div class="text-center mt-5">
                            <h4>Chemical <br> Sprayers</h4>
                        </div>
                    </div>
                    <!-- Service Item End -->

                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="#">
                                <figure>
                                    <img src="{{ asset('images/service-img-4.jpg') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Title Start -->
                        <!-- <div class="service-title">
                                    <h3>lawn care & maintenance</h3>
                                </div> -->
                        <!-- Service Title End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <!-- Service Content Start -->
                            <div class="service-content">
                                <p>Automation boosts efficiency and precision in farming.</p>
                            </div>
                            <!-- Service Content End -->

                            <!-- Service Btn Start -->
                            <div class="service-btn">
                                <a href="#" class="readmore-btn"><img src="{{ asset('images/arrow-green.svg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Service Btn End -->
                        </div>
                        <!-- Service Body End -->
                        <div class="text-center mt-5">
                            <h4>Automation <br> Systems</h4>
                        </div>
                    </div>
                    <!-- Service Item End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->



    <!-- Intro Video Section Start -->
    <div class="intro-video parallaxie">
        <div class="container">
            <!-- Intro Video Box Start -->
            <div class="row intro-video-box align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Agriculture Matters <br> <span>To The
                                Future Of Development</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-4">
                    <div class="video-play-box">
                        <div class="video-play-content">
                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <a href="" class="popup-video" data-cursor-text="Play">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intro Video Box End -->

            <div class="row">
                <div class="col-lg-7">
                    <!-- Specialize Item Start -->
                    <div class="specialize-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('images/icon-specialize.svg') }}" alt="">
                        </div>
                        <div class="specialize-content">
                            <p>With years of experience, we specialize in advancing agriculture for the future of
                                development, crafting stunning, functional garden landscapes tailored to your vision and
                                needs.</p>
                        </div>
                    </div>
                    <!-- Specialize Item End -->
                </div>

                <div class="col-lg-5">
                    <!-- .Section Btn Start -->
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                        <a href="{{ url('/contact') }}" class="btn-default btn-highlighted">contact now</a>
                    </div>
                    <!-- .Section Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->


    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/s4.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/s1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2><span class="counter">15</span>+</h2>
                            </div>
                            <div class="company-experience-content">
                                <p>years of experience</p>
                            </div>
                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <div class="section-bg-title">
                                <span>Specialized</span>
                            </div>
                            <h3 class="wow fadeInUp">Specialized Services</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Specialized </span>Drip
                                Irrigation Systems</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">At the forefront of sustainable landscaping,
                                we specialize in drip irrigation systems designed to optimize water usage and promote
                                healthy plant growth. Our systems ensure every drop counts, helping you achieve lush,
                                vibrant gardens while conserving water.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Expertly Designed Systems Tailored to Your Landscape</li>
                                <li>Maximize Water Efficiency and Reduce Waste</li>
                                <li>Custom Solutions for Every Garden Size</li>
                                <li>Professional Installation and Ongoing Support</li>
                            </ul>
                        </div>

                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">

                            <!-- Contact Now Box Start -->
                            <a href="tel:+94777945940" class="contact-now-box about-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-now-box-content">
                                    <p>Call us any time</p>
                                    <h3>(+94) 777 945 940</h3>
                                </div>
                            </a>

                            <!-- Contact Now Box End -->
                            <!-- About Company Founder Start -->
                            <a href="mailto:bsagriculture52@gmail.com" class="contact-now-box about-contact-box">
                                <div class="icon-box">
                                    <i class="far fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="contact-now-box-content">
                                    <p>Mail us at any time</p>
                                    <h3>bsagriculture52@gmail.com</h3>
                                </div>
                            </a>
                            <!-- About Company Founder End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <div class="section-bg-title">
                                <span>Specialized</span>
                            </div>
                            <h3 class="wow fadeInUp">Specialized Services</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Specialized </span>Irrigation
                                Fitting Systems</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our specialized irrigation fitting systems
                                are designed to enhance efficiency and ensure optimal water distribution across your
                                landscape. With a focus on durability and precision, our fittings facilitate seamless
                                connections and reduce the risk of leaks, ensuring your irrigation system operates at
                                its best.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>High-Quality Fittings Customizable for Any Landscape</li>
                                <li>Innovative Designs for Maximum Water Flow</li>
                                <li>Easy Installation and Maintenance</li>
                                <li>Expert Support and Guidance Throughout the Process</li>
                            </ul>
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">

                            <!-- Contact Now Box Start -->
                            <a href="tel:+94777945940" class="contact-now-box about-contact-box">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-now-box-content">
                                    <p>Call us any time</p>
                                    <h3>(+94) 777 945 940</h3>
                                </div>
                            </a>
                            <!-- Contact Now Box End -->

                            <!-- About Company Founder Start -->
                            <a href="mailto:bsagriculture52@gmail.com" class="contact-now-box about-contact-box">
                                <div class="icon-box">
                                    <i class="fa-regular fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="contact-now-box-content">
                                    <p>Mail us at any time</p>
                                    <h3>bsagriculture52@gmail.com</h3>
                                </div>
                            </a>
                            <!-- About Company Founder End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>


                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <!-- About Image Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/s3.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Image Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/s2.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- Company Experience Start -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2><span class="counter">15</span>+</h2>
                            </div>
                            <div class="company-experience-content">
                                <p>years of experience</p>
                            </div>
                        </div>
                        <!-- Company Experience End -->
                    </div>
                    <!-- About Us Image End -->
                </div>

            </div>
        </div>
    </div>
    <!-- About Us Section End -->




    <!-- How It Work Section Start -->
    <div class="how-it-work" id="howitWork">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7 col-md-9">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title dark-bg-2">
                            <span>How It Works</span>
                        </div>
                        <h3 class="wow fadeInUp">How It Works</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">How Our Agricultural <span>Product
                                Installation Process Works</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our streamlined process ensures a seamless
                            experience, from product consultation to complete installation, transforming your
                            agricultural operations for maximum efficiency.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5 col-md-3">
                    <!-- How Work Circle Image Start -->
                    <div class="how-work-circle-img">
                        <img src="{{ asset('images/how-work-circle-img.png') }}" alt="">
                    </div>
                    <!-- How Work Circle Image End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- How Work Process Box Start -->
                    <div class="how-work-process-box wow fadeInUp" data-wow-delay="0.5s">
                        <!-- How It Work Item Start -->
                        <div class="how-work-item">
                            <div class="work-process-no">
                                <h3>1</h3>
                            </div>
                            <div class="work-process-content">
                                <h3>Initial Consultation</h3>
                                <p>Meet with our experts to discuss your agricultural needs, challenges, and goals.</p>
                            </div>
                        </div>
                        <!-- How It Work Item End -->

                        <!-- How It Work Item Start -->
                        <div class="how-work-item">
                            <div class="work-process-no">
                                <h3>2</h3>
                            </div>
                            <div class="work-process-content">
                                <h3>Site Assessment</h3>
                                <p>We evaluate your land or project site to recommend the best products and solutions.
                                </p>
                            </div>
                        </div>
                        <!-- How It Work Item End -->

                        <!-- How It Work Item Start -->
                        <div class="how-work-item">
                            <div class="work-process-no">
                                <h3>3</h3>
                            </div>
                            <div class="work-process-content">
                                <h3>Product Selection</h3>
                                <p>Choose from our wide range of high-quality agricultural products tailored to your
                                    specific requirements.</p>
                            </div>
                        </div>
                        <!-- How It Work Item End -->

                        <!-- How It Work Item Start -->
                        <div class="how-work-item">
                            <div class="work-process-no">
                                <h3>4</h3>
                            </div>
                            <div class="work-process-content">
                                <h3>Installation & Setup</h3>
                                <p>Our team handles the complete installation of your products, ensuring optimal
                                    performance and integration.</p>
                            </div>
                        </div>
                        <!-- How It Work Item End -->
                    </div>
                </div>
                <!-- How Work Process Box End -->
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->


    <!-- Our Work Section Start -->
    <div class="our-work" id="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title">
                            <span>Our Work</span>
                        </div>
                        <h3 class="wow fadeInUp">our work</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Explore our <br> </span>Recent
                            Projects</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Explore our recent agricultural projects to discover how we've implemented innovative farming
                            techniques and sustainable practices to increase crop yields and enhance food security
                            across various regions.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Choose Our Work Nav start -->
                    <div class="our-work-nav">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".greenhouse">Greenhouses</a></li>
                            <li><a href="#" data-filter=".irrigation">Irrigation Solutions</a></li>
                            <li><a href="#" data-filter=".chemical">Chemical Sprayers</a></li>
                            <li><a href="#" data-filter=".automation">Automation Systems</a></li>
                        </ul>
                    </div>
                    <!-- Choose Our Work Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Work Item Boxes start -->
                    <div class="row work-item-boxes">
                        <!-- Work Item Box for Irrigation -->
                        <div class="col-lg-4 col-md-6 work-item-box irrigation">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/irrigation1.jpg') }}" alt="Irrigation system">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Efficient Water Management</h3>
                                        <p>Innovative irrigation solutions for urban agriculture.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Another Work Item Box for Irrigation -->
                        <div class="col-lg-4 col-md-6 work-item-box irrigation">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/irrigation2.jpg') }}" alt="Urban irrigation">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Urban Irrigation Solutions</h3>
                                        <p>Tailored watering technologies for city landscapes.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Work Item Box for Greenhouses -->
                        <div class="col-lg-4 col-md-6 work-item-box greenhouse">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/greenhouse1.jpg') }}" alt="Greenhouse project">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Greenhouse Climate Control</h3>
                                        <p>Optimized designs to improve plant growth.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Another Work Item Box for Greenhouses -->
                        <div class="col-lg-4 col-md-6 work-item-box greenhouse">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/greenhouse2.jpg') }}" alt="Advanced greenhouse">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Advanced Greenhouse Technologies</h3>
                                        <p>Cutting-edge greenhouse setups to boost sustainability.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Work Item Box for Chemical Sprayers -->
                        <div class="col-lg-4 col-md-6 work-item-box chemical">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/chemical1.jpg') }}" alt="Chemical management">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Sustainable Chemical Application</h3>
                                        <p>Precise sprayers to enhance plant health.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Work Item Box for Automation Systems -->
                        <div class="col-lg-4 col-md-6 work-item-box automation">
                            <div class="work-item">
                                <div class="work-image">
                                    <a href="#">
                                        <figure>
                                            <img src="{{ asset('images/automation2.jpg') }}" alt="Farming automation">
                                        </figure>
                                    </a>
                                </div>
                                <div class="work-body">
                                    <div class="work-content">
                                        <h3>Advanced Agricultural Automation</h3>
                                        <p>Automation systems to streamline farming operations.</p>
                                    </div>
                                    <div class="work-readmore-btn">
                                        <a href="#"><img src="{{ asset('images/arrow-green.svg') }}"
                                                alt="Read more"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Work Item Boxes End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Work Section End -->

    <!-- Our Testiminial Start -->
    <div class="our-testimonials parallaxie">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-9">
                    <div class="testimonial-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <div class="section-bg-title dark-bg-1">
                                <span>Review</span>
                            </div>
                            <h3 class="wow fadeInUp">testimonials</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our happy <span>client says</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('images/saliya.jpg') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Saliya</h3>
                                                    <p>Customer-Agronomist</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Best Service Provider for all Agro Needs, They are Flexible and
                                                    Compertitve and innovative Company.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('images/michal.jpg') }}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Michal</h3>
                                                    <p>Customer-Businessman</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Always Supportive and Informative in new Developments in the All Agro
                                                    Fields.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-header">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="{{ asset('images/mohhomednifas.jpg') }}"
                                                            alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Mohammed Rifas</h3>
                                                    <p>Farmer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>They Introduce us to Drip Irrigation, Since Then We have saved lot of
                                                    Money, Time and Water in all our Fields.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                                <div class="testimonial-btn">
                                    <div class="testimonial-button-prev"></div>
                                    <div class="testimonial-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testiminial End -->



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



    <!-- Our gallary Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <div class="section-bg-title">
                            <span>Gallary</span>
                        </div>
                        <h3 class="wow fadeInUp">Our Gallary</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Latest Additions </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Discover our range of innovative agricultural products, designed to boost productivity and
                            sustainability, transforming your fields into thriving landscapes.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>


            <div class="gallery">
                <div class="gallery-item">
                    <a href="#img1"><img src="{{ asset('images/gallery1.jpg') }}" alt="Image 1"></a>
                </div>
                <div class="gallery-item">
                    <a href="#img2"><img src="{{ asset('images/gallery2.jpg') }}" alt="Image 2"></a>
                </div>
                <div class="gallery-item">
                    <a href="#img3"><img src="{{ asset('images/gallery3.jpg') }}" alt="Image 3"></a>
                </div>
                <div class="gallery-item">
                    <a href="#img4"><img src="{{ asset('images/gallery4.jpg') }}" alt="Image 4"></a>
                </div>
                <div class="gallery-item">
                    <a href="#img5"><img src="{{ asset('images/gallery5.jpg') }}" alt="Image 5"></a>
                </div>
            </div>

            <!-- Lightbox structure -->
            <div id="img1" class="lightbox">
                <a href="#" class="close">&times;</a>
                <img src="{{ asset('images/gallery1.jpg') }}" alt="Image 1">
                <a href="#img5" class="prev">&#10094;</a>
                <a href="#img2" class="next">&#10095;</a>
            </div>

            <div id="img2" class="lightbox">
                <a href="#" class="close">&times;</a>
                <img src="{{ asset('images/gallery2.jpg') }}" alt="Image 2">
                <a href="#img1" class="prev">&#10094;</a>
                <a href="#img3" class="next">&#10095;</a>
            </div>

            <div id="img3" class="lightbox">
                <a href="#" class="close">&times;</a>
                <img src="{{ asset('images/gallery3.jpg') }}" alt="Image 3">
                <a href="#img2" class="prev">&#10094;</a>
                <a href="#img4" class="next">&#10095;</a>
            </div>

            <div id="img4" class="lightbox">
                <a href="#" class="close">&times;</a>
                <img src="{{ asset('images/gallery4.jpg') }}" alt="Image 4">
                <a href="#img3" class="prev">&#10094;</a>
                <a href="#img5" class="next">&#10095;</a>
            </div>

            <div id="img5" class="lightbox">
                <a href="#" class="close">&times;</a>
                <img src="{{ asset('images/gallery5.jpg') }}" alt="Image 5">
                <a href="#img4" class="prev">&#10094;</a>
                <a href="#img1" class="next">&#10095;</a>
            </div>


        </div>
    </div>
    <!-- Our Blog Section End -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4, // Display 4 logos at once
            spaceBetween: 10, // Space between slides (10px)
            loop: true, // Enable continuous looping
            autoplay: {
                delay: 2000, // Auto swipe every 2 seconds (2000ms)
                disableOnInteraction: false, // Continue autoplay after interaction
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <script>
        // Get the modal
        var lightbox = document.getElementById("lightbox");
        var lightboxImg = document.getElementById("lightbox-img");

        // Get all images and insert them inside the lightbox
        var images = document.querySelectorAll(".gallery-img");
        images.forEach((img) => {
            img.addEventListener("click", function() {
                lightbox.style.display = "block";
                lightboxImg.src = this.src;
            });
        });

        // Close the lightbox
        var close = document.getElementsByClassName("close")[0];
        close.onclick = function() {
            lightbox.style.display = "none";
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Isotope for filtering
            var $grid = $('.work-item-boxes').isotope({
                itemSelector: '.work-item-box',
                layoutMode: 'fitRows'
            });

            // Filter items when filter link is clicked
            $('.our-work-nav ul li a').on('click', function(e) {
                e.preventDefault(); // Prevent the default action of the anchor

                // Get filter value from clicked link
                var filterValue = $(this).attr('data-filter');

                // Filter the items
                $grid.isotope({ filter: filterValue });

                // Add active class to the current filter link
                $('.our-work-nav ul li a').removeClass('active-btn');
                $(this).addClass('active-btn');
            });
        });
    </script>

@endsection
