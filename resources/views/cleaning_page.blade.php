@extends('webtemp')
@include('links.css')

@section('title', 'Cleaning Page')

@section('styles')
    @yield('cleaning-page-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')

    <!--Cleaning Page Hero section -->
    <section class="cleaning-page-hero-section reversed">
        <div class="hero-overlay">
            <img src="{{ asset('front/assets/Images/office-images/curve.png')}}" alt="">

            <div class="hero-content">
                <p class="navigation-text">Home > Our Services > Mattress Cleaning Service</p>
                <h1>
                    Welcome to <span>Mattress Cleaning</span>
                    Zürich
                </h1>
                <a href="#" class="hero-button">Get Quote Now</a>
            </div>

        </div>
    </section>


    <!-- Cleaning page content section -->
    <section class="cleaning-page-section">
        <div class="cleaning-page-section-left-section">
            <div class="cleaning-page-section-left-section-content">
                <p>Your trusted partner for professional mattress cleaning services in Zürich. Regular mattress
                    cleaning is essential for maintaining a healthy sleep environment. Over time, mattresses accumulate
                    dust mites, allergens, and bacteria, which can trigger allergies, asthma, and respiratory issues. By
                    removing these contaminants through professional cleaning, you not only ensure a cleaner sleeping
                    surface but also promote better air quality and reduce the risk of health problems. Clean mattresses
                    also contribute to a more restful sleep, allowing you to wake up refreshed and rejuvenated each
                    morning. Invest in mattress cleaning to safeguard your health and enhance your overall well-being.

                </p>
                <div class="btn-background-color">Get a Quote</div>
                <div class="cleaning-page-img">
                    <img src="{{asset('front/assets/Images/blogs-details.png')}}" alt="">
                </div>
                <h3>Why Choose ZüriClean for Your Office Cleaning?</h3>
                <p>Whether you manage a small startup or a large corporate space, our team delivers consistent and
                    top-quality cleaning, including:</p>

                <div class="cleaning-page-handover-icon">
                    <div class="icon-block">
                        <div class="icon-circle">
                            1
                        </div>
                        <p class="icon-block">DFlexible scheduling (daily, weekly, or custom frequency)</p>
                    </div>
                    <div class="icon-block">
                        <div class="icon-circle">
                            2
                        </div>
                        <p class="icon-block">Professionally trained and vetted staff</p>
                    </div>
                    <div class="icon-block">
                        <div class="icon-circle">
                            3
                        </div>
                        <p class="icon-block">Eco-friendly cleaning products</p>
                    </div>
                    <div class="icon-block">
                        <div class="icon-circle">
                            4
                        </div>
                        <p class="icon-block">Eco-friendly cleaning products</p>
                    </div>
                    <div class="icon-block">
                        <div class="icon-circle">
                            5
                        </div>
                        <p class="icon-block">Eco-friendly cleaning products</p>
                    </div>
                </div>
                <div class="btn-background-color">Book Now!</div>

            </div>
        </div>
        <div class="cleaning-page-section-right-section">
            <!-- sidebar popular services-->
            <div class="cleaning-page-section-right-section-sidebar">
                <h3 class="txt-background-color">Popular Services</h3>
                <div class="sidebar-card">
                    <ul>
                        <li class="txt-background-color"><a href="#">Office Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Move-out Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Mattress Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
                        <li class="txt-background-color"><a href="#">Carpet Cleaning</a></li>
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

@endsection