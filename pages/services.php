<?php include(__DIR__ . '/../includes/head.php'); ?>

<?php include(__DIR__ . '/../includes/header.php'); ?>

<style>
    .service-card {
        background: #120e26; /* Theme navy base */
        background: radial-gradient(circle at 100% 0%, #1c224a 0%, #161536 50%, #120e26 100%);
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        min-height: 280px;
        transition: all 0.4s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        padding: 12px;
        gap: 12px;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        border-color: #764DF0;
    }

    .service-card-text {
        padding: 20px 10px 20px 25px; /* Reduced paddings */
        flex: 1.3;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .service-card-image {
        flex: 1;
        position: relative;
        overflow: hidden; 
        border-radius: 15px;
        z-index: 1;
    }

    /* Complex 3-part cutout for smooth "S" curve - matches card base corner color */
    .service-cutout {
        position: absolute;
        top: -1px;
        right: -1px;
        width: 85px; 
        height: 85px;
        background: #1c224a; /* Matches top-right gradient blue color */
        border-bottom-left-radius: 35px;
        z-index: 2;
    }

    /* Top inverted corner */
    .service-cutout::before {
        content: '';
        position: absolute;
        top: 0;
        left: -20px;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-right-radius: 20px;
        box-shadow: 10px -10px 0 10px #1c224a;
    }

    /* Bottom inverted corner */
    .service-cutout::after {
        content: '';
        position: absolute;
        bottom: -20px;
        right: 0;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-right-radius: 20px;
        box-shadow: 10px -10px 0 10px #1c224a;
    }

    .service-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
    }

    .service-card h3 {
        color: #fff;
        font-size: 22px; /* Smaller font */
        margin-bottom: 12px;
        font-weight: 700;
        line-height: 1.2;
    }

    .service-card p {
        color: #fff;
        font-size: 14px; /* Smaller font */
        line-height: 1.5;
        margin-bottom: 20px;
        opacity: 0.8;
    }

    .service-icon-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 50px; /* Reduced badge size */
        height: 50px;
        background: #764DF0; 
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 5;
        box-shadow: 0 5px 12px rgba(118, 77, 240, 0.4);
    }

    .service-icon-badge i {
        color: #fff;
        font-size: 18px; /* Smaller icon */
    }

    .btn-service {
        background: #764DF0;
        color: #fff !important;
        padding: 4px 4px 4px 18px;
        border-radius: 100px;
        display: inline-flex;
        align-items: center;
        font-weight: 700;
        font-size: 14px; /* Smaller text */
        text-transform: none;
        width: fit-content;
        transition: 0.3s;
        border: none;
        gap: 8px;
    }

    .btn-service .arrow {
        background: #fff;
        color: #764DF0;
        width: 32px; /* Scaled down button arrow */
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        transition: 0.3s;
    }

    .btn-service:hover .arrow i {
        transform: rotate(-45deg);
    }

    @media (max-width: 991px) {
        .service-card {
            flex-direction: column-reverse;
            min-height: auto;
        }
        .service-card-text {
            padding: 20px;
        }
        .service-card-image {
            height: 250px;
            width: 100%;
        }
        .service-icon-badge {
            transform: translate(0, 0);
            top: 10px;
            right: 10px;
        }
        .service-card h3 {
            font-size: 22px;
        }
    }
</style>

<div id="wrapper">
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section hero begin -->
        <section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-500 jarallax">
            <img src="/images/background/2.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-bottom h-50"></div>
            <div class="sw-overlay op-5"></div>
            <div class="abs w-80 bottom-10 z-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-between gx-5">
                        <div class="col-lg-6">
                            <div class="relative wow mask-right">
                                <div class="text-start">
                                    <h1 class="fs-96 text-uppercase fs-sm-10vw mb-0 lh-1">Our Services</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".3s">
                            <p class="mb-0">Orchestrating versatile mastery that spans weddings, government affairs, festive celebrations, and any one off event where we transform visions into unforgettable realities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section hero end -->

        <section id="section-services" class="bg-dark section-dark pt-80 pb-80">
            <div class="container">
                <div class="row g-4 gx-5">
                    
                    <!-- Wedding Planning -->
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Wedding Planning & Coordination</h3>
                                <p>We create magical wedding experiences tailored to your unique love story. From venue selection to day-of coordination, we handle every detail with precision and care.</p>
                                <a href="/contact" class="btn-service">
                                    <span>See More</span> 
                                    <span class="arrow"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-cutout"></div>
                                <div class="service-icon-badge">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <img src="/images/news/s1.webp" alt="Wedding Planning">
                            </div>
                        </div>
                    </div>
                    <!-- Wedding Planning end -->

                    <!-- Birthday Parties -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Birthday & Private Parties</h3>
                                <p>Transform your private celebrations into unforgettable memories. We specialize in themed decor, entertainment, and personalized experiences for all ages.</p>
                                <a href="/contact" class="btn-service">
                                    <span>See More</span> 
                                    <span class="arrow"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-cutout"></div>
                                <div class="service-icon-badge">
                                    <i class="fa fa-birthday-cake"></i>
                                </div>
                                <img src="/images/news/s2.webp" alt="Birthday Parties">
                            </div>
                        </div>
                    </div>
                    <!-- Birthday Parties end -->

                    <!-- Corporate Events -->
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Corporate Events & Conferences</h3>
                                <p>Elevate your brand with professional corporate events. We provide end-to-end management for seminars, product launches, and high-impact gala dinners.</p>
                                <a href="/contact" class="btn-service">
                                    <span>See More</span> 
                                    <span class="arrow"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-cutout"></div>
                                <div class="service-icon-badge">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <img src="/images/news/s3.webp" alt="Corporate Events">
                            </div>
                        </div>
                    </div>
                    <!-- Corporate Events end -->

                    <!-- Music Events -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Music & Entertainment Events</h3>
                                <p>From live concerts to cultural festivals, we bring high-energy entertainment to life with top-tier sound, lighting, and expert stage management.</p>
                                <a href="/contact" class="btn-service">
                                    <span>See More</span> 
                                    <span class="arrow"><i class="fa fa-arrow-right"></i></span>
                                </a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-cutout"></div>
                                <div class="service-icon-badge">
                                    <i class="fa fa-music"></i>
                                </div>
                                <img src="/images/news/s4.webp" alt="Music Events">
                            </div>
                        </div>
                    </div>
                    <!-- Music Events end -->

                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
</div>

<?php include(__DIR__ . '/../includes/footer.php'); ?>

<?php include(__DIR__ . '/../includes/scripts.php'); ?>




