@extends('webtemp')

@include('links.css')
@section('title', 'Contact Us')

@section('styles')
    @yield('contact-styles')
@endsection

@section('main_section')

    @include('partials.commonNav')

    <!-- Hero Section -->
    <section class="contact-form-hero-section">
        <h1>Remain In Touch With Züriclean Anytime | We Are Available 24/7</h1>
    </section>

    <!-- Form -->
    <section class="contact-form-section">
        <div class="contact-form-container">
            <h3 class="contact-form-title txt-background-color">Contact Form</h3>
            <div class="contact-form-field-section">
                <div class="contact-form-field">
                    <label for="name">*Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="contact-form-field">
                    <label for="email">*Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="contact-form-field">
                    <label for="phone">*Phone</label>
                    <input type="number" id="phone" name="phone" required>
                </div>
                <div class="contact-form-field">
                    <label for="zipcode">*Zipcode</label>
                    <input type="number" id="zipcode" name="zipcode" required>
                </div>
                <div class="contact-form-field">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="contact-form-field">
                    <label for="message">Message</label>
                    <input type="text" id="message" name="message" required></input>
                </div>
                <div class="submit-button">
                    <button type="submit" class="btn-background-color px-5">Submit</button>
                </div>
            </div>

            <!-- Reach us -->
            <div class="contact-form-reach-us-section">
                <p>At Züriclean, we understand that your cleaning needs are important, and we're always ready to assist
                    you. Whether you have a question about our cleaning services in Zürich, need support, or want to
                    schedule a cleaning, our team is available around the clock to help. <br>
                    We believe in providing exceptional customer service and delivering top-quality cleaning solutions
                    tailored to your specific needs. No matter the time of day or night, we're just a message or phone
                    call away. Whether you're looking for residential or handover cleaning or commercial cleaning
                    services, or if you need urgent assistance, you can trust Züriclean to be there when you need us the
                    most.</p>
                <h3>How to <span class="txt-background-color"> Reach Us:</span></h3>
                <p>Please feel free to reach out using the contact form below, and a member of our team will get back to
                    you as soon as possible. Whether you're inquiring about a quote, want to discuss a customized
                    cleaning plan, or have any other questions, we're happy to assist. <br>
                    Simply provide your name, email, phone number, and zip code to help us better understand your
                    location and needs. If you'd prefer, you can also reach us by phone or email directly for a faster
                    response.</p>

            </div>
            <!-- Reach us -->

            <!-- feedback -->
            <div class="contact-form-feedback-section">
                <div class="contact-form-feedback-left">
                    <h3>We Value Your <span class="txt-background-color"> Feedback </span></h3>
                    <p>Your feedback is essential to us. We’re always striving to improve and enhance our services. If
                        you’ve recently experienced a cleaning service with Züriclean, we would love to hear about your
                        experience to ensure we continue delivering the best possible service. <br>
                        Thank you for choosing Züriclean. We look forward to assisting you!</p>
                    <!-- btns -->
                    <div class="d-flex justify-content-center align-items-center flex-column gap-2 icon-btn">
                        <div>
                            <a href="#"> <button class="btn-background-color icon-btn"><span
                                        class="fas fa-phone"></span>+41 76 413 61 83</button></a>
                        </div>

                        <div>
                            <a href="#"> <button class="btn-background-color icon-btn"><span
                                        class="far fa-envelope"></span>
                                    info@zuericlean.com</button></a>
                        </div>
                    </div>
                    <!-- btns -->

                </div>
                <div class="contact-form-feedback-right">
                    <!-- contact-map -->
                    <div id="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.8721136379696!2d8.536646915568443!3d47.397019779169654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900b75045081b3%3A0x18c50f1e6f0a6c3b!2sSchaffhauserstrasse%20380%2C%208050%20Z%C3%BCrich%2C%20Switzerland!5e0!3m2!1sen!2s!4v1632448665873!5m2!1sen!2s"
                            width="384px" height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <hr>
                </div>
            </div>
            <!-- feedback -->
        </div>
    </section>

@endsection
