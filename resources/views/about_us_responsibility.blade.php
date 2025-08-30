@extends('webtemp')

@include('links.css')
@section('title', 'About Us Responsibility')

@section('styles')
    @yield('responsibility-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')


    <!-- About us resposibility page hero section -->
    <section class="about-us-responsibility-page-hero-section">
        <h6 class="navigation-text">Home > About Us > Social Responsability</h6>
        <h1>Züriclean Allocates <span class="txt-background-color bg-white">3% of Revenue</span> for Social and
            Humanitarian
        </h1>
    </section>

    <!-- About us resposibility page -->
    <section class="about-us-responsibility-page-section">
        <div class="about-us-responsibility-page-right-section">
            <div class="about-us-responsibility-page-right-section-content">
                <p>T3% of our Züriclean revenue is used for social projects. This is our contribution to a better world!
                    <br><br>
                    To guarantee the correctness of these statements, we hold the amount collected and the ongoing
                    relief projects up-to-date. The projects are reviewed and monitored by Regina Wittwer. Private
                    donations are gratefully accepted.
                </p>
                <h2>Current Projects</h2>
                <p>Every year on December 24, Züriclean organizes a Christmas dinner for people who are alone and lonely
                    in Zürich. We publish an ad in the newspaper inviting lonely people regardless of age, nationality
                    or persuasion to a Christmas dinner - free of charge of course! We held our 5th Christmas
                    dinner this year!  It's always exciting to meet all the different people, many of whom have already
                    formed lasting friendships because of these special Christmas dinners.</p>
                <p>The first Christmas Dinner was held on a very small scale on 24 December 2003 with just five people. 
                    By 2004, there were already 24 guests. The demand kept growing and growing beyond the space and our
                    financial capacities. Therefore, guests who have met and made friends at these events are
                    encouraged, this year to organize such an event between themselves. We hope that thanks to the
                    "snowball effect" that has been created by our dinners, that there will soon be no more lonely
                    people at Christmastime in Zürich.</p>
                <p>This year Züriclean will fund and organize our Christmas dinner once again. If you would like to
                    learn more about this project, please feel free to contact us or check back in-between on our News
                    page, where we will keep you informed as to our progress with regular updates.</p>

                <h2>Project ideas for the future</h2>
                <br>
                <div class="our-services-boxes">
                    <div class="our-services-boxe">
                        <div class="number-circle">1</i></div>
                        <p>People with disabilities are an important part of society. Therefore, let's hold a free party
                            for people with disabilities. We can provide good entertainment and a great atmosphere. The
                            event will be held each June.</p>
                    </div>
                    <div class="our-services-boxe">
                        <div class="number-circle">2</i></div>
                        <p>Computer school for underprivileged children in Pakistan.</p>
                    </div>
                    <div class="our-services-boxe">
                        <div class="number-circle">3</i></div>
                        <p>Wheelchairs for people with disabilities in Pakistan.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="about-us-page-responsibility-left-section">
            <div class="about-us-page-responsibility-left-section-images">
                <img src="{{asset('front/assets/Images/about-images/responsibility1.jpg')}}" alt="">
                <img src="{{asset('front/assets/Images/about-images/responsibility2.jpg')}}" alt="">
                <img src="{{asset('front/assets/Images/about-images/responsibility3.jpg')}}" alt="">
            </div>
        </div>
    </section>


@endsection