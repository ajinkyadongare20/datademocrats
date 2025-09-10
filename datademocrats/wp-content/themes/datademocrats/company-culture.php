<?php
/**
 * The main template file
 * Template Name: Company Culture
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
        <h1 class="display-4 text-white animated slideInDown pt-5 mb-4">Company Culture</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Company Culture</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Start Download Culture -->
<div class="hero-banner d-flex align-items-center justify-content-center text-white mb-5">
    <div class="text-center">
        <a href="#" class="btn btn-light btn-lg px-4 py-2 pt-5">
            <i class="fas fa-download me-2"></i> Download Company Profile
        </a>
    </div>
</div>

<div class="container py-5 mb-5">
    <div class="row">
        <!-- Filters Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="filter-section">
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">Filters</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-primary" placeholder="Search resources...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="accordion" id="filterAccordion">
                    <div class="accordion-item mb-2 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-primary btn btn-primary shadow-download"
                                type="button" data-bs-toggle="collapse" data-bs-target="#filterIndustry">
                                <i class="fas fa-industry me-2 text-white"></i> Focus Areas
                            </button>
                        </h2>
                        <div id="filterIndustry" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                            <div class="accordion-body pt-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="digital">
                                    <label class="form-check-label" for="digital">Digital Transformation</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ai">
                                    <label class="form-check-label" for="ai">AI & Data Analytics</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="cyber">
                                    <label class="form-check-label" for="cyber">Cybersecurity</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cloud">
                                    <label class="form-check-label" for="cloud">Cloud & Data Center</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-2 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-primary btn btn-primary shadow-download"
                                type="button" data-bs-toggle="collapse" data-bs-target="#filterService">
                                <i class="fas fa-cogs me-2 text-white"></i> Services
                            </button>
                        </h2>
                        <div id="filterService" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                            <div class="accordion-body pt-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="sdwan">
                                    <label class="form-check-label" for="sdwan">SD-WAN</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="iot">
                                    <label class="form-check-label" for="iot">IoT Solutions</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="industry4">
                                    <label class="form-check-label" for="industry4">Industry 4.0</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="smartcity">
                                    <label class="form-check-label" for="smartcity">Smart City</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-primary btn btn-primary shadow-download"
                                type="button" data-bs-toggle="collapse" data-bs-target="#filterType">
                                <i class="fas fa-file-alt me-2 text-white"></i> Resource Type
                            </button>
                        </h2>
                        <div id="filterType" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                            <div class="accordion-body pt-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="pdf">
                                    <label class="form-check-label" for="pdf">PDF</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="ppt">
                                    <label class="form-check-label" for="ppt">PPT</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="video">
                                    <label class="form-check-label" for="video">Video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <!-- Corporate Profile -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">Corporate Profile</h3>
                <div class="download-card p-4 bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <i class="fas fa-file-pdf text-primary fs-1"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold">Data Democrats Corporate Profile</h5>
                            <p class="text-muted mb-2">Overview of our mission, vision, values, and technology leadership</p>
                            <small class="text-muted">Last updated: July 2025 | File size: 3.8 MB</small>
                        </div>
                        <div class="col-md-2 text-center text-md-end">
                            <a href="#" class="btn btn-primary px-3">
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <!-- Sector Brochures -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">Solution Brochures</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-network-wired me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">SD-WAN Solutions</h5>
                            </div>
                            <p class="text-muted small mb-3">Centralized, secure, and intelligent network management</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-shield-alt me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">Cybersecurity & Threat Detection</h5>
                            </div>
                            <p class="text-muted small mb-3">AI-based protection and real-time monitoring</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-microchip me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">IoT Applications</h5>
                            </div>
                            <p class="text-muted small mb-3">Smart connected systems for industries and cities</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-database me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">Data Analytics & AI</h5>
                            </div>
                            <p class="text-muted small mb-3">Intelligent insights with automation and generative AI</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-server me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">Cloud & Data Center</h5>
                            </div>
                            <p class="text-muted small mb-3">Scalable and secure infrastructure solutions</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-city me-3 text-primary" style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">Smart & Safe Cities</h5>
                            </div>
                            <p class="text-muted small mb-3">AI-driven surveillance and emergency response</p>
                            <a href="#" class="btn btn-primary w-100">
                                <i class="fas fa-download me-1"></i> Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <!-- Services Catalogues -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">Services Catalogues</h3>

                <ul class="nav nav-pills mb-4" id="servicesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="digital-tab" data-bs-toggle="pill" data-bs-target="#digital-pane"
                            type="button" role="tab">
                            Digital Transformation
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ai-tab" data-bs-toggle="pill"
                            data-bs-target="#ai-pane" type="button" role="tab">
                            AI & Analytics
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cyber-tab" data-bs-toggle="pill"
                            data-bs-target="#cyber-pane" type="button" role="tab">
                            Cybersecurity
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="servicesTabContent">
                    <div class="tab-pane fade show active" id="digital-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">End-to-End Digital Transformation</h5>
                                    <p class="text-muted small mb-3">Strategy, implementation and managed services</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">Industry 4.0 Playbook</h5>
                                    <p class="text-muted small mb-3">Smart manufacturing with automation and IoT</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ai-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">AI/ML Solutions</h5>
                                    <p class="text-muted small mb-3">Advanced AI for smarter decisions</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cyber-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">Threat Detection Catalogue</h5>
                                    <p class="text-muted small mb-3">AI-based surveillance and cyber protection</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <!-- Technical Resources -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">Technical Resources</h3>

                <div class="download-card p-4 bg-white mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold mb-1">AI in Cybersecurity Whitepaper</h5>
                            <small class="text-muted">AI-based threat detection | 2.1 MB</small>
                        </div>
                        <div class="col-md-3 text-end">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="download-card p-4 bg-white mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold mb-1">IoT Deployment Guide</h5>
                            <small class="text-muted">Smart city & industry integration | 3.4 MB</small>
                        </div>
                        <div class="col-md-3 text-end">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="download-card p-4 bg-white mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold mb-1">Cloud Security Framework</h5>
                            <small class="text-muted">Best practices & compliance | 4.0 MB</small>
                        </div>
                        <div class="col-md-3 text-end">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
                    </div>
                </div>

                <div class="download-card p-4 bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold mb-1">Data Democratization Report</h5>
                            <small class="text-muted">Empowering organizations with data | 2.7 MB</small>
                        </div>
                        <div class="col-md-3 text-end">
                            <a href="#" class="btn btn-primary">
                                <i class="fas fa-download me-1"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Download Culture -->


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
                                    A: We serve a wide range of industries including healthcare, manufacturing, smart
                                    cities, retail, pharmaceuticals, agriculture, data centers, and government projects
                                    through digital transformation solutions.
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
                                    A: Our offerings include SD-WAN, Cybersecurity & Threat Detection, IoT solutions,
                                    AI/ML, Advanced Data Analytics, Industry 4.0 digital transformation, Cloud & Data
                                    Center services, and Smart/Safe City projects.
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
                                    A: We integrate AI-based cybersecurity systems for real-time threat detection,
                                    automated response, and adaptive protection. Our solutions follow international
                                    security standards to safeguard digital assets effectively.
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
                                    A: Yes, we specialize in turnkey digital transformation — from strategy consulting,
                                    technology integration, implementation, and security to ongoing support and
                                    optimization across enterprises.
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
<!-- Quote End -


<?php
// get_sidebar();
get_footer();