@extends('webtemp')

@include('links.css')
@section('title', 'About Us Philosophy')

@section('styles')
    @yield('philosophy-styles')
@endsection

@section('main_section')

@include('partials.commonNav')



    <!-- About us philosophy page hero section -->
    <section class="about-us-philosophy-page-hero-section">
        <h6 class="navigation-text">Home > About Us > Philosophy</h6>
        <h1>Züriclean Brings <span class="txt-background-color bg-white">Eco Friendly Cleaning</span> To Boost Social
            Impact
        </h1>
    </section>

    <!-- About us philosophy page -->
    <section class="about-us-philosophy-page-section">
        <div class="about-us-page-philosophy-left-section">
            <img src="{{asset('front/assets/Images/about-images/about-philosophy.jpg')}}" alt="">
        </div>
        <div class="about-us-philosophy-page-right-section">
            <div class="about-us-philosophy-page-right-section-content">
                <h2>Züriclean is a company committed to respecting the environment and our fellow man.</h2>
                <br>
                <div class="our-services-boxes">
                    <div class="our-services-boxe">
                        <div class="number-circle">1</i></div>
                        <p>We use only environmentally-friendly cleaning agents, paying special attention to
                            environmental compatibility and biodegradability.</p>
                    </div>
                    <div class="our-services-boxe">
                        <div class="number-circle">2</i></div>
                        <p>3% of our income flows into social projects – Bringing light into the darkness of egoism and
                            materialism is a core company value.</p>
                    </div>
                    <div class="our-services-boxe">
                        <p>These two factors, combined with a high commitment to providing value and quality service to
                            our customers are the basis of our company’s long-term success.</p>
                    </div>
                </div>
                <div class="about-us-philosophy-page-right-section-quote-wrapper">
                    <div class="about-us-philosophy-page-right-section-quote">
                        <p>“Shoot for the moon. Even if you miss, you'll land among the stars.”<br><strong class="txt-background-color">Les
                                Brown</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection