<?php
/**
 * The main template file
 * Template Name: Awards
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Awards</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Awards</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Awards & Recognition Section Start -->
<div class="container px-3 px-lg-0">
    <div class="py-5">
        <h2 class="text-dark fw-bold text-start mb-4 mb-lg-5">Awards & Recognition</h2>
        <div class="row g-4 g-lg-5 portfolio-container">
            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award1.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: fill;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Excellence in Data Innovation</p>
                        <span class="text-body"><i class="fa fa-lightbulb text-primary me-2"></i>
                            Recognized for developing AI-driven analytics solutions that transformed enterprise decision-making.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award2.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Best Digital Transformation Partner</p>
                        <span class="text-body"><i class="fa fa-network-wired text-primary me-2"></i>
                            Honored for enabling organizations to modernize with cloud, big data, and automation technologies.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award3.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Leadership in Technology Consulting</p>
                        <span class="text-body"><i class="fa fa-users-cog text-primary me-2"></i>
                            Awarded for delivering innovative IT consulting services and digital strategies to global clients.
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                <div class="position-relative portfolio-box">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/awards/award4.jpg"
                        alt="" class="img-fluid w-100" style="height: 700px; object-fit: cover;">
                    <a class="portfolio-title shadow-sm" href="#">
                        <p class="h4">Trusted Brand Recognition</p>
                        <span class="text-body"><i class="fa fa-award text-primary me-2"></i>
                            Celebrated for building long-term client trust with ethical, reliable, and impactful digital solutions.
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Awards & Recognition Section End -->


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