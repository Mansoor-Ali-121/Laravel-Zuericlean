<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('front/assets/Css/custom-nav.css') }}" />

    <link rel="stylesheet" href="{{ asset('front/assets/Css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/Css/faqs.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/Css/footer.css') }}" />
    <!-- FLipcart js library -->




    @yield('styles')

</head>

<body>


    @yield('main_section')

   

    <!-- Map  -->
    <!-- contact-map -->
    <div id="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.8721136379696!2d8.536646915568443!3d47.397019779169654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900b75045081b3%3A0x18c50f1e6f0a6c3b!2sSchaffhauserstrasse%20380%2C%208050%20Z%C3%BCrich%2C%20Switzerland!5e0!3m2!1sen!2s!4v1632448665873!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->


    <!-- Footer -->
    <section class="footer-section">
        <div class="footer-overlay"></div>

        <div class="footer-container">
            <div class="footer-left">
                <img src="{{ asset('front/assets/Images/logo.png') }}" alt="ZueriClean Logo" class="footer-logo" />
                <p>
                    Keep yourself apart from the cleanup stress – As the best cleaning
                    service Zürich, we’ll take care of all of your living space – Also
                    consider us for move out cleaning with a trusted handover cleaning
                    guarantee.
                </p>
            </div>

            <div class="footer-links">
                <div class="footer-column">
                    <h4>Cleanings</h4>
                    <ul>
                        <li><a href="#">Residential Cleaning</a></li>
                        <li><a href="#">Relocation, Move</a></li>
                        <li><a href="#">Out and Handover Cleaning</a></li>
                        <li><a href="#">Office Cleaning</a></li>
                        <li><a href="#">Carpet Cleaning</a></li>
                        <li><a href="#">Event Cleaning</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Locations</h4>
                    <ul>
                        <li><a href="#">Aarau</a></li>
                        <li><a href="#">Baden</a></li>
                        <li><a href="#">Basel</a></li>
                        <li><a href="#">Bern</a></li>
                        <li><a href="#">Biel Bienne</a></li>
                        <li><a href="#">Dübendorf</a></li>
                        <li><a href="#">See More</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Important Links</h4>
                    <ul>
                        <li><a href="#">Tenancy Termination</a></li>
                        <li><a href="#">Date Arranging</a></li>
                        <li><a href="#">Packing Transport</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Our Clients</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>+41764136183</li>
                        <li>info@zuericlean.com</li>
                        <li>Schaffhauserstrasse 380, 8050 Zürich</li>
                        <li>A product of Specialclean Züri GmbH</li>
                    </ul>
                    <div class="footer-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            © Copyright ZueriClean 2025 All Rights Reserved
        </div>
    </section>
    <!-- Footer  end-->


    <!-- Carousel  -->
    {{-- <script src="./js/carousel.js"></script> --}}

  <script>
    window.addEventListener("scroll", function () {
        const hero = document.querySelector(".hero-section");
        const scrollMenu = document.getElementById("navbar-white");

        // Get hero's top position relative to the viewport
        const heroTop = hero.getBoundingClientRect().top;

        // Show white navbar when hero is entering the viewport (<= 0 means it's visible)
        if (heroTop <= 0) {
            scrollMenu.style.display = "block";
        } else {
            scrollMenu.style.display = "none";
        }
    });

    // Optional: Also run this logic on page load in case the page is already scrolled
    window.addEventListener("load", function () {
        const hero = document.querySelector(".hero-section");
        const scrollMenu = document.getElementById("navbar-white");

        if (hero.getBoundingClientRect().top <= 0) {
            scrollMenu.style.display = "block";
        } else {
            scrollMenu.style.display = "none";
        }
    });
</script>


    <!-- Swiper JS -->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            autoplay: {
                delay: 1000, // slide will change every 3 seconds
                disableOnInteraction: false,
            },
            loop: true,
            centerSlide: true,
            fade: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

    <!-- JavaScript -->
    <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <!-- <script src="./js/bookingpage/form.js"></script> -->
    <!-- Flatpickr date picker JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#inline-calendar", {
            inline: true,
            dateFormat: "d-m-Y",
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('selectedDate').textContent = dateStr || "--";
            }
        });
    </script>


 <!-- carausal -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
    <!-- Blogs carausal -->
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            autoplay: {
                delay: 1000, // slide will change every 3 seconds
                disableOnInteraction: false,
            },
            loop: true,
            centerSlide: true,
            fade: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>
