@extends('webtemp')

@include('links.css')
@section('title', 'Booking')

@section('styles')
  @yield('booking-styles')
@endsection

@section('main_section')  

  @include('partials.commonNav')

  <!-- Booking page hero section -->
  <section class="bookingpage-hero-section">
    <div class="bookingpage-hero-section-inner">
      <h1>Get a Quote for End of Tenancy Cleaning in Zürich</h1>
      <!-- <img src="./Images/booking-page/booking-hero-section.png" alt=""> -->
    </div>
  </section>

  <!-- Form -->
  <section class="bookingpage-form-section-main-container">
    <div class="bookingpage-form-section">

      <!-- Heading and Button block -->
      <div class="heading-and-button-block">
        <h3>Prefer a Simpler Way to Request a Quotation?</h3>
        <p>
          If the volume of data is proving overwhelming, please complete our contact form directly.
          Kindly specify the required service and desired date in your submission.
        </p>
        <a href="#" class="btn-background-color">Go to Contact Form</a>
      </div>
      <!-- Form block starts -->

      <form class="custom-form">
        <h4>Personal Information</h4>
        <!-- Name and Email -->
        <div class="form-row">
          <div class="form-field">
            <label for="name">*Name:</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-field">
            <label for="email">*Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
        </div>

        <!-- Phone -->
        <div class="form-row">
          <div class="form-field">
            <label for="phone">Phone:</label>
            <div class="phone-input">
              <select>
                <option value="+41">+41 (Switzerland)</option>
              </select>
              <input type="tel" id="phone" name="phone" placeholder="Phone number" />
            </div>
          </div>
        </div>

        <!-- WhatsApp checkbox -->
        <div class="toggle">
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <span>*WhatsApp number is same</span>
        </div>


        <!-- WhatsApp -->
        <div class="form-row">
          <div class="form-field">
            <label for="whatsapp">Phone:</label>
            <div class="phone-input">
              <select>
                <option value="+41">+41 (Switzerland)</option>
              </select>
              <input type="tel" id="whatsapp" name="whatsapp" placeholder="Whatsapp number" />
            </div>
          </div>
        </div>

        <!-- Zipcode -->
        <div class="form-row">
          <div class="form-field">
            <label for="zipcode">Zipcode:</label>
            <input type="text" id="zipcode" name="zipcode" />
          </div>
        </div>

        <!-- Appointment -->
        <h4 class="appointment-heading">Appointment Details</h4>
        <div class="form-row">
          <div class="form-field">
            <label for="date">*What is your Apartment Size in m2?</label>
            <input type="text" class="appointment-input" required />
            <p class="form-note">
              <span class="info-icon">ⓘ</span>
              Given your apartment size, we will call you after you book in order to properly coordinate the cleaning.
            </p>
          </div>
        </div>

        <div class="form-row">
          <div class="form-field">
            <label for="floor">*Please select the floor of your apartment.</label>
            <select class="appointment-input" required>
              <option value="End of Tenancy Cleaning">First Floor</option>
              <option value="End of Tenancy Cleaning">Second Floor</option>
              <option value="End of Tenancy Cleaning">Third Floor</option>
            </select>
          </div>
        </div>
        <div class="toggle">
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <span>is Elevator available?</span>
        </div>

        <!-- Date Shedule -->
        <label>* When would you like your cleaning to take place?</label>
        <div class="calendar-center-wrapper">
          <div id="inline-calendar"></div>
        </div>
        <p class="form-note"> <span class="info-icon">ⓘ</span>Your selected date is: <span id="selectedDate"
            class="txt-background-color fw-bold">--</span></p>
        <p class="form-note">
          <span class="info-icon">ⓘ</span>
          The cleaning will start after 8:00 am. We will contact you shortly after your booking to confirm <br>
          your cleaning.Please schedule your end-of-tenancy cleaning at least 48 hours before handing over
          the keys.
        </p>
        <div class="toggle">
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <span>I would like to be contacted to adjust the schedule.</span>
        </div>

        <!-- Additional Services toggle btns -->
        <div class="additional-services">
          <h4>Additional Services</h4>
          <div class="services-grid">
            <label><input type="checkbox"> Inside of the Fridge</label>
            <label><input type="checkbox"> Inside of the Oven</label>
            <label><input type="checkbox"> Windows</label>

            <label><input type="checkbox"> Window blinds</label>
            <label><input type="checkbox"> Balcony & Terrace</label>
            <label><input type="checkbox"> Disposal Service</label>
            <label><input type="checkbox"> Handover Guarantee</label>

            <label><input type="checkbox"> Garage</label>
            <label><input type="checkbox"> Shutter Cleaning</label>
            <label><input type="checkbox"> Cellar Cleaning</label>
            <label><input type="checkbox"> Disinfection</label>

            <label><input type="checkbox"> Mattress Cleaning</label>
            <label><input type="checkbox"> Sofa Cleaning</label>
            <label><input type="checkbox"> Carpet Cleaning</label>
            <label><input type="checkbox"> Curtain Cleaning</label>
          </div>
        </div>

        <!-- Additional Details -->
        <h4 class="additional-details">Additional Details</h4>
        <div class="form-row additional-details-form">
          <div class="form-group">
            <label>*How long have you been living there?</label>
            <input type="text" placeholder="">
          </div>

          <div class="form-group">
            <label>*Is there a balcony or terrace?</label>
            <input type="text" placeholder="No">
          </div>

          <div class="form-group">
            <label>*How many m² roughly?</label>
            <input type="text" placeholder="">
          </div>

          <div class="form-group">
            <label>*Have you had any pet?</label>
            <input type="text" placeholder="No">
          </div>
        </div>

        <!-- Additional instruction -->
        <h4 class="additional-instruction">Additional Instruction</h4>
        <div class="form-row additional-instruction-form">
          <div class="form-group">
            <label>Subject(Optional):</label>
            <input type="text" placeholder="">
          </div>

          <div class="form-group">
            <label>Message(Optional):</label>
            <input type="text" placeholder="No">
          </div>
        </div>

        <div class="toggle">
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
          <span>Have unwanted items? Do you need our disposal service?</span>
        </div>

        <!-- Submit Button  -->
        <div class="form-row">
          <div class="form-field">
            <button type="submit" class="btn-background-color">Submit</button>
          </div>
        </div>




      </form>

    </div>
  </section>

  <!-- Guaranteed handover -->
  <section class="guaranteed-handover-section">
    <div class="guaranteed-handover-section-content">
      <h3> Moving Out Cleaning Service in Zürich and Zug: <span class="txt-background-color"> Guaranteed Handover!
        </span>
        <br> Hassle-Free <span class="txt-background-color">Move Out Cleaning </span> with Züriclean
      </h3>
      <p>Moving into a new home can be exciting, but the moving process itself can be exhausting. Whether you’re moving
        out or moving in, there are important steps to ensure a smooth transition. One of the most critical tasks is to
        ensure your old home meets Switzerland's strict cleaning standards before returning the keys to the landlord or
        property owner.</p>
      <h3>Why Professional <span class="txt-background-color"> Move Out Cleaning </span> in Zürich is Essential</h3>
      <p>In Switzerland, strict rules govern the cleanliness of a property when tenants move out. That’s why hiring a
        professional move out cleaning service in Zürich or Zug is the smartest choice to avoid penalties or deposit
        deductions. Whether you're relocating from a rental near Bahnhofstrasse, or leaving your apartment in Zug near
        the beautiful Lake Zug, Züriclean ensures your home is spotless for the handover.
        We cater to all scenarios—whether you’re moving out of a rented property or preparing your home for sale or new
        tenants. Ensuring your space is thoroughly cleaned can make all the difference in a smooth and stress-free
        handover.</p>


    </div>

  </section>

  <!-- Move out cleaning  -->
  <section class="move-out-cleaning-section">
    <div class="move-out-cleaning-section-content">
      <h3>Leave the Cleaning to Us: Guaranteed Handover with <span class="txt-background-color"> Züriclean</span></h3>
      <p>You don’t need to worry about any of the cleaning when you choose our move out cleaning services in
        Zürich and Zug. Our professional cleaning team will handle everything from start to finish, allowing you to
        focus on the exciting aspects of your move.
        Our services come with a handover guarantee, meaning we will stay with you throughout the property inspection to
        ensure everything meets your landlord's or agency’s standards. We even provide multilingual support in English,
        German, Italian, and Spanish, making the handover process even easier.</p>
      <h3>Our <span class="txt-background-color"> Move Out Cleaning </span> Services Offers:</h3>
      <ul class="one-row">
        <li>Move out cleaning with handover guaranteed!</li>
        <li>Final cleaning</li>
        <li>End of lease cleaning</li>
        <li>End of tenancy cleaning</li>
        <li>Handover guarantee cleaning</li>
      </ul>
      <ul class="one-row">
        <li>Move out cleaning with handover guaranteed!</li>
        <li>Final cleaning</li>
        <li>End of lease cleaning</li>
        <li>End of tenancy cleaning</li>
        <li>Handover guarantee cleaning</li>
      </ul>
      <p>So what are you waiting for? Whenever you are moving in or moving out make sure to contact us so that we can
        help you with the smooth process.</p>
      <h3>How to <span class="txt-background-color"> handover </span> your apartment smoothly?</h3>
      <p>The general rule in Switzerland is simple:</p>

      <p>"The newcomer should not need to clean the apartment anymore when they move in."</p>

      <p>In other words:</p>

      <p>"You must leave your apartment in the same condition as when you first moved in."</p>

      <p>This strict standard of cleanliness is followed throughout Switzerland, making it essential for tenants to meet
        these requirements before handing over the property. Hiring a professional move-out cleaning service in Zürich
        or Zug can help you avoid penalties or deductions from your rental deposit.
        Whether you're moving from a rental near Bahnhofstrasse in Zürich or leaving a scenic apartment by Lake Zug, our
        professional service at Züriclean ensures your home is spotless and ready for handover, following Swiss
        regulations.</p>
      <h3>What Is a <span class="txt-background-color"> Move Out Cleaning </span> with a Handover Guarantee?</h3>
      <p>Move-out cleaning goes by various names such as end of tenancy cleaning, relocation cleaning, inspection
        cleaning, or final cleaning. However, the most commonly used term is move out cleaning with a handover
        guarantee. This means that the cleaning company stays with you during the handover until your landlord or
        property management is fully satisfied with the quality of the cleaning. If any issues arise, the company will
        address them on the spot at no extra cost.</p>

    </div>

  </section>

  <!-- professional cleaning service -->
  <section class="professional-cleaning-service-section">
    <div class="professional-cleaning-service-section-content">
      <h3>Why Choose a Professional Cleaning Service for Your Move?</h3>
      <p>While it’s possible to clean your apartment yourself, using a professional cleaning company in
        Zürich guarantees compliance with Swiss cleanliness standards. Without professional cleaning supplies or a team,
        DIY cleaning can be time-consuming and stressful, often leading to missed details that could result in deposit
        deductions.
        <br>
        Our professional cleaners in Zürich work as a team, with each member focusing on specific areas such as the
        kitchen, bathroom, windows, and more. We efficiently complete the cleaning, ensuring your property is ready for
        handover, all within a controlled budget that fits your needs.
      </p>
      <h3>Avoid Unnecessary Stress and Costs</h3>
      <p>If you opt to clean your apartment yourself but don’t meet the required standards, your landlord could hire any
        cleaning company and deduct the cost from your deposit. To avoid this unnecessary stress and extra costs, it’s
        better to hire a professional cleaning company in Zürich like Züriclean, where we offer upfront, transparent
        pricing.</p>
      <h3 class="text-center"><span class="txt-background-color">Important Points </span> for a Smooth Handover</h3>

      <div class="importants-points">
        <h4>Empty Your Apartment:</h4>
        <p>Ensure your home is completely empty and cleaned thoroughly. If you’ve taken over items from a previous
          tenant, make sure they’re removed unless the next tenant wants them.</p>
      </div>
      <div class="importants-points">
        <h4>Liability Insurance:</h4>
        <p>It’s helpful to have liability insurance for any damages that occurred during your stay, such as accidental
          spills or scratches.</p>
      </div>
      <div class="importants-points">
        <h4>Pet Insurance:</h4>
        <p>If you have pets, pet insurance may cover any damages they caused, such as scratches on walls or doors.</p>
      </div>
      <div class="importants-points">
        <h4>Submit the Exit List:</h4>
        <p>Forward your landlord's or agency’s exit list to the cleaning company.</p>
      </div>
      <div class="importants-points">
        <h4>Small Repairs:</h4>
        <p>Complete any minor repairs, like changing light bulbs or fixing wall holes, before the handover.</p>
      </div>
      <div class="importants-points">
        <h4>Chimney Cleaning:</h4>
        <p>Chimneys need to be professionally cleaned and certified before handover</p>
      </div>
      <div class="importants-points">
        <h4>Personal Presence:</h4>
        <p>You must be present at the handover. If not, you can hire an apartment handover service agent to represent
          you.</p>
      </div>
      <div class="importants-points">
        <h4>Rental Contract & Protocol:</h4>
        <p>Bring your rental contract and move-in protocol to the handover to avoid charges for pre-existing damages. If
          you’re not attending, send these documents to your handover agent.
        </p>
      </div>

      <!-- contact us -->
      <div class="professional-cleaning-service-section-contact-us">
        <h3> <span class="txt-background-color">Contact </span> Us for Expert Move Out Cleaning Near
          You!</h3>
        <p>Whether you’re moving out of an apartment near Paradeplatz, relocating from or need move out cleaning in Zug,
          Züriclean is here to help with a professional, hassle-free service. Our move out cleaning with a handover
          guarantee ensures that your property is in top condition, giving you peace of mind during the handover.</p>

        <a href="./contact.html" class="btn-background-color"> Book Move Out Cleaning Now!</a>
      </div>
    </div>
  </section>

   <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#inline-calendar", {
            inline: true,
            dateFormat: "d-m-Y",
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('selectedDate').textContent = dateStr || "--";
            }
        });
    </script>

@endsection

