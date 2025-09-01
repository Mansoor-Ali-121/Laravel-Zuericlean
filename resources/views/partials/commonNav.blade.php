<!-- Custom White Navbar -->
<nav class="navbar navbar-expand-lg px-4 py-3 shadow-sm custom-white-navbar">
    <div class="container-fluid">

        <!-- Left: Logo -->
        <a class="navbar-brand custom-navbar-logo" href="{{ route('website') }}">
            <img src="{{ asset('front/assets/Images/logo.png') }}" alt="Züri Clean" style="height: 50px" />
        </a>

        <!-- Hamburger (for mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#customNavbarCollapse"
            aria-controls="customNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="custom-toggler-icon"></span>
        </button>

        <!-- Center: Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="customNavbarCollapse">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('website') }}">Home</a>
                </li>

                <!-- About -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-white custom-link" href="{{ route('about.us') }}" role="button">
                        About
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about.us.storyline') }}">Our Story Line</a></li>
                        <li><a class="dropdown-item" href="{{ route('philosophy') }}">Philosophy</a></li>
                        <li><a class="dropdown-item" href="{{ route('responsibility') }}">Social Responsibility</a></li>
                        <li><a class="dropdown-item" href="{{ route('imprint') }}">Imprint</a></li>
                        <li><a class="dropdown-item" href="{{ route('our.team') }}">Our Team</a></li>
                    </ul>
                </li>

                <!-- Locations -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-white custom-link" href="{{ route('city.services') }}" role="button">
                        Locations
                    </a>
                </li>

                <!-- Cleaning Services -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-white custom-link" href="{{ route('cleaning.services') }}" role="button">
                        Cleaning Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('all.services') }}">All Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('cleaning.page') }}">Cleaning Page</a></li>
                        <li><a class="dropdown-item" href="{{ route('office.shop') }}">Office Cleaning</a></li>
                    </ul>
                </li>

                <!-- Blogs -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle-white custom-link" href="{{ route('blogs') }}" role="button">
                        Blogs
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('blogs.details') }}">Blogs Details</a></li>
                    </ul>
                </li>

                <!-- Cleaning Handover -->
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('cleaning.handover') }}">Cleaning Handover Guarantee</a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('contact.us') }}">Contact Us</a>
                </li>
            </ul>

            <!-- Right: Language Switcher & Estimate Button -->
            <div class="d-none d-lg-flex align-items-center gap-3 ms-auto">
                <!-- Language Switch -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center white-language-icon white-navbar-dropdown"
                        type="button" data-bs-toggle="dropdown">
                        <img src="https://flagcdn.com/ch.svg" class="flag-icon me-2" /> Ch
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img src="https://flagcdn.com/gb.svg"
                                    class="flag-icon me-2" />English</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img src="https://flagcdn.com/fr.svg"
                                    class="flag-icon me-2" />Français</a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img src="https://flagcdn.com/de.svg"
                                    class="flag-icon me-2" />Deutsch</a></li>
                    </ul>
                </div>

                <!-- Estimate Button -->
                <a href="{{ route('booking') }}" class="btn btn-white-estimate px-3 py-2">Get a Free Estimate</a>
            </div>
        </div>
    </div>
</nav>
