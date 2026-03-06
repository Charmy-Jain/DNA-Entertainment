<?php include(__DIR__ . '/../includes/head.php'); ?>

<?php include(__DIR__ . '/../includes/header.php'); ?>

        <section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-500 jarallax">
            <img src="/images/background/4.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-bottom h-50"></div>
            <div class="sw-overlay op-5"></div>
            <div class="abs w-80 bottom-10 z-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-between gx-5">
                        <div class="col-lg-6">
                            <div class="relative wow mask-right">
                                <div class="text-start">
                                    <h1 class="fs-96 text-uppercase fs-sm-10vw mb-0 lh-1">Contact</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".3s">
                            <p class="mb-0">Join thought leaders, developers, researchers, and founders as we explore how artificial intelligence is reshaping industries, creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="relative">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="subtitle">Get In Touch</div>
                    <h2 class="wow fadeInUp">We’re here to answer your questions.</h2>

                    <p class="col-lg-8">Have a question, suggestion, or just want to say hi? We’re here and happy to hear from you!</p>

                    <div class="spacer-single"></div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="relative mb-4">
                                <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-location-pin"></i>
                                <div class="ms-80px">
                                    <h4 class="mb-0">Event Location</h4>
                                    No 7 (Old No. 215), Bellary Road, Palace <br>Orchards, Bengaluru 560 080
                                </div>
                            </div>

                            <div class="relative mb-4">
                                <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-envelope"></i>
                                <div class="ms-80px">
                                    <h4 class="mb-0">Send a Message</h4>
                                    dna@dnanetworks.com
                                </div>
                            </div>

                            <div class="relative mb-4">
                                <i class="abs fs-28 p-3 bg-color text-light rounded-1 icofont-phone"></i>
                                <div class="ms-80px">
                                    <h4 class="mb-0">Call Us Directly</h4>
                                    +91 80 4113 7995 <br> +91 80 2361 6683 
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="bg-dark-2 rounded-1 p-60 relative">
                        <form name="contactForm" id="contact_form" method="post" action="#">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <h3>Get In Touch</h3>
                                <p>Have a question, suggestion, or just want to say hi? Fill out the form below and we’ll get back to you soon.</p>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type="text" name="name" id="name" class="form-control-custom" placeholder="Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type="text" name="company" id="company" class="form-control-custom" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type="text" name="phone_number" id="phone_number" class="form-control-custom" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type="email" name="email_address" id="email_address" class="form-control-custom" placeholder="Email Address*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <select name="type_of_event" id="type_of_event" class="form-control-custom" required>
                                                <option value="" disabled selected>Type of Event*</option>
                                                <option value="Sports">Sports Services</option>
                                                <option value="Music">Music Services</option>
                                                <option value="Corporate">Corporate Services</option>
                                                <option value="Wedding">Wedding Services</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="service_col_wrapper">
                                        <div class="field-set">
                                            <select name="select_service" id="select_service" class="form-control-custom" required>
                                                <option value="" disabled selected>Select a service*</option>
                                                <option value="">Please select event type first</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="field-set">
                                            <textarea name="message" id="message" class="form-control-custom h-150px" placeholder="Your Message*" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        
                        <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                        <div id='submit' class="mt-4">
                            <input type='submit' id='send_message' value='SEND MESSAGE' class="btn-border-white">
                        </div>

                        <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>
                    </form>
                    </div>
                </div>
              </div>
            </div>
        </section>

        <script>
            document.getElementById('type_of_event').addEventListener('change', function() {
                const serviceSelect = document.getElementById('select_service');
                const serviceCol = document.getElementById('service_col_wrapper');
                const eventType = this.value;
                
                if (eventType === 'Other') {
                    serviceCol.style.display = 'none';
                    serviceSelect.removeAttribute('required');
                } else {
                    serviceCol.style.display = 'block';
                    serviceSelect.setAttribute('required', 'required');
                }
                
                // Clear current options
                serviceSelect.innerHTML = '<option value="" disabled selected>Select a service*</option>';
                
                let options = [];
                
                switch(eventType) {
                    case 'Sports':
                        options = ["Accreditation", "Artist Management", "Sponsorship Acquisition", "League Operations", "LED Display", "Design & Branding", "IP Curation", "Sportainment", "Hospitality", "Production", "Pyrotechnics & SFX", "Logistics & Accommodation", "Content & Film", "Other"];
                        break;
                    case 'Music':
                        options = ["Accreditation", "Artist Management", "Sponsorship Acquisition", "LED Display", "Design & Branding", "IP Curation", "Production", "Pyrotechnics & SFX", "Logistics & Accommodation", "Content & Film", "Other"];
                        break;
                    case 'Corporate':
                        options = ["Accreditation", "Sponsorship Acquisition", "LED Display", "Design & Branding", "IP Curation", "Production", "Pyrotechnics & SFX", "Logistics & Accommodation", "MICE", "Virtual & Immersive Technology", "Content & Film", "Other"];
                        break;
                    case 'Wedding':
                        options = ["Accreditation", "Artist Management", "Design & Branding", "Hospitality", "Production", "Pyrotechnics & SFX", "Logistics & Accommodation", "Wedding Affairs", "Content & Film", "Other"];
                        break;
                    case 'Other':
                        options = ["Other"];
                        break;
                }
                
                options.forEach(function(opt) {
                    const el = document.createElement('option');
                    el.value = opt;
                    el.textContent = opt;
                    serviceSelect.appendChild(el);
                });
            });
        </script>        

<?php include(__DIR__ . '/../includes/footer.php'); ?>

<?php include(__DIR__ . '/../includes/scripts.php'); ?>




