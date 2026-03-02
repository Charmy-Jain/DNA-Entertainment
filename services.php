<?php include('includes/head.php'); ?>

<?php include('includes/header.php'); ?>

<style>
    .service-card {
        background: linear-gradient(135deg, #1A1230 0%, #110A1F 100%);
        border-radius: 30px;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        min-height: 380px;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        border-color: var(--primary-color);
    }

    .service-card-text {
        padding: 40px;
        flex: 1.2;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .service-card-image {
        flex: 1;
        position: relative;
        overflow: hidden;
    }

    .service-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 40px 0 0 40px;
        clip-path: polygon(15% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 15%);
    }

    .service-card h3 {
        color: #fff;
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: 700;
        line-height: 1.2;
    }

    .service-card p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 30px;
    }

    .service-icon-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: var(--primary-color); 
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        box-shadow: 0 10px 20px rgba(118, 77, 240, 0.3);
    }

    .service-icon-badge i {
        color: #fff;
        font-size: 24px;
    }

    .btn-service {
        background: var(--primary-color);
        color: #fff;
        padding: 12px 25px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        font-weight: 700;
        text-transform: none;
        width: fit-content;
        transition: 0.3s;
    }

    .btn-service:hover {
        background: var(--secondary-color);
        color: #fff;
        transform: scale(1.05);
    }

    .btn-service .arrow {
        background: #fff;
        color: var(--primary-color);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 15px;
        font-size: 14px;
    }

    @media (max-width: 991px) {
        .service-card {
            flex-direction: column;
        }
        .service-card-image img {
            border-radius: 0 0 30px 30px;
            clip-path: none;
        }
        .service-icon-badge {
            top: auto;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<div id="wrapper">
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section hero begin -->
        <section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-500 jarallax">
            <img src="images/background/2.webp" class="jarallax-img" alt="">
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
                            <p class="mb-0">Explore our comprehensive event services designed to bring your vision to life with precision, creativity, and professional excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section hero end -->

        <section id="section-services" class="bg-dark section-dark pt-80 pb-80">
            <div class="container">
                <div class="row g-4 gx-5">
                    
                    <!-- service item begin -->
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Wedding Planning & Coordination</h3>
                                <p>We create magical wedding experiences tailored to your unique love story. From venue selection to day-of coordination, we handle every detail.</p>
                                <a href="contact.php" class="btn-service">See More <span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-icon-badge">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <img src="images/news/s1.webp" alt="Wedding Planning">
                            </div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Birthday & Private Parties</h3>
                                <p>Transform your private celebrations into unforgettable memories. We specialize in themed decor, entertainment, and personalized experiences.</p>
                                <a href="contact.php" class="btn-service">See More <span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-icon-badge">
                                    <i class="fa fa-birthday-cake"></i>
                                </div>
                                <img src="images/news/s2.webp" alt="Birthday Parties">
                            </div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Corporate Events & Conferences</h3>
                                <p>Elevate your brand with professional corporate events. We provide end-to-end management for seminars, product launches, and gala dinners.</p>
                                <a href="contact.php" class="btn-service">See More <span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-icon-badge">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <img src="images/news/s3.webp" alt="Corporate Events">
                            </div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-card">
                            <div class="service-card-text">
                                <h3>Music & Entertainment Events</h3>
                                <p>From live concerts to cultural festivals, we bring high-energy entertainment to life with top-tier sound, lighting, and stage management.</p>
                                <a href="contact.php" class="btn-service">See More <span class="arrow"><i class="fa fa-arrow-right"></i></span></a>
                            </div>
                            <div class="service-card-image">
                                <div class="service-icon-badge">
                                    <i class="fa fa-music"></i>
                                </div>
                                <img src="images/news/s4.webp" alt="Music Events">
                            </div>
                        </div>
                    </div>
                    <!-- service item end -->

                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
</div>

<?php include('includes/footer.php'); ?>

<?php include('includes/scripts.php'); ?>
