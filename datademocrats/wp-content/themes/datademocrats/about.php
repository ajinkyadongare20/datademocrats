<?php
/**
 * The main template file
 * Template Name: About
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
        <h1 class="display-4 text-white animated slideInDown mb-4">About</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Start Overview Section -->
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h2 class="section-title">Company Overview</h2>
            <div class="card overview-card animate-on-scroll">
                <div class="card-header">
                    <h3 class="text-light mb-0"><i class="fas fa-building me-2"></i>About Data Democrats Solution LLP</h3>
                </div>
                <div class="card-body">
                    <p>Data Democrats Solution LLP is a forward-looking technology consulting company specializing in data-driven solutions, IT services, and enterprise consulting. With a mission to empower businesses through innovation and intelligence, we bring a strong combination of domain expertise, cutting-edge tools, and customer-first values.</p>

                    <p>We provide consulting and execution in areas such as cloud services, AI/ML solutions, enterprise IT, process automation, and digital transformation. Whether it’s startups or large enterprises, we design solutions that ensure scalability, efficiency, and measurable business impact.</p>

                    <p>Our experienced team of directors and consultants integrates technical excellence with industry best practices, ensuring high-quality project delivery while maintaining agility and cost-effectiveness.</p>

                    <p>With offices in Mumbai and Nashik, and a growing client base across India and overseas, we have become a trusted partner for organizations that aspire to adopt modern, sustainable, and data-driven business models.</p>

                    <p>At Data Democrats Solution LLP, our goal is simple — to enable organizations to innovate, optimize, and grow with confidence.</p>

                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>Empowering Businesses Through Data & Technology.<i class="fas fa-quote-right ms-2"></i>
                    </div>
                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>From Strategy to Execution — We Deliver.<i class="fas fa-quote-right ms-2"></i>
                    </div>
                    <div class="tagline animate-on-scroll">
                        <i class="fas fa-quote-left me-2"></i>Innovating for a Smarter, Sustainable Future.<i class="fas fa-quote-right ms-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Overview Section -->


<!-- Start History Section -->
<div class="container-fluid pb-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card history-card animate-on-scroll">
                <div class="card-header">
                    <h3 class="text-light mb-0"><i class="fas fa-history me-2"></i>The Data Democrats Journey</h3>
                </div>
                <div class="card-body">
                    <p>Data Democrats Solution LLP began with a vision to create a new-age consulting company that bridges the gap between data, technology, and business outcomes. What started with a small but ambitious team of technologists has grown into a reliable partner for enterprises across India and abroad.</p>

                    <p>From the very beginning, we focused on adopting emerging technologies, advanced tools, and agile methodologies. This approach helped us deliver successful projects in areas such as cloud infrastructure, enterprise resource planning, artificial intelligence, and process optimization.</p>

                    <p>Our breakthrough came through large-scale consulting assignments, where our ability to combine strategy, execution, and support created long-lasting client relationships. These successes positioned us as a growing force in IT consulting and enterprise transformation.</p>

                    <p>By continuously investing in skilled talent and advanced technologies, we have built capabilities that allow us to serve diverse industries, including healthcare, manufacturing, finance, education, and government sectors.</p>

                    <p>During challenging times such as the global pandemic, our teams supported clients with business continuity planning, IT infrastructure scaling, and digital adoption strategies — ensuring stability and resilience in uncertain environments.</p>

                    <p>Today, Data Democrats Solution LLP stands for innovation, integrity, and impact. Our vision is to continue expanding globally while driving value through sustainable and intelligent solutions that prepare businesses for the future.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End History Section -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5">
            <!-- Image Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5"
                        src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg"
                        alt="Data Democrats Consulting" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg"
                        alt="Data Democrats Team" style="width: 200px; height: 200px;">
                </div>
            </div>

            <!-- Content Section -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill text-secondary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-3">Your Trusted Partner in Data & Technology Solutions</h1>

                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">
                            At Data Democrats Solution LLP, we are committed to delivering premium-quality consulting services with a focus on data, technology, and customer success.
                        </p>
                        <span class="text-primary">Madhsudhan Nambier, Director Technology Consulting</span>
                    </div>

                    <p class="mb-5">
                        With offices in Mumbai and Nashik, we provide innovative and customized solutions in cloud computing, AI/ML, business process automation, ERP, and IT infrastructure. 
                        <br><br>
                        Our directors bring decades of combined experience in technology consulting, project execution, and enterprise solutions, making us a preferred partner for organizations seeking reliable and scalable technology support.
                        <br><br>
                        From startups to large enterprises, our focus is on empowering clients with strategies and tools that enable growth, efficiency, and long-term sustainability. We believe in delivering measurable business impact through technology adoption.
                    </p>

                    <a class="btn btn-primary py-2 px-3 me-3" href="about.html">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary text-dark border-secondary mt-3 mt-lg-0 py-2 px-3" href="contact.html">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white border-1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Our Mission, Vision, Values Start -->
<div class="container-xxl bg-light py-5">
    <div class="container py-2 py-lg-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-5">Our Mission, Vision & Core Values</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Mission -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Mission</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">Empowering Digital Transformation</h5>
                            <p>Our mission is to empower organizations to thrive in the digital era by delivering innovative, scalable, and human-centered technology solutions that drive growth, efficiency, and lasting impact. We aim to be enablers of progress by aligning technology with business needs to create sustainable value.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Vision</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">Trusted Partner in Technology Enablement</h5>
                            <p>Our vision is to revolutionize and innovate the way organizations operate, safeguard their digital assets, and adapt to Industry 4.0 transformations. We aspire to become the most trusted partner for turnkey digital transformation responsibilities across industries, ensuring agility, security, and resilience in every engagement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Core Values -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Core Values</small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3">What Drives Us</h5>
                            <p>Innovation, customer-centricity, agility, collaboration, integrity, and continuous improvement drive our purpose. These values shape how we design solutions, deliver outcomes, and build long-term partnerships — empowering businesses to succeed in their digital transformation journeys.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Mission, Vision, Values End -->


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
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/team-4.jpg"
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