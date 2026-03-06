<?php include(__DIR__ . '/../includes/head.php'); ?>

<?php include(__DIR__ . '/../includes/header.php'); ?>

    <style>
        .float-anim {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        #show-more-content {
            transition: all 0.5s ease;
        }
        .rounded-20 {
            border-radius: 20px;
        }
        .rounded-10 {
            border-radius: 10px;
        }
        .hover-scale-1-2 {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-scale-1-2:hover {
            transform: scale(1.15) rotate(2deg);
            z-index: 5;
            position: relative;
        }
        /* Larger Square 3D Fan Layout */
        .sliding-3d-wrap {
            position: relative;
            height: 550px; 
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            perspective: 2500px;
            overflow: visible; 
            margin-top: -60px; /* Shifted upwards */
            padding-left: 60px; /* Shifted the whole fan slightly to the right */
        }
        .sliding-card {
            position: absolute;
            width: 350px; /* Larger Square Size */
            height: 350px; /* Square Aspect Ratio */
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0,0,0,0.6);
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .sliding-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
            transition: 1s;
        }

        /* Spread out 8-Card Stack to de-congest */
        .s-card-1 { transform: translateX(-320px) translateZ(-500px) rotateY(45deg); z-index: 1; opacity: 0.1; }
        .s-card-2 { transform: translateX(-240px) translateZ(-400px) rotateY(35deg); z-index: 2; opacity: 0.3; }
        .s-card-3 { transform: translateX(-160px) translateZ(-300px) rotateY(25deg); z-index: 3; opacity: 0.5; }
        .s-card-4 { transform: translateX(-80px) translateZ(-150px) rotateY(15deg); z-index: 4; opacity: 0.8; }
        .s-card-5 { transform: translateX(0) translateZ(100px) rotateY(0deg); z-index: 10; opacity: 1; }
        .s-card-6 { transform: translateX(80px) translateZ(-150px) rotateY(-15deg); z-index: 4; opacity: 0.8; }
        .s-card-7 { transform: translateX(160px) translateZ(-300px) rotateY(-25deg); z-index: 3; opacity: 0.5; }
        .s-card-8 { transform: translateX(240px) translateZ(-400px) rotateY(-35deg); z-index: 2; opacity: 0.3; }

        .s-card-5 img { filter: brightness(1.1); }

        .sliding-card:hover {
            transform: scale(1.1) translateZ(250px) translateY(-30px) !important;
            z-index: 100 !important;
            opacity: 1 !important;
        }
        .sliding-card:hover img { filter: brightness(1.2); }

        /* Compact Section Padding */
        #section-story { padding: 50px 0 !important; }
        #section-minds { padding: 50px 0 !important; }
        #section-locations { padding: 50px 0 !important; }
        #section-csr { padding: 50px 0 !important; }

        /* CSR Card Styling */
        .csr-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            overflow: hidden;
            transition: 0.4s;
            height: 100%;
        }
        .csr-card:hover {
            background: rgba(255,255,255,0.07);
            transform: translateY(-5px);
        }
        .csr-img-wrap {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        .csr-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.6s;
        }
        .csr-card:hover .csr-img-wrap img {
            transform: scale(1.1);
        }
        .csr-content { padding: 25px; }
        .csr-overlay-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.8);
        }

        /* Document Card Styling - New Grid Format (Smaller) */
        .doc-card {
            background: rgba(255, 255, 255, 0.03); 
            border: 1px solid rgba(118, 77, 240, 0.2); 
            padding: 30px 25px; /* Reduced padding */
            border-radius: 15px; /* Slightly smaller radius */
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
        }
        .doc-card h3 {
            font-size: 20px; /* Smaller title */
        }
        .doc-card p {
            font-size: 14px; /* Smaller description */
        }
        .doc-card:hover {
            border-color: #764DF0; 
            transform: translateY(-8px); /* Less dramatic lift */
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .doc-icon-circle {
            width: 55px; /* Smaller icon circle */
            height: 55px;
            background: linear-gradient(135deg, #764DF0, #442490); 
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 8px 15px rgba(118, 77, 240, 0.3);
        }
        .doc-icon-circle i {
            font-size: 24px; /* Smaller icon */
            color: #fff;
        }
        .btn-read-more {
            margin-top: auto;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s;
        }
        .btn-read-more:hover {
            color: #764DF0;
        }
        .btn-read-more i {
            font-size: 14px;
            transition: 0.3s;
        }
        .btn-read-more:hover i {
            transform: translateX(5px);
        }

        /* Font Styling & Spacing */
        .story-text { padding-right: 50px; }
        .story-text p { 
            font-size: 15px; 
            line-height: 1.8; 
            opacity: 0.8; 
            max-width: 450px; /* Reduced width to prevent overlap */
        }
    </style>

        <section id="section-hero-about" class="section-dark text-light jarallax relative mh-800" data-video-src="mp4:/video/4.mp4" data-jarallax-video="mp4:/video/4.mp4">
            <img src="/images/background/5.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-8"></div>
            <div class="abs abs-centered z-2 w-80">
                <div class="container wow scaleIn" data-wow-duration="3s">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle">About DNA Networks</div>
                            <h1 class="fs-100 text-uppercase fs-sm-8vw mb-4 lh-1">Pioneering Global Music Experiences</h1>
                            <div class="spacer-single"></div>
                            <a class="btn-main mx-2 fx-slide" href="#section-story"><span>Read Our Story</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story -->
        <section id="section-story" class="bg-dark section-dark text-light border-bottom border-white-op-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-3 relative">
                          <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Our Story</div>
                          <h2 class="wow fadeInUp" data-wow-delay=".4s">Pioneering Global Music Experiences</h2>
                    </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 story-text">
                        <p class="wow fadeInUp" data-wow-delay=".4s">In 1986, Dr. T Venkat Vardhan began his journey by securing the rights to air MTV’s top 20 music videos in india. Obtaining these rights inspired his goal to lay the foundation for our live music industry by bringing international music acts to India. His vision to introduce global experiences and passion for music led to the birth of DNA Networks – a pioneering force in the live music and events industry in India.</p>

                        <p class="mt-4 wow fadeInUp" data-wow-delay=".6s">Which resulted in our first major breakthrough in 1988, with the success from the band Europe’s performance in Mumbai led to a surge in interest from artists. This in tandem for Dr. Vardhan’s business acumen resulted in the arrival of renowned international artists like The Rolling Stones, Pink Floyd, Bryan Adams, Metallica, Aerosmith, The Scorpions,, Mark Knophler, Beyoncé, Shakira, and The Black Eyed Peas—artists that were once only a dream for us in India.</p>
                        
                        <div id="show-more-content" style="display: none;">
                            <p class="mt-4">His strong focus on innovation led to the inception of “Sportainment” – blending entertainment with sports. Leading to the expansion of our business expertise to manage major sports properties such as the IPL, ISL, Pro Kabaddi and more. This showcased the company’s foresight and vision, and further solidified our reputation and ability to establish strategic alliances with premier sporting associations like the BCCI, ICC, and Hockey India.</p>

                            <p class="mt-4">Under his leadership, DNA Networks thrives on core values such as reliability, consistent quality delivery, equality, respect, and teamwork. These values have not only earned us a strong market reputation but also fostered close relationships with key players in the industry. With our legacy spanning over three decades, we define the landscape of live events by setting new standards and delivering unforgettable moments to individuals.</p>
                        </div>

                        <a id="btn-show-more" class="btn-main mt-4 wow fadeInUp" data-wow-delay=".8s" href="javascript:void(0)"><span>Read More</span></a>
                    </div>

                    <div class="col-lg-6">
                        <div class="sliding-3d-wrap wow fadeInRight" data-wow-delay=".5s">
                            <div class="sliding-card s-card-1"><img src="/images/news/s1.webp" alt=""></div>
                            <div class="sliding-card s-card-2"><img src="/images/news/s2.webp" alt=""></div>
                            <div class="sliding-card s-card-3"><img src="/images/background/2.webp" alt=""></div>
                            <div class="sliding-card s-card-4"><img src="/images/news/s3.webp" alt=""></div>
                            <div class="sliding-card s-card-5"><img src="/images/news/s4.webp" alt=""></div>
                            <div class="sliding-card s-card-6"><img src="/images/news/s5.webp" alt=""></div>
                            <div class="sliding-card s-card-7"><img src="/images/news/s6.webp" alt=""></div>
                            <div class="sliding-card s-card-8"><img src="/images/background/11.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Minds That Matter -->
        <section id="section-minds" class="bg-dark section-dark text-light border-bottom border-white-op-1" aria-label="section">
            <div class="container relative z-4">
                <div class="row g-4 justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                          <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Leadership</div>
                          <h2 class="wow fadeInUp" data-wow-delay=".2s">Minds That Matter</h2>
                          <p class="lead wow fadeInUp">We take pride in our diverse and dynamic team, united by a shared passion for innovation and excellence. Get to know the faces behind our company's achievements and discover the collective brilliance that fuels our journey.</p>
                    </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-10">
                        
                        <!-- Team Member 1 -->
                        <div class="border-white-bottom-op-2 pb-5 mb-5 wow fadeInUp" data-wow-delay=".2s">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-3">
                                    <div class="hover relative rounded-1 overflow-hidden scale-in-mask">
                                        <img src="/images/team/1.webp" class="w-100 hover-scale-1-1" alt="Rohahn Vardhan">
                                    </div>
                                </div>
                                <div class="col-md-9 ms-md-4 ms-lg-0">
                                    <h3 class="mb-1">Rohahn Vardhan</h3>
                                    <h6 class="id-color mb-3">Director & Chief Digital Officer</h6>
                                    <p class="fs-18 mb-0 op-8">Meet our Trailblazer – in Chief, Rohahn is a new age director who along with leadership skills, is a football ace. He has a love for sports much like his father, Dr Venkat Vardhan. His passion for NEW DEVELOPMENTS works well as he guides us into new frontiers like E-Sports, Digital Marketing, International Business.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 2 -->
                        <div class="border-white-bottom-op-2 pb-5 mb-5 wow fadeInUp" data-wow-delay=".2s">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-3">
                                    <div class="hover relative rounded-1 overflow-hidden scale-in-mask">
                                        <img src="/images/team/2.webp" class="w-100 hover-scale-1-1" alt="Raoul Vardhan">
                                    </div>
                                </div>
                                <div class="col-md-9 ms-md-4 ms-lg-0">
                                    <h3 class="mb-1">Raoul Vardhan</h3>
                                    <h6 class="id-color mb-3">Director</h6>
                                    <p class="fs-18 mb-0 op-8">Raoul brings a MILLENNIAL twist to the table by keeping up with pop culture and the changing trends in the industry. He bridges the gap between modern and traditional. His contemporary thought process keeps digital communication fresh. His passion for PEOPLE’S EXPERIENCE brings great innovation in the field of Restaurant Management & Hospitality Services.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 3 -->
                        <div class="border-white-bottom-op-2 pb-5 mb-5 wow fadeInUp" data-wow-delay=".2s">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-3">
                                    <div class="hover relative rounded-1 overflow-hidden scale-in-mask">
                                        <img src="/images/team/3.webp" class="w-100 hover-scale-1-1" alt="K.T. Majeed">
                                    </div>
                                </div>
                                <div class="col-md-9 ms-md-4 ms-lg-0">
                                    <h3 class="mb-1">K.T. Majeed</h3>
                                    <h6 class="id-color mb-3">Director & Chief Financial Officer</h6>
                                    <p class="fs-18 mb-0 op-8">Heading finance and administration, Majeed is more than just NUMBER CRUNCHER. He defines financial metrics to measure success. With over 25 years of experience at DNA Networks, his templates, and guidelines for cost efficiency in events services are the yardsticks in the company. Majeed has been the foreman in negotiating critical strategic financial decisions for several business conglomerates.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 4 -->
                        <div class="border-white-bottom-op-2 pb-5 mb-5 wow fadeInUp" data-wow-delay=".2s">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-3">
                                    <div class="hover relative rounded-1 overflow-hidden scale-in-mask">
                                        <img src="/images/team/4.webp" class="w-100 hover-scale-1-1" alt="Sunil Mathew">
                                    </div>
                                </div>
                                <div class="col-md-9 ms-md-4 ms-lg-0">
                                    <h3 class="mb-1">Sunil Mathew</h3>
                                    <h6 class="id-color mb-3">Director & Vice President</h6>
                                    <p class="fs-18 mb-0 op-8">In the corporate-focused world of event industry, where creativity meets commerce. The master veteran Sunil Mathew who has set the BAR high, he has been with DNA Networks for over 24 years overseeing operations of the live entertainment business. He sits in as a Chief Marketing Officer for several business conglomerates. He turns a mere event into a dynamic platform for businesses to showcase their products, services, and commitment to the world.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member 5 -->
                        <div class="pb-3 wow fadeInUp" data-wow-delay=".2s">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-3">
                                    <div class="hover relative rounded-1 overflow-hidden scale-in-mask">
                                        <img src="/images/team/5.webp" class="w-100 hover-scale-1-1" alt="Harisha Prabhu">
                                    </div>
                                </div>
                                <div class="col-md-9 ms-md-4 ms-lg-0">
                                    <h3 class="mb-1">Harisha Prabhu</h3>
                                    <h6 class="id-color mb-3">Director & Vice President</h6>
                                    <p class="fs-18 mb-0 op-8">In the world of creating TIMELESS experiences, Harisha is the beacon of strategy and has distinguished himself as the Chief Operating Officer at DNA. He meticulously measures the success of the company’s strategies, analyzing data and feedback to refine our approaches continually. Over 20 Years of commitment to continuous improvement ensures that each event surpasses the last. Harisha is paving way for the new generations to come.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Where You Can Find Us -->
        <section id="section-locations" class="bg-dark section-dark text-light pt-80 jarallax relative">
            <img src="/images/background/2.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-top"></div>
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-9"></div>
            <div class="container relative z-4">
                <div class="row g-4 text-center">
                    <div class="col-lg-12">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Locations</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Where You Can Find Us</h2>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                
                <div class="row g-4 justify-content-center text-center">
                    
                    <div class="col-lg-4 col-md-6 mb-4 border-end-lg border-white-op-1 border-bottom-md border-white-op-1 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".2s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Bengaluru</h3>
                        <p class="op-8 mb-3 fs-15">No 7 (old no 215) Bellary Road, <br>Palace Orchards Bengaluru 560 080, India<br>
                        +91 80 4113 7995 | +91 80 2361 6680</p>
                        <a href="https://goo.gl/maps/YUVwTd8o9Xpz8K5H9" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4 border-end-lg border-white-op-1 border-bottom-md border-white-op-1 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".3s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Mumbai</h3>
                        <p class="op-8 mb-3 fs-15">Unit No 1020, the Summit Business Bay, <br>Prakash Wadi, Andheri Kurla Road,
                        Andheri East Mumbai 400069<br>
                        +91 98922 19134</p>
                        <a href="https://www.google.com/maps/place/19%C2%B006%2759.6%22N+72%C2%B051%2726.0%22E" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".4s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Kolkata</h3>
                        <p class="op-8 mb-3 fs-15">Acropolis Mall, 5th Floor, Unit No 6, <br>1858/1 Rajdanga Main Road
                        Kolkata Ã¢â‚¬â€œ 700107<br>
                        033-40612042 | 98453 91354</p>
                        <a href="https://goo.gl/maps/WrzU2cL2c7HCxGzK7" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 border-end-lg border-white-op-1 border-bottom-md border-white-op-1 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".5s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Hyderabad</h3>
                        <p class="op-8 mb-3 fs-15">Plot No.65, Ground Floor, Mithilanagar Colony, <br>Banjarahills, Road No.12, Hyderabad 500 034, India<br>
                        +91 40 2338 6683 | +91 96189 95789 | +91 98858 69159</p>
                        <a href="https://goo.gl/maps/aqMkn8s7MgDhJyPf6" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 border-end-lg border-white-op-1 border-bottom-md border-white-op-1 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".6s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Delhi</h3>
                        <p class="op-8 mb-3 fs-15">JA 0123, First Floor, DLF Tower A, <br>Jasola, New Delhi Ã¢â‚¬â€œ 110025<br>
                        +91 8010106001</p>
                        <a href="https://goo.gl/maps/K7QkfAsTdd5SUyqc6" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 pb-4 pb-lg-0 wow fadeInUp" data-wow-delay=".7s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Dubai</h3>
                        <p class="op-8 mb-3 fs-15">73, Unique Hub Business Center, <br>Shaikha Mhara-Al Qusais Bldg, Dubai, UAE<br>
                        +91 99809 99982</p>
                        <a href="https://goo.gl/maps/rfp8B1qqNKtZwegQ7" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay=".8s">
                        <i class="fs-60 icofont-location-pin id-color mb-3"></i>
                        <h3 class="mb-2">Cape Town</h3>
                        <p class="op-8 mb-3 fs-15">Unit A14, Platinum Junction, School St, <br>Milnerton, Capetown, Western Cape, 7441<br>
                        +91 99809 99982</p>
                        <a href="https://goo.gl/maps/nNET7aARQ1k9gPWo6" target="_blank" class="btn-main btn-sm">View Location</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- CSR Hero -->
        <section class="section-dark p-0 overflow-hidden">
             <div class="container-fluid p-0 relative">
                <img src="/images/background/10.png" class="w-100 op-4" style="height: 400px; object-fit: cover;" alt="">
                <div class="abs abs-centered text-center w-100">
                    <h1 class="fs-80 fs-sm-40 text-uppercase ls-5 wow fadeInDown">Corporate Social Responsibility</h1>
                </div>
             </div>
        </section>

        <!-- CSR Content -->
        <section id="section-csr" class="bg-dark section-dark text-light border-bottom border-white-op-1">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-5">
                        <h2 class="fs-60 lh-1 mb-0 wow fadeInLeft">HOW DO WE <br><span class="id-color">GIVE BACK</span></h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-4 border border-white-op-1 bg-white-op-05 rounded-10 wow fadeInRight">
                            <p class="fs-15 op-8 mb-0 lh-lg">We believe in making a positive impact beyond business. Our commitment to Corporate Social Responsibility (CSR) drives us to actively engage with communities and causes that matter. Through strategic initiatives, philanthropic efforts, and community partnerships, we aim to create a better world. From environmental sustainability to education and social welfare, we're dedicated to uplifting lives and nurturing a brighter future. Explore how we're turning compassion into action and join us in building a more inclusive and sustainable world.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- CSR Grid -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="csr-card">
                            <div class="csr-img-wrap">
                                <img src="/images/background/3.webp" alt="Sunbird Trust">
                                <div class="csr-overlay-text">Sunbird Trust</div>
                            </div>
                            <div class="csr-content">
                                <p class="mb-0 op-7">Education of poor and underprivileged children (From 2017-2019 helped over 50 children)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="csr-card">
                            <div class="csr-img-wrap">
                                <img src="/images/background/4.webp" alt="Golden Valley Education Trust">
                                <div class="csr-overlay-text">Golden Valley Education Trust</div>
                            </div>
                            <div class="csr-content">
                                <p class="mb-0 op-7">Free mid-day meals for all students (done annually since 2016 to present)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="csr-card">
                            <div class="csr-img-wrap">
                                <img src="/images/news/s1.webp" alt="GVET - Sponsorship">
                                <div class="csr-overlay-text">GVET - Sponsorship</div>
                            </div>
                            <div class="csr-content">
                                <p class="mb-0 op-7">Sponsorship of underprivileged students college fee (This is an annual CSR grant since 2017 that has to date benefited over 800 students)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="csr-card">
                            <div class="csr-img-wrap">
                                <img src="/images/news/s2.webp" alt="The Light Foundation">
                                <div class="csr-overlay-text">The Light Foundation</div>
                            </div>
                            <div class="csr-content">
                                <p class="mb-0 op-7">Renovation and development of Government schools (2019-2020)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="csr-card">
                            <div class="csr-img-wrap">
                                <img src="/images/news/s3.webp" alt="Connect to the Heal Trust">
                                <div class="csr-overlay-text">Connect to the Heal Trust</div>
                            </div>
                            <div class="csr-content">
                                <p class="mb-0 op-7">Medical camps & cancer awareness for early detection of cancer for marginalized and economically challenged people (2023-2024)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subtle Divider -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-bottom border-white-op-1 my-5"></div>
                    </div>
                </div>

                <!-- Document Cards Section -->
                <div class="row mt-2 g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="doc-card">
                            <div class="doc-icon-circle">
                                <i class="icofont-listing-box"></i>
                            </div>
                            <h3 class="mb-3">Programs and Projects</h3>
                            <p class="op-7 mb-4">View more about our CSR Programs and projects. Exploration of current and upcoming social initiatives.</p>
                            <a href="#" class="btn-read-more">
                                <span>Read More</span>
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="doc-card">
                            <div class="doc-icon-circle">
                                <i class="icofont-law-document"></i>
                            </div>
                            <h3 class="mb-3">Our CSR Policy</h3>
                            <p class="op-7 mb-4">Read more about our CSR policy. Understanding our ethical guidelines and social commitment standards.</p>
                            <a href="#" class="btn-read-more">
                                <span>Read More</span>
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="doc-card">
                            <div class="doc-icon-circle">
                                <i class="icofont-shield-policeman"></i>
                            </div>
                            <h3 class="mb-3">Our Privacy Policy</h3>
                            <p class="op-7 mb-4">Read more about our privacy policy. Ensuring transparency and data protection for all our community members.</p>
                            <a href="#" class="btn-read-more">
                                <span>Read More</span>
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include(__DIR__ . '/../includes/footer.php'); ?>

<?php include(__DIR__ . '/../includes/scripts.php'); ?>

    <script>
        document.getElementById('btn-show-more').addEventListener('click', function() {
            var content = document.getElementById('show-more-content');
            var btn = this;
            if (content.style.display === 'none') {
                content.style.display = 'block';
                btn.querySelector('span').innerText = 'Read Less';
            } else {
                content.style.display = 'none';
                btn.querySelector('span').innerText = 'Read More';
            }
        });

        // Simple Auto-Sliding Script for the 3D Fan
        let currentPos = 0;
        const cards = document.querySelectorAll('.sliding-card');
        const classes = ['s-card-1', 's-card-2', 's-card-3', 's-card-4', 's-card-5', 's-card-6', 's-card-7', 's-card-8'];

        setInterval(() => {
            cards.forEach((card, index) => {
                card.classList.remove(...classes);
                let newPos = (index + currentPos) % classes.length;
                card.classList.add(classes[newPos]);
            });
            currentPos = (currentPos + 1) % classes.length;
        }, 2000); // Speed up to 2 seconds per slide
    </script>




