@extends('layouts.fancy')

@section('content')

<!-- Our Vision Mission Section Start -->
<div class="our-vision-mission">
    <div class="container">
        <!-- Vision Mission Box Start -->
        <div class="row vision-mission-box align-items-center">
            <div class="col-lg-6">
                <!-- Our Vision Image Start -->
                <div class="our-vision-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('images/fancystores1.jpg') }}" alt="" style="filter: grayscale(100%);">
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
                            <span>Fancy Store</span>
                        </div>
                        <h3 class="wow fadeInUp">About Fancy Stores</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">75 YEARS <br><span>OF EXCELLENCE
                            </span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Originally established in the picturesque
                            town of Bandarawela as <b>Fancy Stores</b>, our journey began as a humble retail outlet
                            nestled in the refreshing mist. Over the years, Fancy Stores has evolved, setting the foundation
                            for the growth of Burhani Stores. </p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Initially branching out as an agricultural
                            extension of Fancy Stores, we have since grown to become a significant player in the
                            country's agro-irrigation sector. With continuous improvements and a strong commitment to customer
                            service, we have solidified our reputation as a trusted and dedicated establishment in
                            the nation.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Our Vision Content End -->
            </div>
        </div>
        <!-- Vision Mission Box End -->

        <div class="why-choose-body wow fadeInUp" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Diverse Range of Products">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>diverse range of products</h3>
                                <p>We offer a wide variety of products to cater to all your agricultural needs,
                                    ensuring you find everything in one place.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->

                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Unmatched After Sales Services">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>unmatched after-sales services</h3>
                                <p>Our dedicated support team provides exceptional after-sales services to help you
                                    maintain optimal product performance.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Diverse Supplier Networks">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>diverse and multiple supplier networks</h3>
                                <p>We partner with a variety of reliable suppliers to ensure a consistent supply of
                                    high-quality products.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->

                        <!-- Why choose Item Start -->
                        <div class="why-choose-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="Best Quality Products">
                            </div>
                            <div class="why-choose-item-content">
                                <h3>best quality products</h3>
                                <p>Our products are sourced from trusted manufacturers, guaranteeing superior
                                    quality and durability for your needs.</p>
                            </div>
                        </div>
                        <!-- Why choose Item End -->
                    </div>
                </div>
            </div>
        </div>

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
                                <img src="{{ asset('images/icon-why-choose-1.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">1200</span>+</h2>
                                <p>Customers</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-counter-2.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Partners</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                        <!-- Counter Item Start -->
                        <div class="counter-item">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-counter-3.svg') }}" alt="">
                            </div>
                            <div class="counter-item-content">
                                <h2><span class="counter">75</span>+</h2>
                                <p>History</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->
                    </div>
                    <!-- Counter Content Box End -->

                    <!-- Counter Image Start -->
                    <div class="counter-image">
                        <figure class="image-anime">
                            <img src="{{ asset('images/Group 92.png') }}" alt="">
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
                    <img src="{{ asset('images/fancypartner1.png') }}" alt="Logo 2" class="logo-hover" />
                </div>
                <!-- Logo 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/fancypartner2.png') }}" alt="Logo 3" class="logo-hover" />
                </div>
                <!-- Logo 4 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/fancypartner3.png') }}" alt="Logo 4" class="logo-hover" />
                </div>
                <!-- Logo 5 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/fancypartner4.png') }}" alt="Logo 5" class="logo-hover" />
                </div>
            </div>

            <!-- Add Pagination -->
            <!-- <div class="swiper-pagination"></div> -->

        </div>
    </div>
</div>
<!-- Our partners End -->

<!-- Google Map Start -->
<div class="google-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.500037600053!2d80.98763687454057!3d6.830488019520726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae46ffc2f0fe437%3A0xedf426c89073036d!2sFancy%20Stores!5e0!3m2!1sen!2slk!4v1728554016490!5m2!1sen!2slk"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map Iframe End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map End -->


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

    <script>
        // Get the modal
        var lightbox = document.getElementById("lightbox");
        var lightboxImg = document.getElementById("lightbox-img");

        // Get all images and insert them inside the lightbox
        var images = document.querySelectorAll(".gallery-img");
        images.forEach((img) => {
            img.addEventListener("click", function () {
                lightbox.style.display = "block";
                lightboxImg.src = this.src;
            });
        });

        // Close the lightbox
        var close = document.getElementsByClassName("close")[0];
        close.onclick = function () {
            lightbox.style.display = "none";
        };

    </script>

    <script>
        // Show the button when the user scrolls down 100px from the top
        window.onscroll = function () {
            const backToTopButton = document.getElementById("backToTop");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        // Scroll to the top when the button is clicked
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: "smooth" });
        }
    </script>
</body>

@endsection
