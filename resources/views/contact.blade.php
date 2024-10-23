@extends('layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>Us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">home</a></li>
                                <li class="breadcrumb-item">
                                    <div class="fa fa-chevron-right"></div>
                                </li>
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
    <div class="page-contact-us" id="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <div class="section-bg-title dark-bg-2">
                                <span>Contact</span>
                            </div>
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Get in Touch <span>for Sustainable
                                    Solutions Today!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Reach out today for affordable and innovative
                                agricultural solutions. At Burhani Stores, we intertwine sustainability and prosperity
                                from seed to market, covering farming, livestock, agro-processing, and more.</p>
                        </div>
                        <!-- Section Title End -->

                        <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="wow fadeInUp"
                            data-wow-delay="0.5s">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname"
                                        placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname"
                                        placeholder="Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone No" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        placeholder="Subject" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="msg" class="form-control" id="msg" rows="6" placeholder="Message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default btn-highlighted">Submit
                                            Message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- Contact Form End -->
                </div>

                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- <div class="contact-info-image">
                            <figure class="image-anime reveal">
                                <img src="images/sidebar-cta-img.jpg" alt="">
                            </figure>
                        </div> -->

                        <!-- Contact Information List Start -->
                        <div class="contact-info-list">

                            <div class="contact-info-content">
                                <div class="section-title" style="margin-bottom: 0px;">

                                    <h3 class="wow fadeInUp" style="margin-bottom: 0px;"> Burhani Stores</h3>
                                </div>
                            </div>

                            <hr
                                style="border: none; height: 2px; background-color: #0b3d2c; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-phone.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>give us a call</p>
                                    <a href="tel:+94777945940">
                                        <h3>(+94) 777945940</h3>
                                    </a>
                                    <a href="tel:+94112332100">
                                        <h3>(+94) 112332100</h3>
                                    </a>

                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-mail.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Send us a message</p>
                                    <a href="mailto:bsagriculture52@gmail.com">
                                        <h3>bsagriculture52@gmail.com</h3>
                                    </a>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-location.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Visit our location</p>
                                    <h3>No 7, 1/1 Sunshine Plaza, 1st Cross Street, Colombo 11, Srilanka.</h3>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Information List End -->

                        <div class="contact-info-list mt-5">

                            <div class="contact-info-content">
                                <div class="section-title" style="margin-bottom: 0px;">

                                    <h3 class="wow fadeInUp" style="margin-bottom: 0px;"> Fancy Stores</h3>
                                </div>
                            </div>
                            <hr
                                style="border: none; height: 2px; background-color: #0b3d2c; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-phone.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>give us a call</p>
                                    <a href="tel:+94777945940">
                                        <h3>(+94) 773453520</h3>
                                    </a>
                                    <a href="tel:+94112332100">
                                        <h3>(+94) 112332100</h3>
                                    </a>

                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-mail.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Send us a message</p>
                                    <a href="mailto:bsagriculture52@gmail.com">
                                        <h3>bsagriculture52@gmail.com</h3>
                                    </a>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->

                            <!-- Contact Info Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-contact-location.svg') }}" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Contact Info Content Start -->
                                <div class="contact-info-content">
                                    <p>Visit our location</p>
                                    <h3>No. 44, Main Street,Bandarawela – 90100, Srilanka.</h3>
                                </div>
                                <!-- Contact Info Content End -->
                            </div>
                            <!-- Contact Info Item End -->
                        </div>
                        <!-- Contact Information List End -->

                    </div>
                    <!-- Contact Information End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d990.1576567952297!2d79.8505002695362!3d6.934674330860798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTYnMDQuOCJOIDc5wrA1MScwNC4xIkU!5e0!3m2!1sen!2slk!4v1728553842386!5m2!1sen!2slk"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
@endsection
