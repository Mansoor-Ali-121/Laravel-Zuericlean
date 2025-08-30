@extends('webtemp')
@include('links.css')

@section('title', 'Züeri Clean')

@section('styles')
    @yield('home-styles')
@endsection

@section('main_section')

    @include('partials.navone')


   {{-- @include('partials.commonNav') --}}


    <!-- Hero Section -->
    <div class="container-fluid px-0 hero-section">
        <div class="hero-section-inner-section">
            <img src="{{ asset('front/assets/Images/hero_inner.png') }}" alt="" />
            <div class="hero-section-inner-text">
                <h1 class="text-center header-title">Züriclean</h1>
                <p class="text-center header-subtitle text-black">
                    A Prefered Local Cleaning Company
                </p>
                <img src="{{ asset('front/assets/Images/rating.png') }}" class="img-fluid mt-3 mx-auto"
                    style="max-width: 310px; height: 102px" alt="" />

                <!-- Hero Section Dropdown -->
                <div class="dropdown text-center hero-dropdown">
                    <button class="btn btn-light dropdown-toggle select-services" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Services
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Carpet Cleaning</a></li>
                        <li><a class="dropdown-item" href="#">Window Cleaning</a></li>
                        <li><a class="dropdown-item" href="#">Office Cleaning</a></li>
                    </ul>
                </div>

                <input type="text" placeholder="zip code" class="mt-3" />
                <a href="">
                    <button type="button" class="btn w-100 mt-3 text-white"
                        style="background-color: #005a9c; max-width: 450px">
                        Book Now!
                    </button>
                </a>
                <p class="text-center mt-2" style="font-weight: 600">
                    <span style="color: #005a9c">Book</span> our professional cleaners
                    today and leave the rest to us!
                </p>
            </div>
        </div>
    </div>


    <!-- Top Cleaning Services -->
    <section class="top-cleaning-services">
        <div class="top-cleaning-services-left">
            <div class="top-cleaning-services-left-upper">
                <h2>
                    Top Cleaning Company in
                    <span class="txt-background-color"> Switzerland </span>
                </h2>
                <div class="icons">
                    <ul>
                        <li>
                            <img src="{{ asset('front/assets/Icons/tenancy.png') }}" alt="" />
                            Tenancy Cleaning
                        </li>
                        <li>
                            <img src="{{ asset('front/assets/Icons/Terrace.png') }}" alt="" />
                            Terrace Cleaning
                        </li>
                        <li>
                            <img src="{{ asset('front/assets/Icons/sofa.png') }}" alt="" />
                            Sofa Cleaning
                        </li>
                        <li>
                            <img src="{{ asset('front/assets/Icons/Mattress.png') }}" alt="" />
                            Mattress Cleaning
                        </li>
                    </ul>
                    <div>
                        <button class="btn-background-color">
                            <a href="">View more Services </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="top_cleaning-services-left-first-para">
                <p>
                    At Züriclean, we take pride in offering cleaning solutions that are
                    not only reliable and punctual but also cost-effective and tailored
                    to meet your needs. Our team of skilled professionals is committed
                    to delivering top-tier Cleaning Services with a smile. From spotless
                    homes to well-maintained offices, we ensure your spaces shine and
                    reflect your highest standards.
                </p>
                <div>
                    <button class="btn-background-color">
                        <a href="">+41 76 413 61 83 </a>
                    </button>
                    <button class="btn-background-color">
                        <a href="">Book End of Tenancy Now! </a>
                    </button>
                </div>
                <p>
                    Feel free to explore our website to discover the full range of our
                    services, read through customer testimonials, or find answers to
                    frequently asked questions. Whether you need routine cleaning or
                    professional end-of-tenancy Cleaning Service, we’re just a call
                    away. Have any questions or specific requirements? Contact us—we’re
                    here to help and eager to work with you to create the perfect
                    cleaning plan for your needs.
                </p>
            </div>
        </div>
        <!-- image -->
        <div class="top-cleaning-services-right">
            <img src="{{ asset('front/assets/Images/top_cleaning_services.png') }}" alt="" />
        </div>
    </section>


    <!-- Sofa Cleaning Services -->
    <section class="sofa-cleaning-services">
        <div class="sofa-cleaning-services-left">
            <div class="sofa-cleaning-services-left-image">
                <img src="{{ asset('front/assets/Images/sofa1.png') }}" alt="" />
            </div>
            <div>
                <img src="{{ asset('front/assets/Images/sofa2.png') }}" alt="" />
            </div>
        </div>

        <div class="sofa-cleaning-services-right">
            <div class="sofa-cleaning-services-right-first-para">
                <h2>
                    Premium
                    <span class="txt-background-color"> Sofa Cleaning </span> Services
                    in Zurich
                </h2>
                <p>
                    Keep your upholstery looking its best with Züriclean's professional
                    sofa cleaning services. We are a leading sofa cleaning company in
                    Zurich, dedicated to providing exceptional results and customer
                    satisfaction. Whether you need a one-time deep clean or regular
                    maintenance, our experienced team utilizes advanced techniques and
                    eco-friendly solutions to revitalize your sofas.
                </p>
                <div>
                    <a href="">
                        <button class="btn-background-color">
                            Book Your Sofa Cleaning Now!
                        </button>
                    </a>
                </div>
            </div>
            <div class="sofa-cleaning-services-right-second-para">
                <h2>
                    Premium <span class="txt-background-color"> Terrace Cleaning </span>
                    Services in Zurich
                </h2>
                <p>
                    Keep your outdoor spaces pristine with Züriclean's professional
                    terrace cleaning services. We are a leading terrace cleaning company
                    in Zurich, committed to delivering superior results and client
                    happiness. Be it a one-time intensive wash or routine upkeep, our
                    experienced crew employs state-of-the-art methods and sustainable
                    products to revive your terrace.
                </p>
                <div>
                    <button class="btn-background-color">
                        <a href=""> Book Your Terrace Cleaning Now! </a>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- All Services -->
    <section class="all-services">
        <!-- Top section -->
        <div class="all-services-top">
            <h2>
                Effortless Booking for
                <span class="txt-background-color">
                    End-of-tenancy cleaning, House Cleaning
                </span>
                and
                <span class="txt-background-color"> Commercial Cleaning </span>Services in Zürich
            </h2>
            <p>
                We believe that hiring professional cleaning services in Zürich should
                be stress-free and simple. That’s why we’ve streamlined our booking
                process to make it as easy as possible.
            </p>
            <br />
            <p>
                Are you preparing your home for guests, refreshing your living space,
                or organizing a end-of-tenancy cleaning with stringent requirements?
                Or perhaps your office needs regular upkeep to maintain a clean and
                productive environment? Whatever your needs, our team is ready to
                provide fast, hassle-free solutions tailored to your schedule and
                preferences.
            </p>
        </div>

        <!-- Cards section -->
        <div class="all-services-bottom">
            <!-- 1 div -->
            <div class="cleaning-cards-container">
                <div class="cleaning-card">
                    <div class="cleaning-card-content">
                        <img src="{{ asset('front/assets/Images/all_section_images/card1.png') }}" alt="..." />

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
                        <img src="{{ asset('front/assets/Images/all_section_images/card2.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card3.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card4.png') }}" alt="..." />
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
            <br />
            <!-- 2 div -->
            <div class="cleaning-cards-container">
                <div class="cleaning-card">
                    <div class="cleaning-card-content">
                        <img src="{{ asset('front/assets/Images/all_section_images/card1.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card2.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card3.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card4.png') }}" alt="..." />
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
            <br />
            <!-- 3 div -->
            <div class="cleaning-cards-container">
                <div class="cleaning-card">
                    <div class="cleaning-card-content">
                        <img src="{{ asset('front/assets/Images/all_section_images/card1.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card2.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card3.png') }}" alt="..." />
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
                        <img src="{{ asset('front/assets/Images/all_section_images/card4.png') }}" alt="..." />
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
        </div>
    </section>


    <!-- End Tenancy Cleaning -->
    <section class="end-tenancy-cleaning">
        <div class="end-tenancy-cleaning-left">
            <h3>
                Guaranteed
                <span class="txt-background-color"> End-of-Tenancy Cleaning </span>
                for Peace of Mind
            </h3>
            <p>
                End-of-tenancy Cleaning can be a daunting task, especially with
                property inspections and deposit refunds on the line. At Züriclean, we
                specialize in providing comprehensive move-out cleaning services with
                a 100% handover guarantee.
            </p>
            <p>
                Our dedicated team ensures your space meets or exceeds the required
                cleanliness standards, covering everything from deep-cleaning carpets
                and windows to eliminating even the toughest stains. Expats in Zürich
                particularly appreciate our handover cleaning guarantee, which
                promises a thorough cleaning that satisfies property managers and
                landlords.
            </p>
            <p>
                If you’re wondering, “What is a Cleaning Hand Over Guarantee?”—it’s
                our assurance of a seamless handover process with no cleaning-related
                hiccups. Let us handle the hard work so you can focus on what’s next!
            </p>
            <button class="btn-background-color">
                <a href=""> Book Handover Cleaning Now! </a>
            </button>
        </div>
        <div class="end-tenancy-cleaning-right">
            <img src="{{ asset('front/assets/Images/end_tenancy_cleaning.png') }}" alt="..." />
        </div>
    </section>


    <!-- Sofa And Touch -->
    <section class="sofa-touch">
        <div class="sofa-touch-left">
            <img src="{{ asset('front/assets/Images/sofa_and_touch.png') }}" alt="..." />
        </div>
        <div class="sofa-touch-right">
            <h3>
                Convenient<span class="txt-background-color">
                    Sofa and Couch Cleaning
                </span>
                Near You
            </h3>
            <p>
                We offer a range of sofa cleaning and touch-up services to ensure your
                sofa is in top condition. From deep-cleaning carpets and windows to
                eliminating even the toughest stains, our experienced team ensures a
                spotless sofa that meets or exceeds the required cleanliness
                standards.
            </p>
            <button class="btn-background-color">
                <a href="">Book Sofa Cleaning Now! </a>
            </button>
        </div>
    </section>

    <!-- Terrace Cleaning -->
    <section class="terrace-cleaning">
        <div class="terrace-cleaning-left">
            <h3>
                Premium <span class="txt-background-color">Terrace Cleaning</span>
                Services in Zurich
            </h3>
            <p>
                Keep your outdoor spaces pristine with Züriclean's professional
                terrace cleaning services. We are a leading terrace cleaning company
                in Zurich, committed to delivering superior results and client
                happiness. Be it a one-time intensive wash or routine upkeep, our
                experienced crew employs state-of-the-art methods and sustainable
                products to revive your terrace.
            </p>
            <a href="#" class="btn-background-color">Book Your Terrace Cleaning Now!</a>
        </div>

        <div class="terrace-cleaning-right">
            <img src="{{ asset('front/assets/Images/terrace_cleaning.png') }}" alt="Terrace Cleaning Image" />
        </div>
    </section>

    <!-- All services in Switzerland -->
    <section class="all-services-in-switzerland">
        <h3>
            We offer following Cleaning Services in
            <span class="txt-background-color"> Switzerland </span>
        </h3>

        <div class="services-grid">
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <a href="#" class="service-box">
                <span class="service-text">Regular Cleaning</span>
                <span class="service-arrow">»</span>
            </a>
            <a href="#" class="service-box">
                <span class="service-text">End of Tenancy Cleaning</span>
                <span class="service-arrow">»</span>
            </a>

            <!-- Repeat for other services -->
        </div>
    </section>

    <!-- Cities Section -->
    <section class="cities-container">
        <h3>
            List of Operating <span class="txt-background-color">Cities</span>
        </h3>
        <div class="cities-grid">
            <div class="city-box">
                <span class="city-icon">1</span><span class="city-name">Aarau</span>
            </div>
            <div class="city-box">
                <span class="city-icon">2</span><span class="city-name">Baden</span>
            </div>
            <div class="city-box">
                <span class="city-icon">3</span><span class="city-name">Basel</span>
            </div>
            <div class="city-box">
                <span class="city-icon">4</span><span class="city-name">Bern</span>
            </div>
            <div class="city-box">
                <span class="city-icon">5</span><span class="city-name">Biel Bienne</span>
            </div>
            <div class="city-box">
                <span class="city-icon">6</span><span class="city-name">Dübendorf</span>
            </div>
            <div class="city-box">
                <span class="city-icon">7</span><span class="city-name">Dietikon</span>
            </div>
            <div class="city-box">
                <span class="city-icon">8</span><span class="city-name">Horgen</span>
            </div>
            <div class="city-box">
                <span class="city-icon">9</span><span class="city-name">Lucerne</span>
            </div>
            <div class="city-box">
                <span class="city-icon">10</span><span class="city-name">St. Gallen</span>
            </div>
            <div class="city-box">
                <span class="city-icon">11</span><span class="city-name">Uster</span>
            </div>
            <div class="city-box">
                <span class="city-icon">12</span><span class="city-name">Zug</span>
            </div>
            <div class="city-box">
                <span class="city-icon">13</span><span class="city-name">Zürich</span>
            </div>
            <div class="city-box">
                <span class="city-icon">14</span><span class="city-name">Winterthur</span>
            </div>
            <div class="city-box">
                <span class="city-icon">15</span><span class="city-name">Geneva</span>
            </div>
            <div class="city-box">
                <span class="city-icon">16</span><span class="city-name">Adliswil</span>
            </div>
            <div class="city-box">
                <span class="city-icon">17</span><span class="city-name">Lassen</span>
            </div>
        </div>
    </section>

    <!-- Why choose zuericlean -->
    <section class="why-choose-zuericlean">
        <h3>
            Why Choose <span class="txt-background-color">Züriclean </span>
            <br />
            We Leave No Detail Overlooked
        </h3>
        <p class="para">
            At Züriclean, we’re committed to going above and beyond for every
            client, ensuring every project is completed to perfection. Whether it’s
            a End-of-Tenancy Cleaning or Regular Cleaning for your home, office
            cleaning services, or a commercial space, we focus on the details that
            matter most. Here’s what makes us stand out
        </p>
        <div class="why-choose-card-section">
            <div class="card-section">
                <span class="card-icon">
                    <img src="{{ asset('front/assets/Images/thumb.png') }}" alt="" />
                </span>
                <h4 class="txt-background-color">Impeccable Attention to Detail</h4>
                <p>
                    Every stain, smudge, or speck of dust is treated with care. We aim
                    for perfection, leaving your spaces immaculate.
                </p>
            </div>
            <div class="card-section card-center">
                <span class="card-icon">
                    <img src="{{ asset('front/assets/Images/meter.png') }}" alt="" />
                </span>
                <h4>Prompt and Efficient Services</h4>
                <p>
                    Time is valuable, and we respect yours. Our team is known for
                    punctuality and completing every job on time without compromising
                    quality.
                </p>
            </div>
            <div class="card-section">
                <span class="card-icon">
                    <img src="{{ asset('front/assets/Images/medal.png') }}" alt="" />
                </span>
                <h4 class="txt-background-color">Affordable Excellence</h4>
                <p>
                    We deliver high-quality services at competitive rates, ensuring
                    value for money without cutting corners.
                </p>
            </div>
        </div>
    </section>

    <!-- Lower sofa cleaning -->
    <section class="lower-sofa-cleaning">
        <div class="lower-sofa-cleaning-services-left">
            <h3>
                Trusted
                <span class="txt-background-color"> Sofa Cleaner </span> Company
            </h3>
            <p>
                Züriclean is a trusted "sofa cleaner company near me" and a reputable
                "sofa cleaner company" known for its quality workmanship and attention
                to detail. We understand the importance of a clean and healthy home
                environment, and our skilled technicians are equipped to handle even
                the most challenging cleaning tasks.
            </p>

            <div class="btn-wrapper">
                <a href="#" class="btn btn-background-color btn-center">Book Your Sofa Cleaning Now!</a>
            </div>
        </div>

        <div class="lower-sofa-cleaning-services-right">
            <img src="{{ asset('front/assets/Images/lower_sofa_cleaning.png') }}" class="img-fluid"
                alt="Sofa Cleaning" />
        </div>
    </section>


    <!-- Terrace Cleaner -->
    <section class="terrace-cleaner">
        <div class="terrace-cleaner-left">
            <img src="{{ asset('front/assets/Images/terrace_cleaner.png') }}" alt="..." />
        </div>
        <div class="terrace-cleaner-right">
            <h3>
                Reliable<span class="txt-background-color"> Terrace Cleaner </span>
                Company
            </h3>
            <p>
                We offer a range of sofa cleaning and touch-up services to ensure your
                sofa is in top condition. From deep-cleaning carpets and windows to
                eliminating even the toughest stains, our experienced team ensures a
                spotless sofa that meets or exceeds the required cleanliness
                standards.
            </p>
            <button class="btn-background-color">
                <a href="#">Book Sofa Cleaning Now! </a>
            </button>
        </div>
    </section>

    <!-- Customer satisfaction -->
    <section class="customer-satisfaction">
        <div class="customer-satisfaction-left-section">
            <h3>
                Our Commitment to
                <span class="txt-background-color"> Customer Satisfaction</span>
            </h3>
            <p>
                At Züriclean, your satisfaction is our priority. Our team uses
                eco-friendly cleaning products and cutting-edge equipment to ensure
                your space is not only clean but also safe and healthy for everyone.
            </p>
            <p>
                We take pride in delivering outstanding End-of-tenancy
                Cleaning service every time, with the goal of exceeding your
                expectations. By blending professionalism with a personal touch, we’ve
                built a reputation as Zürich’s go-to cleaning service for homeowners
                and businesses alike.
            </p>
            <p>
                Looking for reliable, efficient, and professional home or office
                cleaning services in Zürich? Let us make your space shine! Contact us
                today to schedule your cleaning service.
            </p>
        </div>
        <div class="customer-satisfaction-right-section">
            <img src="{{ asset('front/assets/Images/customer_satisfaction.png') }}" alt="" />
        </div>
    </section>


    <!-- Why work with us -->
    <section class="why-work-with-us">
        <h3>Why Work <span class="txt-background-color"> With Us?</span></h3>
        <p>
            When you choose Züriclean, you’re choosing a partner who values quality,
            trust, and your time.
        </p>
        <!-- Card section -->
        <div class="why-work-with-us-card-section">
            <div class="cards">
                <div class="heading-icon">
                    <span class="card-icon"><img src="{{ asset('front/assets/Icons/person.png') }}"
                            alt="" /></span>
                    <h4>Experienced Professionals</h4>
                </div>
                <p>
                    Years of expertise mean we know how to tackle any cleaning challenge
                    with ease.
                </p>
            </div>

            <div class="cards">
                <div class="heading-icon">
                    <span class="card-icon"><img src="{{ asset('front/assets/Icons/clock.png') }}"
                            alt="" /></span>
                    <h4>Flexible Scheduling</h4>
                </div>
                <p>Busy schedule? We’ll work around it!</p>
            </div>

            <div class="cards">
                <div class="heading-icon">
                    <span class="card-icon"><img src="{{ asset('front/assets/Icons/leaf.png') }}"
                            alt="" /></span>
                    <h4>Eco-Conscious Cleaning</h4>
                </div>
                <p>
                    We use safe, sustainable products that prioritize your health and
                    the environment.
                </p>
            </div>

            <div class="cards">
                <div class="heading-icon">
                    <span class="card-icon"><img src="{{ asset('front/assets/Icons/mechanics.png') }}"
                            alt="" /></span>
                    <h4>Tailored Solutions</h4>
                </div>
                <p>We customize our services to meet your unique needs.</p>
            </div>
        </div>

        <h3>
            Ready to Transform Your Space?
            <span class="txt-background-color"> Contact Us </span> Today!
        </h3>
        <p>
            Don’t wait to experience the benefits of a cleaner, healthier
            environment. Whether it’s End-of-Tenancy Cleaning, or Sofa Cleaning
            service, Züriclean is here to help. <br />
            Let us take the stress out of cleaning so you can enjoy the results.
            <br />
            Call or email us today for a personalized quote and discover why we’re
            Zürich’s trusted name in cleaning services.
        </p>
    </section>


    <!-- FAQs -->
    <section class="faqs-section">
        <h3>
            <span class="txt-background-color"> Frequently Asked Questions </span>
            for Züriclean
        </h3>
        <p>Most frequently asked questions from Züriclean</p>

        <div class="accordion accordion-flush w-100 accordion-section" id="accordionFlushExample">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Do you provide a guarantee for move-out cleaning services?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Yes! Our end-of-tenancy Cleaning ensures your space is ready for
                        inspection and meets all required standards.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Are your cleaning services eco-friendly?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Absolutely! We use eco-conscious cleaning products to prioritize
                        your health and the environment.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Can I schedule recurring cleaning appointments?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Yes, we offer flexible scheduling for regular cleanings, including
                        weekly, bi-weekly, and monthly options.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        How much does end of tenancy cleaning cost in Zürich?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        In Zurich, move-out cleaning typically range between CHF 430 and
                        CHF 1,550, depending on factors like property size, condition, and
                        additional services required
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        What’s included in deep cleaning services?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Deep cleaning covers areas not typically cleaned during regular
                        sessions, including behind furniture, appliances, and high-touch
                        surfaces.
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        How do I get a quote?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Contact us by phone or email to discuss your needs and receive a
                        tailored, no-obligation quote.
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        What cleaning areas do you cover in Zürich?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        We serve Zürich, Zug, and surrounding areas with a full range of
                        cleaning services.
                    </div>
                </div>
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
