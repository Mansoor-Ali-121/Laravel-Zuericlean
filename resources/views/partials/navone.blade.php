  <!-- Header Section -->
    <div class="container header-section">
        <div class="row">
            <div class="col text-center mb-4">
                <img src="{{ asset('front/assets/Images/logo.png') }}" alt="ZürClean Logo" class="img-fluid"
                    style="max-height: 80px" />
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Phone -->
            <div class="col-md-auto mb-3 d-flex align-items-center justify-content-center">
                <div class="contact-info">
                    <div class="contact-icon-container">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <span class="contact-text">+41 26 473 6082</span>
                </div>
            </div>
            <!-- Email -->
            <div class="col-md-auto mb-3 d-flex align-items-center justify-content-center">
                <div class="contact-info">
                    <div class="contact-icon-container">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span class="contact-text">info@zuericlean.com</span>
                </div>
            </div>
            <!-- Address -->
            <div class="col-md-auto mb-3 d-flex align-items-center justify-content-center">
                <div class="contact-info">
                    <div class="contact-icon-container">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <span class="contact-text">Schaffhauserstrasse 380, 8050 Zürich</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar visible-->
    <nav class="navbar navbar-expand-lg navbar-custom px-4 py-3">
        <div class="container-fluid">
            <!-- Mobile Top Bar (hamburger + logo + language) -->
            <div class="d-flex justify-content-between align-items-center w-100 d-lg-none">
                <!-- Hamburger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: white">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Mobile Logo -->
                <a class="navbar-brand mx-auto" href="#">
                    <img src="{{asset('front/assets/Images/White_logo.png')}}" alt="Züri Clean" class="mobile-logo" style="height: 50px" />
                </a>

                <!-- Language Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button"
                        id="languageDropdownMobile" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://flagcdn.com/ch.svg" alt="Swiss Flag" class="flag-icon me-2" />
                        Ch
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdownMobile">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/gb.svg" alt="English"
                                    class="flag-icon me-2" />English</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/fr.svg" alt="French"
                                    class="flag-icon me-2" />Français</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/de.svg" alt="German"
                                    class="flag-icon me-2" />Deutsch</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Full Navbar Collapse Section -->
            <div class="collapse navbar-collapse justify-content-between mt-2 mt-lg-0" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Home (No Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('website') }}">Home</a>
                    </li>

                    <!-- About (Dropdown)  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about.us') }}">About Us</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Sub Services -->
                            <li><a class="dropdown-item" href="{{route('about.us.storyline')}}">Our Story Line</a></li>
                            <li><a class="dropdown-item" href="{{route('philosophy')}}">Philiosophy</a></li>
                            <li><a class="dropdown-item" href="./about_us_responsibility.html">Social
                                    Responsibility</a></li>
                            <li><a class="dropdown-item" href="./about_imprint.html">Imprint</a></li>
                            <li><a class="dropdown-item" href="./about_us_our_team.html">Our Team</a></li>
                        </ul>
                    </li>


                    <!-- Locations (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Locations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dubai</a></li>
                            <li><a class="dropdown-item" href="#">Abu Dhabi</a></li>
                        </ul>
                    </li>

                    <!-- Cleaning Services (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cleaning Services
                        </a>
                        <ul class="dropdown-menu">
                            <!-- All Services -->
                            <li><a class="dropdown-item" href="./services.html">All Services</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Sub Services -->
                            <li><a class="dropdown-item" href="#">Residential Cleaning</a></li>
                            <li><a class="dropdown-item" href="#">Office Cleaning</a></li>
                        </ul>
                    </li>


                    <!-- Cleaning Handover Guarantee (Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./cleaning_handover.html">Cleaning Handover Guarantee</a>
                    </li>

                    <!-- Contact (Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="./contact.html">Contact Us</a>
                    </li>

                </ul>

                <!-- Right Side: Language & Button (Desktop) -->
                <div class="d-none d-lg-flex align-items-center gap-3 navbar-right">
                    <!-- Language Dropdown -->
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button"
                            id="languageDropdownDesktop" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://flagcdn.com/ch.svg" alt="Swiss Flag" class="flag-icon me-2" />
                            Ch
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdownDesktop">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/gb.svg" alt="English"
                                        class="flag-icon me-2" />English</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/fr.svg" alt="French"
                                        class="flag-icon me-2" />Français</a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/de.svg" alt="German"
                                        class="flag-icon me-2" />Deutsch</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Estimate Button -->
                    <button class="btn btn-estimate px-3 py-2 rounded">
                        Get a Free Estimate
                    </button>
                </div>
            </div>
        </div>
    </nav>  

     <!-- White Navbar -->
    <nav class="navbar navbar-expand-lg navbar-white px-4 py-3 shadow-sm fixed-top white-navbar" id="navbar-white"
        style="display: none;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand white-navbar-logo" href="#">
                <img src="{{ asset('front/assets/Images/logo.png') }}" alt="Züri Clean" style="height: 50px" />
            </a>
            <!-- Mobile Header -->
            <div class="d-flex justify-content-between align-items-center w-100 d-lg-none">
                <!-- Hamburger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarWhiteCollapse">
                    <span class="navbar-toggler-icon-white"></span>
                </button>

                <!-- Mobile Logo -->
                <a class="navbar-brand mx-auto" href="#">
                    <img src="{{ asset('front/assets/Images/logo.png') }}" alt="Züri Clean" style="height: 50px;" />
                </a>

                <!-- Language Dropdown -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center" type="button"
                        data-bs-toggle="dropdown">
                        <img src="https://flagcdn.com/ch.svg" class="flag-icon me-2" /> Ch
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/gb.svg" class="flag-icon me-2" />English</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/fr.svg" class="flag-icon me-2" />Français</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                    src="https://flagcdn.com/de.svg" class="flag-icon me-2" />Deutsch</a></li>
                    </ul>
                </div>
            </div>

            <!-- Desktop Navbar -->
            <div class="collapse navbar-collapse justify-content-between mt-2 mt-lg-0" id="navbarWhiteCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Home (No Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('website') }}">Home</a>
                    </li>

                    <!-- About (Dropdown)  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about.us') }}">About Us</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Sub Services -->
                            <li><a class="dropdown-item" href="{{route('about.us.storyline')}}">Our Story Line</a></li>
                            <li><a class="dropdown-item" href="{{route('philosophy')}}">Philiosophy</a></li>
                            <li><a class="dropdown-item" href="./about_us_responsibility.html">Social
                                    Responsibility</a></li>
                            <li><a class="dropdown-item" href="./about_imprint.html">Imprint</a></li>
                            <li><a class="dropdown-item" href="./about_us_our_team.html">Our Team</a></li>
                        </ul>
                    </li>


                    <!-- Locations (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Locations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dubai</a></li>
                            <li><a class="dropdown-item" href="#">Abu Dhabi</a></li>
                        </ul>
                    </li>

                    <!-- Cleaning Services (Dropdown) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-white text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cleaning Services
                        </a>
                        <ul class="dropdown-menu">
                            <!-- All Services -->
                            <li><a class="dropdown-item" href="./services.html">All Services</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- Sub Services -->
                            <li><a class="dropdown-item" href="#">Residential Cleaning</a></li>
                            <li><a class="dropdown-item" href="#">Office Cleaning</a></li>
                        </ul>
                    </li>


                    <!-- Cleaning Handover Guarantee (Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="./cleaning_handover.html">Cleaning Handover Guarantee</a>
                    </li>

                    <!-- Contact (Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="./contact.html">Contact Us</a>
                    </li>

                </ul>


                <!-- Right Section -->
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button
                            class="btn dropdown-toggle d-flex align-items-center white-language-icon  white-navbar-dropdown"
                            type="button" data-bs-toggle="dropdown">
                            <img src="https://flagcdn.com/ch.svg" class="flag-icon me-2" /> Ch
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/gb.svg" class="flag-icon me-2" />English</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/fr.svg" class="flag-icon me-2" />Français</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="https://flagcdn.com/de.svg" class="flag-icon me-2" />Deutsch</a></li>
                        </ul>
                    </div>

                    <a href="#" class="btn btn-white-estimate px-3 py-2">Get a Free Estimate</a>
                </div>
            </div>
        </div>
    </nav>