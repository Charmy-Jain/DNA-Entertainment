<?php include(__DIR__ . '/../includes/head.php'); ?>

<?php include(__DIR__ . '/../includes/header.php'); ?>

        <style>
            
            .nav-pills .nav-link {
                border-radius: 50rem;
            }
            .dropdown-item:hover {
                background-color: rgba(var(--primary-color-rgb), 0.1) !important;
                color: var(--primary-color) !important;
            }
            .dropdown-v2 .btn::after {
                display: none !important;
            }
        </style>

        <!-- Hero section -->
        <section id="section-hero-sports" class="section-dark text-light jarallax relative mh-800">
            <img src="/images/background/5.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-5" style="background-color: rgba(20, 20, 20, 0.45);"></div>
            <div class="abs abs-centered z-2000 w-100">
                <div class="container wow scaleIn" data-wow-duration="3s">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="fs-120 text-uppercase id-color fw-bold mb-4 lh-1" style="color: var(--primary-color) !important;">SPORTS EVENTS</h1>
                            <div class="fs-24 text-white mb-5 mx-auto opacity-75" style="max-width: 800px;">Experience the thrill of live sports with DNA Entertainment. We bring you the most exciting matches and tournaments across India.</div>
                            
                            <!-- Dropdown -->
                            <div class="dropdown-v2 d-inline-block mt-3 position-relative">
                                <button class="btn border border-white border-opacity-20 px-4 py-3 d-flex justify-content-between align-items-center" type="button" id="sportDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" style="width: 320px; background: rgba(0,0,0,0.8); backdrop-filter: blur(10px); z-index: 10; border-radius: 0;">
                                    <span class="fs-14 fw-bold text-white ls-2 uppercase">SPORT TYPE</span>
                                    <i class="fa fa-chevron-down text-white-50 fs-10 ms-2"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark w-100 mt-0 rounded-0 custom-scrollbar" aria-labelledby="sportDropdown" style="background: rgba(0,0,0,0.95); border: 1px solid rgba(255,255,255,0.1); position: absolute; top: 100%; left: 0; padding: 0; max-height: 250px; overflow-y: auto;">
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">CRICKET</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">FOOTBALL</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">KABADDI</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">BASKETBALL</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">HOCKEY</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">VOLLEYBALL</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">RUGBY</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color border-bottom border-white border-opacity-10" href="#">WRESTLING</a></li>
                                    <li><a class="dropdown-item py-3 px-4 fw-bold text-white fs-13 ls-1 hover-bg-color" href="#">VIEW ALL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section begin -->
        <section id="section-events" class="section-dark pb-80 pt-100" aria-label="section">
            <div class="container relative z-4 mt-5">
                
                <div class="row align-items-end mb-5">
                    <div class="col-lg-6 wow " data-wow-delay=".2s">
                        <div class="subtitle text-uppercase mb-2 id-color" style="letter-spacing: 2px;">Event Schedule</div>
                        <h2 class="fs-48 text-white mb-0 fw-bold">Follow Event Schedule</h2>
                    </div>
                    
                    <div class="col-lg-6 mt-4 mt-lg-0 wow" data-wow-delay=".4s">
                        <!-- Tabs -->
                        <ul class="nav nav-pills justify-content-lg-end justify-content-start border-0" id="scheduleTabs" role="tablist">
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link event-schedule-tab active px-5 py-3 d-flex flex-column align-items-center justify-content-center text-center" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab">
                                    <span class="fs-16 fw-bold d-block">Day 01</span>
                                    <span class="fs-11 text-white-op-7 mt-1 d-block">16 April 2026</span>
                                </button>
                            </li>
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link event-schedule-tab px-5 py-3 d-flex flex-column align-items-center justify-content-center text-center" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab">
                                    <span class="fs-16 fw-bold d-block">Day 02</span>
                                    <span class="fs-11 text-white-op-7 mt-1 d-block">18 April 2026</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link event-schedule-tab d-flex flex-column align-items-center justify-content-center text-center" id="day3-tab" data-bs-toggle="tab" data-bs-target="#day3" type="button" role="tab">
                                    <span class="fs-16 fw-bold d-block">Day 03</span>
                                    <span class="fs-11 text-white-op-7 mt-1 d-block">24 April 2026</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="tab-content mt-5" id="scheduleTabsContent">
                    <!-- Day 1 Content -->
                    <div class="tab-pane fade show active" id="day1" role="tabpanel">
                        
                        <!-- Event 1 -->
                        <div class="wow fadeInUp mb-4" data-wow-delay=".2s">
                            <div class="event-item-bg d-flex flex-column flex-lg-row align-items-center w-100">
                                
                                <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start ps-lg-4">
                                    <h3 class="text-white mb-2 fs-24 fw-bold">Events That Leave a<br>Impression</h3>
                                    <p class="text-white-op-7 mb-0 fs-15 lh-base">
                                        A personal portfolio is a curated collection of<br>an individual's professional work
                                    </p>
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-center px-lg-3">
                                    <img src="/images/news/s1.webp" class="event-card-img" alt="">
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-start">
                                    <div class="event-info-box ps-lg-4">
                                        <div class="d-flex align-items-start mb-4">
                                            <i class="fa fa-clock fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">10 Am To 10 Pm</span>
                                                <span class="info-desc">20 April 2026</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-map-marker-alt fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">Mirpur 01 Road N 12 Dhaka</span>
                                                <span class="info-desc">Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 text-center text-lg-end pe-lg-4">
                                    <a href="/tickets" class="btn-main fx-slide">
                                        <span>Buy Ticket <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Event 2 -->
                        <div class="wow fadeInUp mb-4" data-wow-delay=".3s">
                            <div class="event-item-bg d-flex flex-column flex-lg-row align-items-center w-100">
                                
                                <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start ps-lg-4">
                                    <h3 class="text-white mb-2 fs-24 fw-bold">Sparkle & Shine on<br>Celebrations</h3>
                                    <p class="text-white-op-7 mb-0 fs-15 lh-base">
                                        A personal portfolio is a curated collection of<br>an individual's professional work
                                    </p>
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-center px-lg-3">
                                    <img src="/images/news/s2.webp" class="event-card-img" alt="">
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-start">
                                    <div class="event-info-box ps-lg-4">
                                        <div class="d-flex align-items-start mb-4">
                                            <i class="fa fa-clock fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">10 Am To 10 Pm</span>
                                                <span class="info-desc">20 April 2026</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-map-marker-alt fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">Mirpur 01 Road N 12 Dhaka</span>
                                                <span class="info-desc">Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 text-center text-lg-end pe-lg-4">
                                    <a href="/tickets" class="btn-main fx-slide">
                                        <span>Buy Ticket <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- Event 3 -->
                        <div class="wow fadeInUp mb-4" data-wow-delay=".4s">
                            <div class="event-item-bg d-flex flex-column flex-lg-row align-items-center w-100">
                                
                                <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start ps-lg-4">
                                    <h3 class="text-white mb-2 fs-24 fw-bold">Sparkle & Shine on<br>Celebrations</h3>
                                    <p class="text-white-op-7 mb-0 fs-15 lh-base">
                                        A personal portfolio is a curated collection of<br>an individual's professional work
                                    </p>
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-center px-lg-3">
                                    <img src="/images/news/s2.webp" class="event-card-img" alt="">
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-start">
                                    <div class="event-info-box ps-lg-4">
                                        <div class="d-flex align-items-start mb-4">
                                            <i class="fa fa-clock fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">10 Am To 10 Pm</span>
                                                <span class="info-desc">20 April 2026</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-map-marker-alt fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">Mirpur 01 Road N 12 Dhaka</span>
                                                <span class="info-desc">Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 text-center text-lg-end pe-lg-4">
                                    <a href="/tickets" class="btn-main fx-slide">
                                        <span>Buy Ticket <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    
                    <!-- Day 2 Content -->
                    <div class="tab-pane fade" id="day2" role="tabpanel">
                        <!-- Event 1 (Day 2) -->
                        <div class="wow fadeInUp mb-4" data-wow-delay=".2s">
                            <div class="event-item-bg d-flex flex-column flex-lg-row align-items-center w-100">
                                
                                <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start ps-lg-4">
                                    <h3 class="text-white mb-2 fs-24 fw-bold">Events That Leave a<br>Impression</h3>
                                    <p class="text-white-op-7 mb-0 fs-15 lh-base">
                                        A personal portfolio is a curated collection of<br>an individual's professional work
                                    </p>
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-center px-lg-3">
                                    <img src="/images/news/s1.webp" class="event-card-img" alt="">
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-start">
                                    <div class="event-info-box ps-lg-4">
                                        <div class="d-flex align-items-start mb-4">
                                            <i class="fa fa-clock fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">10 Am To 10 Pm</span>
                                                <span class="info-desc">20 April 2026</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-map-marker-alt fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">Mirpur 01 Road N 12 Dhaka</span>
                                                <span class="info-desc">Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 text-center text-lg-end pe-lg-4">
                                    <a href="/tickets" class="btn-main fx-slide">
                                        <span>Buy Ticket <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Day 3 Content -->
                    <div class="tab-pane fade" id="day3" role="tabpanel">
                       <!-- Event 1 (Day 3) -->
                        <div class="wow fadeInUp mb-4" data-wow-delay=".2s">
                            <div class="event-item-bg d-flex flex-column flex-lg-row align-items-center w-100">
                                
                                <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start ps-lg-4">
                                    <h3 class="text-white mb-2 fs-24 fw-bold">Events That Leave a<br>Impression</h3>
                                    <p class="text-white-op-7 mb-0 fs-15 lh-base">
                                        A personal portfolio is a curated collection of<br>an individual's professional work
                                    </p>
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-center px-lg-3">
                                    <img src="/images/news/s1.webp" class="event-card-img" alt="">
                                </div>
                                
                                <div class="col-lg-3 mb-4 mb-lg-0 text-start">
                                    <div class="event-info-box ps-lg-4">
                                        <div class="d-flex align-items-start mb-4">
                                            <i class="fa fa-clock fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">10 Am To 10 Pm</span>
                                                <span class="info-desc">20 April 2026</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <i class="fa fa-map-marker-alt fw-bold"></i>
                                            <div class="ms-3">
                                                <span class="info-title">Mirpur 01 Road N 12 Dhaka</span>
                                                <span class="info-desc">Bangladesh</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 text-center text-lg-end pe-lg-4">
                                    <a href="/tickets" class="btn-main fx-slide">
                                        <span>Buy Ticket <i class="fa fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter CTA -->
        <section class="section-dark p-0 newsletter-gradient" aria-label="section">
            <div class="container text-center relative z-4">
                <h2 class="fs-60 text-white fw-bold mb-5 lh-1-2 wow fadeInUp" data-wow-delay=".2s">Get Latest Updateds Subscribe<br>To Our Newsletter</h2>
                
                <div class="row justify-content-center wow fadeInUp" data-wow-delay=".4s">
                    <div class="col-lg-6">
                        <form class="position-relative d-flex align-items-center w-100">
                            <input type="email" class="form-control newsletter-input px-4" placeholder="Enter your email" required>
                            <button type="submit" class="position-absolute end-0 me-2 newsletter-btn">
                                <i class="fa fa-paper-plane fs-18"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php include(__DIR__ . '/../includes/footer.php'); ?>

<?php include(__DIR__ . '/../includes/scripts.php'); ?>




