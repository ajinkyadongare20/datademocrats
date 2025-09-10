<?php
/**
 * The main template file
 * Template Name: Contact
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
        <h1 class="display-4 text-white animated slideInDown mb-4">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-light active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center">
            <h1 class="mb-4 mb-md-5">Connect with Data Democrats Solution LLP</h1>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <div class="py-2">
                            <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">
                                Data Democrats Solution LLP
                            </div>

                            <h5 class="mt-4">Directors:</h5>
                            <p>
                                <strong>Madhsudhan Nambier (Director Technology Consulting)</strong><br>
                                Mobile: +91-8451963300<br>
                                Email: <a href="mailto:mnambier@datademocrats.in">mnambier@datademocrats.in</a><br><br>

                                <strong>Hemkant Patil (Director)</strong><br>
                                Mobile: +91-9372776185<br>
                                Email: <a href="mailto:hemkant.patil@datademocrats.in">hemkant.patil@datademocrats.in</a><br><br>

                                <strong>Pramod Murkewar (Director)</strong><br>
                                Mobile: +91-9422255571<br>
                                Email: <a href="mailto:pramod.murkewar@datademocrats.in">pramod.murkewar@datademocrats.in</a>
                            </p>

                            <h5 class="mt-4">Office Address:</h5>
                            <p>
                                <strong>Mumbai Office:</strong><br>
                                403, Millenium Grand, Plot No:71B, Sector 11, Kharghar,
                                Mumbai, Maharashtra 410210<br><br>

                                <strong>Nashik Office:</strong><br>
                                Shop No 02, Benchmark Commercial Complex,
                                Shri Shri Ravishankar Marg, Khode Nagar, Wadala,
                                Nashik – 422006
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="d0094d2" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Contact Image and Map Start -->
<div class="container-fluid bg-white py-5">
    <div class="container d-flex flex-column flex-lg-row gap-4 align-items-stretch">
        <!-- Left: Building Image -->
        <div class="w-100 w-lg-50" style="flex: 1;">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact/office.jpg" alt="Data Democrats Office"
                style="height: 500px; width: 100%; object-fit: contain;" />
        </div>

        <!-- Right: Map -->
        <div class="w-100 w-lg-50" style="flex: 1;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.3908890498894!2d73.06053107395062!3d19.074370387081634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c29b2d146a41%3A0x41aefc013f3c8b38!2sMillennium%20Grand%2C%20Kharghar%2C%20Navi%20Mumbai%2C%20Maharashtra%2041010!5e0!3m2!1sen!2sin!4v1753614553211!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<!-- Contact Image and Map End -->



<?php
// get_sidebar();
get_footer();