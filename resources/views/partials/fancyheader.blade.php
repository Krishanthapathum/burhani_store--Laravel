<header class="main-header"  style="background-color: #0b3d2c;">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/Group 89.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/fancyStore') }}">Fancy Stores</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Our Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Contact Now Box Start -->
                    <a href="tel:+94777945940" style="text-decoration: none; color: inherit;">
                        <div class="contact-now-box d-inline-flex">
                            <div class="icon-box">
                                <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                            </div>
                            <div class="contact-now-box-content">
                                <p>Call us any time</p>
                                <h3>+94777945940</h3>
                            </div>
                        </div>
                    </a>
                    <!-- Contact Now Box End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
