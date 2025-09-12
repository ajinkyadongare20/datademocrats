<?php
/**
 * The main template file
 * Template Name: Smart City & Safe City Projects
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
        <h1 class="display-4 text-white animated slideInDown pt-5 mb-4">Smart City &<br> Safe City Projects </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Smart City & Safe City Projects </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Introduction Start -->
<div class="container-fluid bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary mb-3">Smart City & Safe City Projects</h2>
                <p class="text-muted">
                    An AI-powered Safe City uses intelligent surveillance, real-time analytics, predictive policing, 
                    and automated emergency response systems to enhance public safety, situational awareness, 
                    and rapid decision-making.
                </p>
                <p class="text-muted">
                    By integrating advanced AI and IoT technologies, our solutions enable municipalities to monitor traffic, 
                    prevent crime, manage emergencies efficiently, and ensure a safer, smarter urban environment 
                    for citizens.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Introduction End -->


<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Text Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-5">AI-Powered Smart & Safe City Solutions</h1>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Intelligent Surveillance</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Predictive Policing</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">Automated Emergency Response</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0">IoT & Sensor Integration</h5>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4">
                        Our Smart City & Safe City solutions use AI and IoT to monitor urban environments, 
                        detect threats, and optimize public safety operations. From traffic management and 
                        surveillance to predictive crime prevention, cities can respond faster and smarter 
                        to emergencies while ensuring citizen safety and operational efficiency.
                    </p>
                    <div class="mt-4 pt-2 border-top">
                        <p class="fw-semibold mb-0">
                            Vision: Build smarter, safer, and more connected cities with AI-driven technologies 
                            that empower municipal authorities and enhance citizen well-being.
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


<!-- Smart City Features -->
<div class="container py-5">
    <div class="row g-5">
        <!-- Left Column -->
        <div class="col-lg-4">
            <div class="row g-5">
                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-video text-white"></i>
                    </div>
                    <h4>Intelligent Surveillance</h4>
                    <p class="mb-0">Monitor public areas with AI-powered cameras for enhanced safety and situational awareness.</p>
                </div>
                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-tachometer-alt text-white"></i>
                    </div>
                    <h4>Traffic & Crowd Monitoring</h4>
                    <p class="mb-0">Optimize traffic flow and manage crowds using real-time sensor and camera data.</p>
                </div>
            </div>
        </div>
        
        <!-- Center Image -->
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" 
                     src="<?php bloginfo('template_directory'); ?>/img/index/Smart City & Safe City Projects.png" 
                     style="object-fit: contain; border: 1px solid black;">
            </div>
        </div>
        
        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="row g-5">
                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-chart-line text-white"></i>
                    </div>
                    <h4>Real-Time Analytics</h4>
                    <p class="mb-0">Analyze city-wide data instantly to make informed decisions and respond proactively.</p>
                </div>
                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4>Emergency Response Automation</h4>
                    <p class="mb-0">Automatically alert and coordinate response teams during incidents to reduce response time.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Row for Additional Benefits -->
    <div class="row g-5 mt-4">
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                 style="width: 60px; height: 60px;">
                <i class="fa fa-cloud text-white"></i>
            </div>
            <h4>IoT & Sensor Integration</h4>
            <p class="mb-0">Integrate sensors and IoT devices for smarter urban monitoring and data-driven city management.</p>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                 style="width: 60px; height: 60px;">
                <i class="fa fa-sync-alt text-white"></i>
            </div>
            <h4>Rapid Deployment</h4>
            <p class="mb-0">Quickly implement smart city infrastructure and scale solutions across urban areas.</p>
        </div>
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                 style="width: 60px; height: 60px;">
                <i class="fa fa-project-diagram text-white"></i>
            </div>
            <h4>Integrated City Systems</h4>
            <p class="mb-0">Connect traffic, security, utilities, and emergency services into a unified smart city platform.</p>
        </div>
    </div>
</div>
<!-- End Smart City Features -->


<!--Start Why Cities Choose Smart City Solutions -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Left Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Why Cities Choose Smart City Solutions</h6>
                <h1 class="display-6 mb-4">Safer, Smarter & AI-Powered Urban Management</h1>
                <p class="mb-5">
                    Our Smart City solutions leverage AI-driven analytics, intelligent surveillance, predictive policing,
                    and automated emergency response to enhance public safety, situational awareness, and operational efficiency.
                    By integrating IoT sensors, real-time monitoring, and centralized management, cities can make faster,
                    data-driven decisions for a secure and sustainable urban environment.
                </p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Intelligent Surveillance</h5>
                        </div>
                        <span>Monitor public areas with AI-powered cameras for enhanced safety and situational awareness.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Real-Time Analytics</h5>
                        </div>
                        <span>Analyze city-wide data instantly to make informed decisions and proactively manage risks.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Automated Emergency Response</h5>
                        </div>
                        <span>Reduce response times by automatically alerting and coordinating emergency teams during incidents.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">IoT & Sensor Integration</h5>
                        </div>
                        <span>Integrate sensors and IoT devices for comprehensive city monitoring and smarter infrastructure management.</span>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/technology/Smart City & Safe City.jpg" alt="SD-WAN Solutions" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="SD-WAN Features" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Cities Choose Smart City Solutions -->


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-0 py-lg-5">
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
    <div class="container py-5">
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