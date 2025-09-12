<?php
/**
 * The main template file
 * Template Name: Services
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

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown pt-5 mb-4">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-5">Driving Digital Transformation with Innovation & Trust</h1>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Innovation & Agility</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Integrity & Collaboration</h5>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4">
                        Data Democrats Solution LLP is an establishment dedicated to fostering a cohesive ecosystem for
                        digital transformation across industries, driven by the expertise and excellence of seasoned
                        industry veterans.  
                        Our mission is to empower organizations to thrive in the digital era by delivering innovative,
                        scalable, and human-centered technology solutions that drive growth, efficiency, and lasting impact.
                    </p>
                    <div class="mt-4 pt-2 border-top">
                        <p class="fw-semibold mb-0">
                            Vision: Become a Trusted Partner in Technology Enablement.  
                            Revolutionizing & innovating the way organizations operate and protect their digital assets
                            with turnkey digital transformation responsibilities.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Image Grid -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                            src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                            src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                            src="<?php bloginfo('template_directory'); ?>/img/carousel-3.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                            src="<?php bloginfo('template_directory'); ?>/img/carousel-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Services Section -->
<div class="container py-5">
    <h1 class="text-start text-lg-center display-6 fw-bold mb-3">Our Technology Solutions</h1>
    <p class="text-start text-lg-center text-muted mb-5">
        Data Democrats Solution LLP provides end-to-end digital transformation services backed by cutting-edge
        technologies. From cybersecurity to IoT and AI, our solutions are designed to empower organizations to operate
        smarter, safer, and more efficiently in the digital era.
    </p>

    <div class="row g-4">
        <!-- SD-WAN -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-network-wired text-white"></i>
                </div>
                <h3 class="ssc-service-title">SD-WAN</h3>
                <p>Centralized management, application-aware routing, enhanced security, and real-time visibility for
                    smarter and more flexible networking.</p>
            </div>
        </div>

        <!-- Cyber Security -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-shield-alt text-white"></i>
                </div>
                <h3 class="ssc-service-title">Cyber Security & Threat Detection</h3>
                <p>AI-powered defense with real-time threat detection, behavior analysis, and automated response against
                    evolving cyber threats.</p>
            </div>
        </div>

        <!-- IoT -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-microchip text-white"></i>
                </div>
                <h3 class="ssc-service-title">IoT Solutions</h3>
                <p>Smart, connected IoT solutions for industries, healthcare, retail, agriculture, and cities—enabling
                    automation and real-time insights.</p>
            </div>
        </div>

        <!-- Data Analytics & AI -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-chart-line text-white"></i>
                </div>
                <h3 class="ssc-service-title">Data Analytics & AI</h3>
                <p>Advanced AI techniques and analytics for real-time insights, generative AI, automation, and
                    explainable decision-making.</p>
            </div>
        </div>

        <!-- Data Center & Cloud -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-server text-white"></i>
                </div>
                <h3 class="ssc-service-title">Data Center & Cloud</h3>
                <p>Reliable and scalable IT infrastructure with secure cloud solutions, optimized for business
                    continuity and digital growth.</p>
            </div>
        </div>

        <!-- Industry 4.0 -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-industry text-white"></i>
                </div>
                <h3 class="ssc-service-title">Industry 4.0</h3>
                <p>Transforming manufacturing with automation, AI-driven insights, and integrated digital ecosystems
                    for efficiency and flexibility.</p>
            </div>
        </div>

        <!-- AI/ML Surveillance -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-video text-white"></i>
                </div>
                <h3 class="ssc-service-title">AI/ML Surveillance</h3>
                <p>AI-based monitoring with real-time alerts, facial/object recognition, behavior analysis, and reduced
                    false alarms for enhanced security.</p>
            </div>
        </div>

        <!-- Smart & Safe City -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-city text-white"></i>
                </div>
                <h3 class="ssc-service-title">Smart & Safe Cities</h3>
                <p>AI-powered city solutions with intelligent surveillance, predictive policing, and automated emergency
                    response for safer communities.</p>
            </div>
        </div>

        <!-- Smart & Safe City   -->
        <div class="col-md-6 col-lg-4">
            <div class="ssc-service-box text-start">
                <div class="btn-lg-circle-ssc bg-primary ssc-rounded-circle mb-3 me-3">
                    <i class="fas fa-city text-white"></i>
                </div>
                <h3 class="ssc-service-title">Technology Solution</h3>
                <p>AI-powered city solutions with intelligent surveillance, predictive policing, and automated emergency
                    response for safer communities.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->


<!-- Why Choose US Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                <h1 class="display-6 mb-4">Trusted Technology Partner for Digital Transformation</h1>
                <p class="mb-5">
                    Data Democrats delivers innovative, scalable, and secure technology solutions. From AI to cloud,
                    IoT, and cybersecurity, we integrate modern technologies to help businesses stay competitive,
                    efficient, and future-ready.
                </p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Innovation First</h5>
                        </div>
                        <span>Cutting-edge solutions with AI, IoT, and analytics for smarter operations.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Secure & Scalable</h5>
                        </div>
                        <span>Enterprise-grade systems designed for security, growth, and reliability.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Industry Expertise</h5>
                        </div>
                        <span>Led by industry veterans with proven experience in digital transformation.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Client-Centric Approach</h5>
                        </div>
                        <span>Tailored technology solutions built to align with organizational goals.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/services/2.jpg"
                        alt="Why Choose Data Democrats" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3"
                        src="<?php bloginfo('template_directory'); ?>/img/services/1.jpg"
                        alt="Data Democrats" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose US End -->


<!-- Why Choose Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Left Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">Why Clients Choose Data Democrats</h1>
                <p class="mb-5">
                    Data Democrats is more than a technology provider—we are your digital transformation partner.
                    With a strong foundation in AI, cybersecurity, cloud, IoT, and analytics, we deliver solutions
                    that are future-proof, reliable, and impactful across industries.
                </p>

                <!-- Reason 1 -->
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-brain fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">AI & Analytics Driven</h5>
                        <span>
                            Empowering smarter decisions through real-time insights and intelligent automation.
                        </span>
                    </div>
                </div>

                <!-- Reason 2 -->
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-lock fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Security First</h5>
                        <span>
                            Advanced cybersecurity frameworks to safeguard your digital assets against evolving threats.
                        </span>
                    </div>
                </div>

                <!-- Reason 3 -->
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-project-diagram fa-2x text-white"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">Digital Solutions</h5>
                        <span>
                            From networking to AI, we provide end-to-end solutions that streamline operations and
                            accelerate transformation.
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg"
                        alt="Why Choose Data Democrats" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose End -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">FAQs - Data Democrats Solution LLP</h4>
                <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                <p class="mb-4">
                    Have questions about our digital transformation services, technology stack, or turnkey solutions?
                    Here you’ll find answers to some of the most common queries from our clients.
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
                                    Q: What industries does Data Democrats serve?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We serve a wide range of industries including healthcare, manufacturing, smart cities, retail, pharmaceuticals, agriculture, data centers, and government projects through digital transformation solutions.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: What kind of technology solutions do you provide?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Our offerings include SD-WAN, Cybersecurity & Threat Detection, IoT solutions, AI/ML, Advanced Data Analytics, Industry 4.0 digital transformation, Cloud & Data Center services, and Smart/Safe City projects.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: How do you ensure data security?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We integrate AI-based cybersecurity systems for real-time threat detection, automated response, and adaptive protection. Our solutions follow international security standards to safeguard digital assets effectively.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Do you provide turnkey digital transformation services?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, we specialize in turnkey digital transformation — from strategy consulting, technology integration, implementation, and security to ongoing support and optimization across enterprises.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: How can I get in touch with your team?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: You can connect with our directors directly:  
                                    • Madhsudhan Nambier (Director Technology Consulting) – mnambier@datademocrats.in  
                                    • Hemkant Patil (Director) – hemkant.patil@datademocrats.in  
                                    • Pramod Murkewar (Director) – pramod.murkewar@datademocrats.in  
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
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-0 py-lg-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request A Consultation</h5>
                    <h1 class="mb-0">Kickstart Your Digital Transformation with Data Democrats</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Quick Response Within 24 Hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-headset text-primary me-3"></i>Expert Data & Tech Support</h5>
                    </div>
                </div>
                <p class="mb-4">
                    Ready to unlock the power of data-driven decision-making?  
                    Data Democrats helps businesses with analytics, AI, cloud solutions, and digital transformation.  
                    Share your details and our experts will connect with you to discuss tailored solutions for your needs.
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
<!-- Quote End -


<?php
// get_sidebar();
get_footer();