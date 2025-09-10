<?php
/**
 * The main template file
 * Template Name: Career
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
        <h1 class="display-4 text-white animated slideInDown pt-5 mb-4">Career</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Career</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Careers Start -->
<div class="container-fluid careers py-5">
    <div class="container py-5">
        <div class="d-flex flex-column mx-auto text-start text-lg-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-secondary">Careers at Democrafts</h4>
            <h1 class="display-6 mb-4">Build Your Future With Us</h1>
            <p class="mb-0">At Democrafts, we create innovative digital solutions for businesses worldwide. If you’re driven by technology, creativity, and impact, join our team and shape the future with us.</p>
        </div>
        <div class="row g-4">

            <!-- Software Developer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Software Developer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Software Developer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune, Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Work on web and enterprise applications using Java, PHP, and modern frameworks. 2–5 years of coding experience preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Software Developer">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Frontend Engineer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="Frontend Engineer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Frontend Engineer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Remote / India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Build interactive web apps using Angular, React, and modern UI frameworks. Must have strong HTML, CSS, and JavaScript skills.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Frontend Engineer">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- QA Engineer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="QA Engineer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">QA Engineer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune, Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Ensure product quality with manual and automated testing. Knowledge of Selenium and API testing tools is a plus.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="QA Engineer">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Project Coordinator -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-1.jpg"
                            class="career-img-fluid w-100" alt="Project Coordinator">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Project Coordinator</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune Office</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Coordinate client requirements, manage timelines, and support development teams. 2–4 years experience in IT project management preferred.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Project Coordinator">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- Business Development Executive -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-2.jpg"
                            class="career-img-fluid w-100" alt="Business Development Executive">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">Business Development Executive</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Maharashtra / Pan India</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Identify new opportunities, engage with clients, and support sales targets. Excellent communication and negotiation skills required.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="Business Development Executive">Apply Now</button>
                    </div>
                </div>
            </div>

            <!-- IT Support Engineer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="career-item">
                    <div class="career-img">
                        <img src="<?php bloginfo('template_directory'); ?>/img/careers/carousel-3.jpg"
                            class="career-img-fluid w-100" alt="IT Support Engineer">
                    </div>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">IT Support Engineer</a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune, Maharashtra</p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                        </div>
                        <p class="mb-4">
                            Provide technical support for internal systems, manage networks, and ensure uptime. Minimum 2 years of IT support experience required.
                        </p>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="IT Support Engineer">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Careers End -->



<!-- Application Modal Start -->
<div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="applicationModalLabel">Apply for Position</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <?php echo do_shortcode('[contact-form-7 id="a6e4e4b" title="Contact Form 2 - Career"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Application Modal End -->


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