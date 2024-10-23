<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <title>BS Agro - Agricultural & Irrigation Solutions</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/titlesvg.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>

<body>

    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('images/titlesvg.svg') }}" alt=""></div>
        </div>
    </div>

    <header>
        @include('partials.fancyheader')
    </header>

    <main>
        @yield('content')

        <div class="daraz-icon-fix hide-icons"
            onclick="window.open('https://www.daraz.lk/burhani-stores/?q=All-Products&from=wangpu&langFlag=en&pageTypeId=2', '_blank');">
            <img src="{{ asset('images/daraz.svg') }}" alt="daraz" />
            <span class="daraz-text-fix">On Daraz !</span>
        </div>

        <div class="whatsapp-icon-fix hide-icons" onclick="window.open('https://wa.me/+94777945940', '_blank');">
            <img src="{{ asset('images/WhatsApp.webp') }}" alt="WhatsApp" />
            <span class="whatsapp-text-fix">WhatsApp Us !</span>
        </div>

        <button id="backToTop" onclick="scrollToTop()" aria-label="Back to Top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/gsap.min.js') }}"></script>
    <script src="{{ asset('js/magiccursor.js') }}"></script>
    <script src="{{ asset('js/SplitText.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="{{ asset('assets/js/theme-panel.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        window.addEventListener('load', function() {
            document.querySelectorAll('.daraz-icon-fix, .whatsapp-icon-fix').forEach(function(icon) {
                icon.classList.remove('hide-icons');
            });
        });

        window.onscroll = function() {
            const backToTopButton = document.getElementById("backToTop");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
</body>

</html>
