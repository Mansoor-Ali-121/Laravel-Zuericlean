@extends('webtemp')

@include('links.css')
@section('title', 'About Us Storyline')

@section('styles')
    @yield('storyline-styles')
@endsection

@section('main_section')

@include('partials.commonNav')

<!-- About us storyline page hero section -->
<section class="about-us-storyline-page-hero-section">
    <h6 class="navigation-text">Home > About Us > Storyline</h6>
    <h1> Storyline </h1>
</section>

<!-- Storyline Section -->
<section class="about-us-page-storyline-section">
    <h2><span class="txt-background-color">Story Line-</span> Züriclean</h2>
    <div class="about-us-storyline-para-with-image">
        <div class="about-us-storyline-img">
            <img src="{{asset('front/assets/Images/about-images/storyline-section.png')}}" alt="">
        </div>
        <div class="about-us-storyline-para">

            <p>This is me Intizar Ahmed, I got settled in Zürich. I was in love with my old apartment. It was a cozy
                little comfy place surrounded by the ecstatic ambiance of trees and mountains. It was a sanctuary
                that I
                never wanted to leave. But Alas! This life and its phases! It threw a curveball at me, and I got a
                new
                job opportunity. That knock presented itself in such a way that I found myself packing up my life
                and
                eager for a fresh start.</p>
            <p>The excitement of transfer was palpable. I started envisioning myself getting settled into a new
                home. I
                was fantasizing about embracing the change while exploring the new city, new people, and a new
                landlord.
                In the midst of all the excitement and whirlwind packing, I was so lost that I totally forgot to
                schedule a move-out cleaning service.</p>
            <p>The whole elation went in vain when I did not receive my security deposit back. My landlord deducted
                a
                significant amount, citing the apartment’s Cleaning condition. The apartment though looked neat and
                clean, but the enhancement in cleaning was still missing. I was really shocked and disappointed. I
                not
                only lost money but also felt a pang of embarrassment. My apartment looked neat and clean always,
                what
                was the lack? Was I careless while I was cleaning regularly? Why did the landlord deduct such an
                amount?
                All these questions were hammering my mind.</p>
        </div>
    </div>
    <div class="about-us-page-storyline-section-content">
        <p>That incident became the turning point. While having a valuable lesson regarding move-out cleaning and
            preparation and attention to each detail, it sparked an idea that changed my life. I decided to start my
            own <a href="#" class="txt-background-color">cleaning services </a>business that specializes in
            move-out cleanings. I suffered firsthand frustration,
            embarrassment, and financial loss that came from a poorly cleaned apartment. I so wanted to save others
            from experiencing what I had faced.
        </p>
        <p>
            My aim was to provide a platform of cleaning services offering comprehensive cleaning services that
            ensure spotless and ready-to-live apartments for new tenants. So I started my company with the name
            Züriclean. As I was now aware of the importance of a clean and welcoming living space that makes both
            the landlord and new residents happy.
        </p>
        <p>
            I soon found that the <span class="fw-bold"> cleaning service</span> I was offering got hype, and people
            started asking for my
            services. My Facebook page was growing and gaining followers. Some people enjoyed the thorough cleaning
            services provided to them, while others appreciated the attention to detail. I took pride in ensuring
            that every nook and cranny was spotless, from the kitchen countertops to the bathroom tiles.
        </p>
        <p>
            As my business grew, I expanded my services to include <span class="txt-background-color"> regular cleaning
                and deep cleaning.</span> I also began
            offering specialized cleaning for specific needs, such as post-construction cleaning or after-party
            cleanup.
        </p>
        <p>
            But my heart remained with move-out cleanings as it provided me with another high-scoped business
            vision. It was a service that held personal significance for me, and I was passionate about helping
            others avoid the pitfalls I had experienced. You can contact me via Instagram. I would love to be
            helping you.
        </p>
        <p>
            If you're preparing to move, I encourage you to consider hiring a professional cleaning service. A clean
            apartment can make a big difference in the impression you leave on your landlord and can help you avoid
            losing your security deposit.

            Remember, it's always a clean start.</p>
    </div>


</section>


@endsection
