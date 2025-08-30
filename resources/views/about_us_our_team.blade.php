@extends('webtemp')

@include('links.css')
@section('title', 'About Us Our Team')

@section('styles')
    @yield('our-team-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')


    <!-- About us our team page hero section -->
    <section class="about-us-our-team-page-hero-section">
        <h6 class="navigation-text">Home > About Us > Our Team</h6>
        <h1>Meet The <span class="txt-background-color bg-white">Renowned Management</span> of Züriclean - The
            specialists
        </h1>
    </section>

    <!-- About Us Main Section Container -->
    <section class="about-us-our-team-page-main-section">

        <!-- Left Box: Intizar Ahmed -->
        <div class="team-box box-1">
            <h3><a href="#" class="txt-background-color">Intizar Ahmed</a></h3>
            <p class="role">Social Responsibility</p>
            <p>As the Director of Züriclean, Intizar Ahmed brings a wealth of knowledge and a pioneering approach to
                cleaning with his expertise in nano technology. A specialist in surface sealing, Intizar has played a
                key role in integrating cutting-edge nano solutions into our <a href="#" class="txt-background-color">cleaning services</a>. His
                innovative mindset helps us provide long-lasting protection and advanced cleaning solutions, ensuring
                that surfaces remain cleaner for longer, which is especially beneficial for clients needing professional
                <a href="#" class="txt-background-color">handover cleaning</a>.</p>
        </div>

        <!-- Center Box: Our Team -->
        <div class="team-box center-box">
            <p>At Züriclean, our success is driven by the expertise and dedication of our exceptional team. Led by our
                management specialists, we ensure that every cleaning job meets the highest standards of quality and
                customer satisfaction.</p>
            <h3> <span class="txt-background-color">Our Team</span></h3>
            <p>Full team bios and photos coming soon. Stay tuned for more information about the passionate professionals
                behind Züriclean’s success!</p>
        </div>

        <!-- Right Box: Regina Witwer -->
        <div class="team-box box-3">
            <h3><span class="txt-background-color">Regina Witwer</span></h3>
            <p class="role">Social Responsibility</p>
            <p>Regina Witwer is responsible for ensuring that Züriclean operates with a strong focus on social
                responsibility. She helps guide our efforts in eco-friendly cleaning practices, making sure that our
                services not only meet the highest standards of quality but also have a positive impact on the
                environment and the communities we serve. Whether for cleaning in Zürich or across broader areas,
                Regina’s leadership ensures that sustainability remains at the forefront of our operations.</p>
        </div>

    </section>



    <!-- Map  -->
    <!-- contact-map -->
    <div id="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.8721136379696!2d8.536646915568443!3d47.397019779169654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900b75045081b3%3A0x18c50f1e6f0a6c3b!2sSchaffhauserstrasse%20380%2C%208050%20Z%C3%BCrich%2C%20Switzerland!5e0!3m2!1sen!2s!4v1632448665873!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->

    @endsection