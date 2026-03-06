<?php include(__DIR__ . '/../includes/head.php'); ?>

<?php include(__DIR__ . '/../includes/header.php'); ?>

    <!-- hero section begin -->
    <section id="section-hero-clientele" class="section-dark text-light jarallax relative mh-800">
        <img src="/images/background/8.webp" class="jarallax-img" alt="">
        <div class="gradient-edge-top op-6 h-50 color"></div>
        <div class="gradient-edge-bottom"></div>
        <div class="sw-overlay op-8"></div>
        <div class="abs abs-centered z-2 w-80">
            <div class="container wow scaleIn" data-wow-duration="3s">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subtitle">Our Partnerships</div>
                        <h1 class="fs-120 text-uppercase fs-sm-12vw mb-4 lh-1">Clientele</h1>
                        <div class="spacer-single"></div>
                        <a class="btn-main mx-2 fx-slide" href="#section-partnerships"><span>Elevating Partnerships</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section close -->
        <!-- section partnerships begin -->
    <section id="section-partnerships" class="bg-dark section-dark text-light">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Testimonials</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Elevating Partnerships</h2>
                    <p class="lead wow fadeInUp">What our clients have to say about their experience working with DNA Entertainment Networks.</p>
                </div>
            </div>

            <div class="spacer-single"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-dark-2 p-40 rounded-1 h-100 wow fadeInUp">
                        <i class="icofont-quote-left fs-40 id-color mb-3"></i>
                        <p class="fs-18 mb-4">"I just wanted to say Thank you to you and your DNA Team for the excellent work and coordination for our OGQ event on Monday 12th December in Delhi. The whole event management was very smooth and efficient and of a very good quality."</p>
                        <div class="d-flex align-items-center">
                            <div class="ms-0">
                                <h4 class="mb-0">MD & CEO</h4>
                                <span class="op-6">OGQ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-dark-2 p-40 rounded-1 h-100 wow fadeInUp" data-wow-delay=".2s">
                        <i class="icofont-quote-left fs-40 id-color mb-3"></i>
                        <p class="fs-18 mb-4">"We would like to thank Team DNA for executing AutoExpo 2023 event successfully. There were no flaws in execution and timing. The quality of the product was top class and all guests who visited were impressed."</p>
                        <div class="d-flex align-items-center">
                            <div class="ms-0">
                                <h4 class="mb-0">Head - Marketing</h4>
                                <span class="op-6">SEG Automotive</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-dark-2 p-40 rounded-1 h-100 wow fadeInUp" data-wow-delay=".4s">
                        <i class="icofont-quote-left fs-40 id-color mb-3"></i>
                        <p class="fs-18 mb-4">"A Very Big Shout out to all of you!!! What an accomplishment, I would like to take the opportunity to thank you and all your team members for extending support & collaborating with the PwC L&D team for a successful delivery of the CSS program."</p>
                        <div class="d-flex align-items-center">
                            <div class="ms-0">
                                <h4 class="mb-0">Learning & Development</h4>
                                <span class="op-6">PwC</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="bg-dark-2 p-40 rounded-1 h-100 wow fadeInUp">
                        <i class="icofont-quote-left fs-40 id-color mb-3"></i>
                        <p class="fs-18 mb-4">"I wanted to take a moment to express my sincere thank you for handling and executing our EY GDS Consulting Townhall last week. It was flawless and we managed to have a successful event only because of the part you played in it! You and the team were extremely efficient diligent and worked seamlessly."</p>
                        <div class="d-flex align-items-center">
                            <div class="ms-0">
                                <h4 class="mb-0">Assistant Director</h4>
                                <span class="op-6">EY</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="bg-dark-2 p-40 rounded-1 h-100 wow fadeInUp" data-wow-delay=".2s">
                        <i class="icofont-quote-left fs-40 id-color mb-3"></i>
                        <p class="fs-18 mb-4">"Your team is very quick in understanding the requirements, staying calm, suggesting creative ideas as per requirements, and being timely. You and your team have worked with us on all the last-minute changes. It was a pleasure working with you and your team."</p>
                        <div class="d-flex align-items-center">
                            <div class="ms-0">
                                <h4 class="mb-0">Acceleration Center Solutions Team</h4>
                                <span class="op-6">PwC</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section partnerships close -->

    <!-- section clients begin -->
    <section id="section-clients" class="bg-dark section-dark text-light border-top border-white-op-1">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Our Clients</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Trusted by Global Leaders</h2>
                </div>
            </div>

            <div class="spacer-single"></div>

            <div class="row g-4 text-center">
                <?php for($i=1; $i<=10; $i++): ?>
                <div class="col-lg-2 col-md-4 col-6 wow fadeIn">
                    <div class="bg-dark-2 p-3 rounded-1 hover-scale-1-1 transition-all" style="border: 1px solid rgba(255,255,255,0.05);">
                        <img src="/images/logo-light/<?php echo $i; ?>.webp" class="img-fluid op-5 hover-op-1 transition-all" alt="Client <?php echo $i; ?>">
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            
            <div class="spacer-single"></div>
            
            <div class="row g-4 text-center">
                <div class="col-md-12">
                    <p class="op-5">And many more global brands and sports associations...</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section clients close -->




<?php include(__DIR__ . '/../includes/footer.php'); ?>

<?php include(__DIR__ . '/../includes/scripts.php'); ?>





