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

    

   
        // Wait until the page is fully loaded
        window.addEventListener('load', function () {
            // Show the icons by removing the hide-icons class
            document.querySelectorAll('.daraz-icon-fix, .whatsapp-icon-fix').forEach(function (icon) {
                icon.classList.remove('hide-icons');
            });
        });
    