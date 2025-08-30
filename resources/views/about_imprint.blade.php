@extends('webtemp')

@include('links.css')
@section('title', 'About Us Imprint')

@section('styles')
    @yield('imprint-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')

    <!-- About us imprint page hero section -->
    <section class="about-us-our-team-page-hero-section">
        <h6 class="navigation-text">Home > About Us > Imprint</h6>
        <h1>Imprint</h1>
    </section>

    <!-- About us imprint page service provided section -->
    <section class="imprint-services-provided-section">
        <div class="imprint-container">
            <p class="imprint-title">This is a service provided by:</p>
            <h2 class="txt-background-color">Specialclean Züri GmbH</h2>

            <div class="imprint-details">
                <div class="imprint-person">
                    <div class="icon-circle">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="./about_us_storyline.html" target="_blank" class="txt-background-color">Intizar Ahmed</a>
                </div>
                <div class="imprint-icon">
                    <div class="icon-block">
                        <div class="icon-circle">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p>Schaffhauserstrasse 380, 8050 Zürich</p>
                    </div>

                    <div class="icon-block">
                        <div class="icon-circle">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p>info@zuericlean.com</p>
                    </div>

                    <div class="icon-block">
                        <div class="icon-circle">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p>+41 76 413 6183</p>
                    </div>
                </div>



            </div>

            <div class="imprint-source">
                <p>Sources for the used images and graphics <br>
                    <a href="#" class="txt-background-color" target="_blank">Pixabay - https://pixabay.com/de - Free
                        images and graphics</a>
                </p>
            </div>
        </div>
    </section>

    <!-- About us imprint page content section -->
    <section class="imprint-content-section-container">
        <h2> <span class="txt-background-color">Data Protection</span> Declaration:</h2>
        <div class="imprint-content-section">
            <h3>Data Protection</h3>
            <p>The use of our website is usually possible without providing personal information. If personal data (such
                as name, address, or email addresses) is collected on our pages, this is always done on a voluntary
                basis, if possible. This data will not be passed on to third parties without your express consent.</p>
            <p>We would like to point out that data transmission over the Internet (e.g., when communicating by email)
                can have security vulnerabilities. Complete protection of data against access by third parties is not
                possible.</p>
            <p>The use of contact data published within the framework of imprint obligations by third parties for
                sending unsolicited advertising and information materials is hereby expressly prohibited. The operators
                of these pages expressly reserve the right to take legal action in the event of unsolicited sending of
                advertising information, such as spam emails.</p>
            <h3>Data Protection Declaration for the Use of Facebook Plugins (Like-Button)</h3>
            <p>Our pages integrate plugins from the social network Facebook, Facebook Inc., 1601 Willow Road, Menlo
                Park, California, 94025, USA. You can recognize the Facebook plugins by the Facebook logo or the "Like"
                button on our site. An overview of the Facebook plugins can be found here: <a href="#"
                    class="txt-background-color"> http://developers.facebook.com/docs/plugins/</a>
            </p>
            <p>
                When you visit our pages, the plugin establishes a direct connection between your browser and the
                Facebook server. Facebook thereby receives the information that you have visited our site with your IP
                address. If you click the Facebook "Like" button while logged into your Facebook account, you can link
                the content of our pages to your Facebook profile. This allows Facebook to associate your visit to our
                pages with your user account. We would like to point out that we, as the provider of the pages, have no
                knowledge of the content of the transmitted data or its use by Facebook. For more information, please
                refer to Facebook's privacy policy at <a href="#"
                    class="txt-background-color">  http://de-de.facebook.com/policy.php</a>
            </p>
            <p>
                If you do not wish Facebook to associate your visit to our pages with your Facebook user account, please
                log out of your Facebook user account.
            </p>
            <h3>Data Protection Declaration for the Use of Google Analytics</h3>
            <p>This website uses Google Analytics, a web analytics service provided by Google Inc. ("Google"). Google
                Analytics uses "cookies", which are text files placed on your computer, to help the website analyze how
                users use the site. The information generated by the cookie about your use of the website will generally
                be transmitted to and stored by Google on servers in the United States.</p>

            <p>If IP anonymization is activated on this website, your IP address will be truncated within the area of
                member states of the European Union or other parties to the Agreement on the European Economic Area
                before being transmitted to the United States. Only in exceptional cases will the full IP address be
                sent to a Google server in the USA and shortened there. On behalf of the operator of this website,
                Google will use this information to evaluate your use of the website, compile reports on website
                activity, and provide other services related to website activity and internet usage to the website
                operator. The IP address transmitted by your browser as part of Google Analytics will not be merged with
                other data from Google.</p>

            <p>You can prevent the storage of cookies by setting your browser software accordingly; however, we would
                like to point out that in this case, you may not be able to use all functions of this website to their
                full extent. You can also prevent Google from collecting the data generated by the cookie and related to
                your use of the website (including your IP address) as well as the processing of this data by Google by
                downloading and installing the browser plug-in available under the following
                link: <a href="#" class="txt-background-color">  http://tools.google.com/dlpage/gaoptout?hl=de.</a>
            </p>
        </div>
    </section>


@endsection
