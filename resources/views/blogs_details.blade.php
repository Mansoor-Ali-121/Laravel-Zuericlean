@extends('webtemp')

@section('title', 'Blogs')

@include('links.css')
@section('styles')
    @yield('blogs-details-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')


    <!-- Blogs details page hero section -->
    <section class="blogs-details-page-hero-section">
        <h6 class="navigation-text">Home > Blog > Blog Details</h6>
        <h1>Say Goodbye to Dust – and Hello to <span class="txt-background-color bg-white">20% Off!</span> | ZueriClean
            Zurich</h1>
    </section>

    <!-- Blogs details page section -->
    <section class="blogs-details-page-section">
        <div class="blogs-details-page-section-left-section">
            <div class="blogs-details-page-section-left-section-content">
                <p>Looking for <span class="txt-background-color fw-bold"> professional cleaning services in
                        Zurich?</span> Need a
                    <span class="txt-background-color fw-bold"> trusted move-out cleaning company </span>with
                    a <span class="txt-background-color fw-bold"> handover guarantee?</span> Whether you're relocating,
                    spring
                    cleaning, or refreshing your office
                    —  <span class="txt-background-color fw-bold"> ZueriClean </span> you covered.
                    <br><br>
                    And for a <span class="txt-background-color fw-bold">  limited time,</span> enjoy  <span
                        class="txt-background-color fw-bold"> 20% OFF</span> all services! No code needed — just mention
                    the offer
                    when
                    booking.
                </p>
                <h3>Top-Rated Cleaning Company in <span class="txt-background-color">Zurich</span></h3>
                <!-- List -->
                <div class="blogs-details-page-list">
                    <ul>
                        <li class="txt-background-color"><a href="#">End-of-tenancy cleaning Zurich</a></li>
                        <li class="txt-background-color"><a href="#">Move-out cleaning with handover guarantee</a></li>
                        <li class="txt-background-color"><a href="#">Deep cleaning services for homes & apartments</a>
                        </li>
                        <li class="txt-background-color"><a href="#">Eco-friendly house cleaning Zurich</a></li>
                        <li class="txt-background-color"><a href="#">Professional carpet and sofa cleaning Zurich</a>
                        </li>
                        <li class="txt-background-color"><a href="#">Office and commercial cleaning services</a></li>
                        <li class="txt-background-color"><a href="#">Curtain and window cleaning Zurich</a></li>
                        <li class="txt-background-color"><a href="#">Mattress and upholstery cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Waste removal and decluttering services</a></li>
                    </ul>
                </div>
                <div class="btn-background-color">Book Your Sofa Cleaning Now!</div>
                <div class="blogs-details-immg">
                    <img src="{{asset('front/assets/Images/blogs-details.png')}}" alt="">
                </div>
                <h3>Factors That Affect <span class="txt-background-color"> Apartment Cleaning </span>Time</h3>
                <p>Cleaning time can vary greatly depending on multiple factors. Here’s what affects the duration:</p>
                <h4>1. Apartment Size</h4>
                <p>The larger the apartment, the longer it takes to clean. More rooms mean more surfaces to dust, mop,
                    and vacuum. A small studio will take much less time than a two-bedroom apartment</p>
                <h4>2. Apartment Condition</h4>
                <p>The current state of your apartment plays a significant role in cleaning duration. A relatively tidy
                    apartment with regular upkeep will take much less time than an apartment that has been neglected for
                    months. Factors such as accumulated dust, stains, and general clutter will extend the cleaning
                    process.</p>
            </div>
        </div>
        <div class="blogs-details-page-section-right-section">
            <!-- sidebar popular services-->
            <div class="blogs-details-page-section-right-section-sidebar">
                <h3 class="txt-background-color">Popular Services</h3>
                <div class="sidebar-card">
                    <ul>
                        <li class="txt-background-color"><a href="#">Office Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Move-out Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Mattress Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Residential Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Sofa Cleaning</a></li>
                    </ul>
                </div>
                <h2 class="txt-background-color">Get in Touch</h2>
                <div> <span class="txt-background-color">Email:</span>  info@zuericlean.com</div>
                <div> <span class="txt-background-color">Phone:</span> +41 76 413 6183</div>
            </div>
        </div>
    </section>

    <!-- Related services -->
    <section class="blogs-details-page-related-services">
        <h2>Related <span class="txt-background-color"> Services</span></h2>
        <!-- Cards section -->

        <div class="cleaning-cards-container">
    <div class="cleaning-card">
        <div class="cleaning-card-content">
            <img src="{{ asset('front/assets/Images/all secttion images/card1.png') }}" alt="..." />
            <h3>End of Tenancy Cleaning</h3>
            <p class="sub">Rated by Customer</p>
            <div class="stars">★★★★★</div>
            <p class="desc">
                Stress-free End-of-Tenancy Cleaning! Our end-of-tenancy cleaning
                guarantees a sparkling property and helps you get your deposit
                back.
            </p>
        </div>
        <button class="btn-background-color">
            Get Quote Now <span class="btn-icon">››</span>
        </button>
    </div>

    <div class="cleaning-card">
        <div class="cleaning-card-content">
            <img src="{{ asset('front/assets/Images/all secttion images/card1.png') }}" alt="..." />
            <h3>End of Tenancy Cleaning</h3>
            <p class="sub">Rated by Customer</p>
            <div class="stars">★★★★★</div>
            <p class="desc">
                Stress-free End-of-Tenancy Cleaning! Our end-of-tenancy cleaning
                guarantees a sparkling property and helps you get your deposit
                back.
            </p>
        </div>
        <button class="btn-background-color">
            Get Quote Now <span class="btn-icon">››</span>
        </button>
    </div>

    <div class="cleaning-card">
        <div class="cleaning-card-content">
            <img src="{{ asset('front/assets/Images/all secttion images/card2.png') }}" alt="..." />
            <h3>Sofa Cleaning</h3>
            <p class="sub">Rated by Customer</p>
            <div class="stars">★★★★★</div>
            <p class="desc">
                Keep your sofa spotless! We clean and refresh your upholstery,
                removing dirt and stains for a cozy living room.
            </p>
        </div>
        <button class="btn-background-color">
            Get Quote Now <span class="btn-icon">››</span>
        </button>
    </div>

    <div class="cleaning-card">
        <div class="cleaning-card-content">
            <img src="{{ asset('front/assets/Images/all secttion images/card3.png') }}" alt="..." />
            <h3>Carpet Cleaning</h3>
            <p class="sub">Rated by Customer</p>
            <div class="stars">★★★★★</div>
            <p class="desc">
                Book professional carpet cleaning at Züriclean. Experience
                clean, fresh carpets with our service.
            </p>
        </div>
        <button class="btn-background-color">
            Get Quote Now <span class="btn-icon">››</span>
        </button>
    </div>

    <div class="cleaning-card">
        <div class="cleaning-card-content">
            <img src="{{ asset('front/assets/Images/all secttion images/card4.png') }}" alt="..." />
            <h3>Seat Cleaning</h3>
            <p class="sub">Rated by Customer</p>
            <div class="stars">★★★★★</div>
            <p class="desc">
                At Züriclean, we offer a comprehensive range of seat cleaning
                services tailored to your specific needs, whether it’s for home,
                office, or public spaces.
            </p>
        </div>
        <button class="btn-background-color">
            Get Quote Now <span class="btn-icon">››</span>
        </button>
    </div>
</div>


    </section>

    <!-- Blogs -->
    <div class="slide-container swiper">
        <h3>Recent <span class="txt-background-color">Blogs</span></h3>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">

                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>

                    </div>
                </div>


                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>

                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>

                    </div>
                </div>

                <!-- new -->
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>

                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="overlay">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png"
                                alt="Avatar" class="overlay-img" />
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Mohamed Yousef</h2>
                        <p class="description">
                            The lorem text the section that contains header with having open
                            functionality. Lorem dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button class="btn-background-color">View More</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>


   

@endsection
