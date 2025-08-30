@extends('webtemp')

@include('links.css')

@section('title', 'Cleaning Handover')

@section('styles')
    @yield('cleaning-handover-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')

    <!--Cleaning Handover Page Hero section -->
    <section class="cleaning-handover-page-hero-section reversed">
        <div class="hero-overlay">
            <img src="{{ asset('front/assets/Images/office-images/curve.png') }}" alt="">

            <div class="hero-content">
                <p class="navigation-text">Home > Office / Shop Cleaning</p>
                <h1>
                    What is a <span> Cleaning Handover Guarantee? </span>
                </h1>
                <a href="#" class="hero-button">Get Quote Now</a>
            </div>

        </div>
    </section>

    <!-- Cleaning Handover Page content section -->
    <section class="cleaning-handover-page-content-section">
        <div class="handover-page-upper-content-container">
            <p>Züriclean is a leading, professional cleaning company in Switzerland with English-speaking staff. We do
                regular domestic cleaning, move-out cleaning and end-of-tenancy cleaning, with a handover guarantee. We
                also clean windows, carpets and floors and the clean-up after an event.
                Most expats in Switzerland ask the same question, ”What is a cleaning handover guarantee? “
                Züriclean explains</p>
            <h2>What is included in the cleaning handover guarantee?</h2>
            <p>The following is included in the cleaning handover guarantee:
                Swiss standard cleaning according to the exit list from your agency/landlord. This includes the cleaning
                of kitchen, bathroom, windows and shutters, floors, doors etc.</p>
            <p>Terrace and balcony cleaning is also included in the handover guarantee (unless your balcony/terrace
                requires a jet-wash/power-wash which will be quoted separately). We will be present with you at the key
                handover and stay with you until the cleaning is satisfactory. Any re-cleaning will be completed without
                extra charge. Please mention the cleaning of cellar, attic, garage, and private laundry room in your
                inquiry. Quoted price is only valid for an unfurnished apartment, if your apartment is furnished, please
                mention this in your inquiry.</p>
        </div>
        <div><a href="#" class="btn-background-color">Get a Free Estimate</a></div>

        <div class="handover-page-lower-content-container">
            <h2> What is not including in the cleaning handover guarantee </h2>
            <p>The following is not included in the cleaning handover guarantee:
                Painting, repairs,cerified chimney cleaning, special floor treatments (sealing, oiling or coating) and
                any gardening.</p>
            <p>We will help you remove scratches on the floor or on surfaces but we don’t provide a guarantee for this.
                We cannot fill holes in the walls, either you have to do it yourself or have painter to do it.</p>
            <p>All glue and sticky residues in your apartment are not included in our cleaning service and are not
                covered by the cleaning handover guarantee. Therefore, please ensure that you remove all sticky and
                glued materials yourself before the cleaning service.</p>
            <p>If you are aware of damages that occured during your stay or move, please let us know before cleaning
                begins to avoid inconvenience. Many damages are covered by your liability insurance and you will need to
                contact your insurance company to make a claim</p>

            <div class="handover-icon">
                <div class="icon-block">
                    <div class="icon-circle">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <a href="https://zuericlean.com" target="_blank">https://zuericlean.com</a>
                </div>

                <div class="icon-block">
                    <div class="icon-circle">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <p href="#">info@zuericlean.com</p>
                </div>

                <div class="icon-block">
                    <div class="icon-circle">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <p href="#">+41 76 413 6183</p>
                </div>
            </div>

        </div>
        <div><a href="#" class="btn-background-color">Contact Now!</a></div>

    </section>


@endsection
