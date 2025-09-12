<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package datademocrats
 */

get_header();
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg"
                    alt="Data Democrats">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">
                                    Driving Digital Transformation
                                </h1>
                                <p class="fs-5 text-white-50 mb-4 animated slideInDown">
                                    We empower businesses with next-gen technology solutions, enabling agility,
                                    efficiency, and secure growth in a connected world.
                                </p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                    href="https://datademocrats.com/" target="_blank">
                                    Discover More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Core Values">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">
                                    Building Trust Through Innovation
                                </h1>
                                <p class="fs-5 text-white-50 mb-4 animated slideInDown">
                                    We believe in driving digital change with integrity, collaboration, and a
                                    customer-first mindset—delivering solutions that create real business impact.
                                </p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                    href="https://datademocrats.com//about" target="_blank">
                                    About Us
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-3.jpg"
                    alt="Technology Solutions">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">
                                    Innovative Technology Solutions
                                </h1>
                                <p class="fs-5 text-white-50 mb-4 animated slideInDown">
                                    From AI & Data Analytics to Cybersecurity, IoT, Cloud, and Smart City projects, we
                                    deliver end-to-end solutions for a smarter, safer, and connected future.
                                </p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                    href="https://datademocrats.com//services" target="_blank">
                                    Explore Services
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Left Images -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5"
                        src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="Data Democrats"
                        style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="<?php bloginfo('template_directory'); ?>/img/about-2.jpg" alt="Digital Transformation"
                        style="width: 200px; height: 200px;">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-4">Data Democrats – Driving Innovation with Purpose</h1>

                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            Data Democrats Solution LLP is an establishment dedicated to fostering a cohesive ecosystem
                            for
                            digital transformation across industries. Founded by seasoned industry veterans, we combine
                            innovation, agility, and expertise to deliver technology that truly empowers businesses.
                        </p>
                        <span class="text-primary">“Empowering Businesses Through Digital Change”</span>
                    </div>

                    <p class="mb-5">
                        Our mission is to enable organizations to thrive in the digital era by providing scalable and
                        human-centered technology solutions. From AI-driven analytics and cybersecurity to IoT, Cloud,
                        and Smart City projects, we design and integrate solutions that deliver measurable impact.
                        Guided by our core values—innovation, customer-centricity, collaboration, and integrity—we aim
                        to be the trusted partner for digital growth and resilience.
                    </p>

                    <a class="btn btn-primary py-2 px-3 me-3" href="https://datademocrats.com//about" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3 mt-3 mt-lg-0 py-2 px-3"
                        href="https://datademocrats.com//contact" target="_blank">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Causes Start -->
<div class="container-xxl bg-light my-0 my-lg-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Solutions</div>
            <h1 class="display-6 mb-5">Innovative Technology Solutions Driving Digital Transformation</h1>
        </div>

        <div class="row g-4 g-lg-5 justify-content-center">

            <!-- SD-WAN -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>SD-WAN</small>
                        </div>
                        <h5 class="mb-3">Smart & Agile Networking</h5>
                        <p>Centralized management, secure multi-connection routing, cost savings, and real-time
                            visibility for modern enterprises.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/sd_wan_causes.jpg"
                            alt="SD-WAN">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/sd-wan"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cyber Security -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Cybersecurity</small>
                        </div>
                        <h5 class="mb-3">AI-Powered Protection</h5>
                        <p>Real-time threat detection, automated response, and adaptive security against evolving cyber
                            risks.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/cybersecurity_causes.jpg"
                            alt="Cybersecurity">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/cybersecurity"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- IoT -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Internet Of Things</small>
                        </div>
                        <h5 class="mb-3">Connected Intelligence</h5>
                        <p>Smart IoT solutions for homes, healthcare, cities, industries, and retail to drive efficiency
                            and automation.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/Internet of Things (IoT)_causes.jpg"
                            alt="IoT Solutions">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/iot"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Analytics & AI -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Data & AI</small>
                        </div>
                        <h5 class="mb-3">Smarter Decisions</h5>
                        <p>Real-time insights, predictive analytics, and intelligent automation powered by advanced
                            AI/ML techniques.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/data_anyalst_causes.jpg"
                            alt="Data & AI">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/data-analytics"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cloud & Data Center -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Cloud</small>
                        </div>
                        <h5 class="mb-3">Data Center & Cloud</h5>
                        <p>Reliable, scalable, and secure IT infrastructure including storage, networking, monitoring,
                            and virtualization.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/cloud_technology_causes.jpg"
                            alt="Cloud & Data Center">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/cloud"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industry 4.0 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Industry 4.0</small>
                        </div>
                        <h5 class="mb-3">Smart Manufacturing</h5>
                        <p>AI-driven insights, automation, and digital connectivity transforming manufacturing and
                            operations.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/illustration_ smart factory_causes.jpg"
                            alt="Industry 4.0">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/industry4"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI/ML Surveillance -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>AI/ML</small>
                        </div>
                        <h5 class="mb-3">AI-Powered Surveillance</h5>
                        <p>Facial/object recognition, real-time alerts, behavior analysis, and accurate video analytics
                            for security.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/AI_ML surveillance_causes.jpg"
                            alt="AI Surveillance">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/surveillance"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Smart City -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Smart City</small>
                        </div>
                        <h5 class="mb-3">Safe & Smart Cities</h5>
                        <p>AI-powered urban solutions with real-time analytics, predictive policing, and automated
                            emergency response.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/smart_city_causes.jpg"
                            alt="Smart City">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/smart-city"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Smart City -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Smart City</small>
                        </div>
                        <h5 class="mb-3">Safe & Smart Cities</h5>
                        <p>AI-powered urban solutions with real-time analytics, predictive policing, and automated
                            emergency response.</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid"
                            src="<?php bloginfo('template_directory'); ?>/img/index/causes/smart_city_causes.jpg"
                            alt="Smart City">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="https://datademocrats.com//services/smart-city"
                                target="_blank">
                                Learn More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Causes End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Services</div>
            <h1 class="display-6 mb-5">Smart Technology Solutions for Your Digital Growth</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/2.png" alt="SD-WAN Solutions">
                    <h5 class="mb-3">SD-WAN Solutions</h5>
                    <p class="mb-4">Next-gen networking with centralized management, enhanced security, cost efficiency,
                        and real-time performance monitoring.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//sdwan" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/1.jpg"
                        alt="Cybersecurity & Threat Detection">
                    <h5 class="mb-3">Cybersecurity & Threat Detection</h5>
                    <p class="mb-4">AI-driven defense with real-time threat monitoring, automated response, and advanced
                        behavior analysis to protect your assets.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//cybersecurity"
                        target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/3.jpg" alt="IoT Solutions">
                    <h5 class="mb-3">IoT & Smart Connectivity</h5>
                    <p class="mb-4">IoT-powered solutions that connect devices, improve automation, and provide
                        actionable insights across industries.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//iot" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/4.png" alt="Data Analytics & AI">
                    <h5 class="mb-3">Data Analytics & AI</h5>
                    <p class="mb-4">Transform data into actionable insights with AI, predictive analytics, and
                        automation to support smarter decision-making.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//ai" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/5.png" alt="Cloud & Data Center">
                    <h5 class="mb-3">Cloud & Data Center Services</h5>
                    <p class="mb-4">Scalable and secure cloud migration, hybrid infrastructure, and data center
                        modernization for future-ready enterprises.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//cloud" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid service-img-fluid mb-4"
                        src="<?php bloginfo('template_directory'); ?>/img/index/6.png"
                        alt="AI Surveillance & Smart Cities">
                    <h5 class="mb-3">AI Surveillance & Smart Cities</h5>
                    <p class="mb-4">AI/ML-powered surveillance, safe city projects, and real-time analytics ensuring
                        smarter, safer, and more connected communities.</p>
                    <a class="btn btn-outline-primary px-3" href="https://datademocrats.com//smartcity" target="_blank">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark feature pt-5">
    <div class="container pt-0 pt-lg-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">Why Choose Us<br>Data Democrats</h1>
                <p class="text-light mb-4">
                    At Data Democrats Solution LLP, we empower businesses to embrace the future of technology with
                    secure, scalable, and innovative digital solutions. Our expertise spans across AI, Data Analytics,
                    Cloud, Cybersecurity, IoT, and Smart City projects. With a people-first approach, industry
                    knowledge, and a commitment to integrity, we help organizations transform and thrive in the digital
                    age.
                </p>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>End-to-End Digital Transformation Services</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Customized AI & Data-Driven Solutions</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Secure, Scalable & Future-Ready Systems</span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>Dedicated Support & Long-Term Partnerships</span>
                </div>
                <div class="row g-4 g-lg-5 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <div class="d-flex">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">97</h2>
                                    <span class="text-primary ms-1" style="font-size: 1.5rem;">%</span>
                                </div>
                                <p class="text-white mb-0">Happy Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">820</h2>
                                <p class="text-white mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-user-tie fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">40</h2>
                                <p class="text-white mb-0">Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">3</h2>
                                <p class="text-white mb-0">Locations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pb-5">
                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                    data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-cogs fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">AI & Data Analytics</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        Harness the power of artificial intelligence and advanced analytics to make data-driven
                        decisions, boost performance, and unlock new business opportunities.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-cloud fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Cloud & IoT Solutions</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        From seamless cloud migration to IoT-enabled systems, we deliver smart solutions that optimize
                        operations and enable real-time insights.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-shield-alt fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Cybersecurity</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        Protect your business with advanced cybersecurity strategies, proactive monitoring, and
                        compliance-ready frameworks to ensure data safety and trust.
                    </p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                    data-wow-delay="0.6s" style="background-color: rgba(256, 256, 256, 0.1);">
                    <div class="d-flex align-items-center">
                        <div
                            class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                            <i class="fa fa-city fa-2x text-white"></i>
                        </div>
                        <div class="px-3">
                            <h4 class="text-white mb-3">Smart City Innovations</h4>
                        </div>
                    </div>
                    <p class="text-white mb-4">
                        We build intelligent, sustainable, and connected city solutions that enhance urban living,
                        improve governance, and ensure resource efficiency.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->


<!-- Our Core Strengths Start -->
<div class="container-xxl py-5">
    <div class="container pb-lg-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">Our Core Strengths</h6>
                    <h1 class="display-6 mb-0">Driving Digital Transformation with Trust & Innovation</h1>
                </div>
                <p class="mb-5">
                    At Data Democrats Solution LLP, we specialize in enabling organizations to thrive in the digital era
                    through innovation, scalable technology solutions, and trusted partnerships. With expertise across
                    AI, Cybersecurity, Cloud, IoT, and Industry 4.0, we help businesses achieve growth, efficiency, and
                    lasting impact.
                </p>
                <div class="row gy-4 gy-lg-5 gx-4 gx-lg-5">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Technology Expertise</h6>
                        </div>
                        <span>Proven capabilities in AI, Data Analytics, Cybersecurity, IoT, and Cloud solutions.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Industry-Focused Solutions</h6>
                        </div>
                        <span>Tailored digital transformation strategies for manufacturing, smart cities, healthcare,
                            and more.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Trusted Leadership</h6>
                        </div>
                        <span>Led by seasoned industry veterans with a commitment to innovation and integrity.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">End-to-End Support</h6>
                        </div>
                        <span>From strategy to implementation, we deliver complete digital transformation
                            services.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/index/our_core_strength.jpg"
                        alt="Data Democrats Team" style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">10+</h1>
                            <h2 class="text-white">Years</h2>
                            <h5 class="text-white mb-0">of Expertise</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Core Strengths End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container pb-5">
        <div class="d-flex flex-column mx-auto text-start text-lg-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-secondary">Our Leadership Team</h4>
            <h1 class="display-6 mb-4">The Visionaries Driving Data Democrats Solution LLP</h1>
            <p class="mb-0">At Data Democrats, our strength lies in the expertise and passion of our leaders.
                With decades of experience in technology consulting, digital transformation, and
                business innovation, our leadership team is committed to delivering scalable, secure,
                and impactful solutions that empower organizations to thrive in the digital era.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg"
                        alt="CEO - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Director Technology </small>
                        <h4 class="lh-base text-light">Madhsudhan Nambier</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg"
                        alt="Technical Director - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Director</small>
                        <h4 class="lh-base text-light">Hemkant Patil</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg"
                        alt="Production Manager - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Director</small>
                        <h4 class="lh-base text-light">Pramod Murkewar</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="team-item position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg"
                        alt="Sales & Marketing Head - Seven Star International Co.">
                    <div class="team-overlay">
                        <small class="mb-2">Sales & Marketing Head</small>
                        <h4 class="lh-base text-light">Advoiser</h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonials</div>
            <h1 class="display-6 mb-5">What People Say About Data Democrats</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“Data Democrats has transformed the way we analyze and present data. Their innovative solutions
                        helped us make evidence-based decisions with confidence.”</p>
                    <h5 class="mb-1">Rohit Mehta</h5>
                    <span class="fst-italic">Nonprofit Leader</span>
                </div>
            </div>

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“The team’s expertise in data storytelling made complex insights simple and impactful. Our
                        campaigns are now backed by solid numbers.”</p>
                    <h5 class="mb-1">Rahul Deshpande</h5>
                    <span class="fst-italic">Policy Analyst</span>
                </div>
            </div>

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“Working with Data Democrats gave us clarity and direction. Their data-driven approach brought
                        transparency and built trust with our stakeholders.”</p>
                    <h5 class="mb-1">Sneha Kulkarni</h5>
                    <span class="fst-italic">Community Organizer</span>
                </div>
            </div>

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“With Data Democrats’ support, we were able to present our research in a way that policymakers
                        actually understood and acted upon.”</p>
                    <h5 class="mb-1">Dr. Vikram Nair</h5>
                    <span class="fst-italic">Research Scholar</span>
                </div>
            </div>

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“The insights we received were game-changing. Their ability to combine data with grassroots
                        stories gave our initiative a powerful voice.”</p>
                    <h5 class="mb-1">Farah Khan</h5>
                    <span class="fst-italic">Social Entrepreneur</span>
                </div>
            </div>

            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>“Partnering with Data Democrats gave our NGO the confidence to scale. Their reports and visual
                        dashboards made fundraising much easier.”</p>
                    <h5 class="mb-1">Karan Patel</h5>
                    <span class="fst-italic">NGO Director</span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/NEC.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/IDIS.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/CISCO SYSTEMS.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/ESDS.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/ISHANI.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/BPE.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/BAY DATACOM.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/ARHASI.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/AMTRON.jpeg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/partners/LEAL SOLUTION.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Data Democrats</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Have questions about our data solutions, analytics services, or digital transformation offerings?
                    Here you’ll find answers to the most common queries from our clients.
                </p>
                <a class="btn btn-primary py-3 px-5" href="#contact">Ask Your Question</a>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What services does Data Democrats provide?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We specialize in data analytics, business intelligence, cloud solutions, AI/ML
                                    integrations,
                                    and digital transformation strategies to help businesses make data-driven decisions.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Do you offer customized data solutions?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, our team designs and implements tailor-made solutions based on your
                                    specific business requirements, industry, and scale of operations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: What industries do you serve?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We work across multiple industries such as finance, healthcare, retail,
                                    manufacturing,
                                    education, and IT — enabling each to harness the power of data effectively.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Do you provide training and workshops?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we conduct hands-on training, workshops, and consultation sessions to
                                    upskill your team in data literacy, analytics, and modern technologies.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: How do I get started with Data Democrats?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: You can reach out through our contact page or request a free consultation.
                                    Our experts will assess your needs and recommend the best solutions for your
                                    business.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->


<!-- Quote Start -->
<div class="container-fluid py-0 py-lg-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request A Consultation</h5>
                    <h1 class="mb-0">Kickstart Your Digital Transformation with Data Democrats</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Quick Response Within 24 Hours
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-headset text-primary me-3"></i>Expert Data & Tech Support</h5>
                    </div>
                </div>
                <p class="mb-4">
                    Ready to unlock the power of data-driven decision-making?
                    Data Democrats helps businesses with analytics, AI, cloud solutions, and digital transformation.
                    Share your details and our experts will connect with you to discuss tailored solutions for your
                    needs.
                </p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Need immediate assistance?</h5>
                        <h4 class="text-primary mb-0">+91-8451963300</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name *"
                                    style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Company Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Email Address *"
                                    style="height: 55px;" required>
                            </div>
                            <div class="col-12">
                                <input type="tel" class="form-control bg-light border-0" placeholder="Phone Number"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;" required>
                                    <option selected disabled>Type of Inquiry *</option>
                                    <option value="data-analytics">Data Analytics</option>
                                    <option value="ai-ml">AI / Machine Learning</option>
                                    <option value="cloud-solutions">Cloud Solutions</option>
                                    <option value="digital-transformation">Digital Transformation</option>
                                    <option value="training">Training & Workshops</option>
                                    <option value="career">Career</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit Your Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<?php
// get_sidebar();
get_footer();