@extends('webtemp')

@section('title', 'Office Shop Cleaning')

@include('links.css')
@section('styles')
    @yield('office-shop-cleaning-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')


    <!-- Office Shop Cleaning Page Hero section -->
    <section class="hero-section">
        <div class="hero-overlay">
            <img src="{{ asset('front/assets/Images/office-images/curve.png') }}" alt="">

            <div class="hero-content">
                <p class="navigation-text">Home > Office / Shop Cleaning</p>
                <h1>
                    <span>Office Cleaning</span> in Zürich<br />
                    – Reliable, Professional & Flexible
                </h1>
                <a href="#" class="hero-button">Get Quote Now</a>
            </div>

        </div>
    </section>

    <section class="office-shop-page-main-section">

        <div class="uper-para">
            <p>Looking for a professional office cleaning service in Zürich? At ZüriClean, we understand that a clean
                workplace isn’t just about appearances—it’s about creating a healthy, productive, and welcoming
                environment for employees, clients, and guests. We offer tailored office cleaning solutions to suit
                businesses of all sizes across Zürich and surrounding areas.</p>
            <div><button class="btn-background-color">Get Quote Now</button></div>
        </div>

        <div class="img-with-text-container-1">
            <div class="image">
                <img src="{{ asset('front/assets/Images/office-images/office-1.jpg') }}"  alt="">
            </div>
            <div class="text">
                <h2>Why Choose <span class="txt-background-color">ZüriClean</span> for Your Office Cleaning?</h2>
                <p>Whether you manage a small startup or a large corporate space, our team delivers consistent and
                    top-quality cleaning, including:</p>
                <div class="our-services-boxes">
                    <div class="our-services-box">
                        <div class="number-circle">1</i></div>
                        <p>DFlexible scheduling (daily, weekly, or custom frequency)</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">2</i></div>
                        <p>Professionally trained and vetted staff</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">3</i></div>
                        <p>Eco-friendly cleaning products</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">4</i></div>
                        <p>Fully insured and reliable cleaners</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">5</i></div>
                        <p>Transparent pricing with no hidden costs</p>
                    </div>
                </div>
                <p>We clean <span class="fw-bold"> offices, co-working spaces, clinics, showrooms, agencies,</span> and
                    more across Zürich..</p>
            </div>
        </div>
        <div class="img-with-text-container-1 flex-row-reverse">
            <div class="image">
                <img src="{{ asset('front/assets/Images/office-images/office-2.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2>Why Choose <span class="txt-background-color">ZüriClean</span> for Your Office Cleaning?</h2>
                <p>Whether you manage a small startup or a large corporate space, our team delivers consistent and
                    top-quality cleaning, including:</p>
                <div class="our-services-boxes">
                    <div class="our-services-box">
                        <div class="number-circle">1</i></div>
                        <p>DFlexible scheduling (daily, weekly, or custom frequency)</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">2</i></div>
                        <p>Professionally trained and vetted staff</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">3</i></div>
                        <p>Eco-friendly cleaning products</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">4</i></div>
                        <p>Fully insured and reliable cleaners</p>
                    </div>
                    <div class="our-services-box">
                        <div class="number-circle">5</i></div>
                        <p>Transparent pricing with no hidden costs</p>
                    </div>
                </div>
                <p>We clean <span class="fw-bold"> offices, co-working spaces, clinics, showrooms, agencies,</span> and
                    more across Zürich..</p>
            </div>
        </div>
        <div class="img-with-text-container-1 last-container">
            <div class="image">
                <img src="{{asset('front/assets/Images/office-images/office-3.jpg')}}" alt="">
            </div>
            <div class="text">
                <h2>Office Cleaning for All Areas of <span class="txt-background-color">Zürich</span></h2>
                <p>From Zürich City Center to Oerlikon, Altstetten, Seefeld, and beyond, our teams are always nearby.
                    We’re trusted by businesses across a wide range of industries for consistent, dependable cleaning.
                </p>

            </div>
        </div>
        <div class="lower-para">
            <h2> <span class="txt-background-color">Book a Quote </span> – Clean Workspace, Clear Mind</h2>
            <p>Looking for a professional office cleaning service in Zürich? At ZüriClean, we understand that a clean
                workplace isn’t just about appearances—it’s about creating a healthy, productive, and welcoming
                environment for employees, clients, and guests. We offer tailored office cleaning solutions to suit
                businesses of all sizes across Zürich and surrounding areas.</p>
            <div class="d-flex justify-content-center"><button class="btn-background-color">Get Quote Now</button></div>
        </div>
            <p>📝 Fill out our form above or contact us directly to get a custom quote.</p>


    </section>


@endsection