@extends('webtemp')

@include('links.css')
@section('title', 'About Us')

@section('styles')
    @yield('about-us-styles')
@endsection


@section('main_section')

    {{-- @include('partials.navone') --}}
    @include('partials.commonNav')

    <!-- Blogs details page hero section -->
    <section class="blogs-details-page-hero-section">
        <h6 class="navigation-text">Home > About Us</h6>
        <h1>The Team of <span class="txt-background-color bg-white">Professionals</span></h1>
    </section>

    <!-- About us page -->
    <section class="about-us-page-section">
        <div class="about-us-page-left-section">
            <img src="{{ asset('front/assets/Images/about-images/about-section.jpg') }}" alt="">
        </div>
        <div class="about-us-page-right-section">
            <div class="about-us-page-right-section-content">
                <h2 class="txt-background-color">About Us</h2>
                <p>At Züriclean we are dedicated to reliability, punctually, and affordable quality service.
                    Our cleaning
                    team is professional, hard working and friendly.  Please take the time to browse through our site,
                    to
                    read about our services and to check our references. If you have any questions please do not
                    hesitate to
                    contact us. We look forward to hearing from you.</p>
                <br>
                <p>Let our staff customise a cleaning service programme to suit your individual needs and your budget.
                    Whether you require a regular service (daily, weekly or monthly) or just a one-off service, you can
                    count on Züriclean for a cleaning service at excellent rates.</p>
                <br>
                <p>In addition, Züriclean believes that the products we use really matter. All the products we use are
                    natural and non-toxic, which makes them healthier for your home and safer for the local London
                    environment. Our staff personally research all our house cleaning products to ensure they are
                    non-toxic,
                    biodegradable and not tested on animals.</p>
                <h2 class="txt-background-color">Our Guarantee</h2>
                <p>Our seasoned professional cleaners know how to satisfy our customers’ highest expectations. To
                    guarantee the highest level of cleaning services, we utilize quality control programmes, including
                    on-site inspections and customer surveys.</p>
                <p>Just take a look at our client testimonials and happy business clients.</p>
                <p>We constantly monitor our work, and should any area fail to meet our strict home cleaning standards
                    it will be corrected immediately. And of course we always encourage customer communication and value
                    your input to perfect our quality of service.</p>
                <h2 class="txt-background-color">How To Contact Us</h2>
                <p>Give us a call on <span class="txt-background-color fw-bold">+41764136183</span> now to find out more
                    about our professional cleaning services in
                    London, or use our online service request form. Call today for a free quote or to book a service
                    immediately with one of our teams.</p>
                <div class="btn-background-color"><a href="#">Book Your Sofa Cleaning Now!</a></div>
            </div>

        </div>
    </section>

@endsection
