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
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('contact_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('contact_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('contact_breadcrumb_home_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('contact_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center">
            <h1 class="mb-4 mb-md-5"><?php echo esc_html(get_field('contact_main_heading')); ?></h1>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">

                <!-- Company & Directors -->
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <div class="py-2">
                            <!-- Company Name -->
                            <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">
                                <?php echo esc_html(get_field('company_name')); ?>
                            </div>

                            <!-- Directors Section -->
                            <h5 class="mt-4"><?php echo esc_html(get_field('director_heading')); ?></h5>
                            <p>
                                <?php if(get_field('director_name1')): ?>
                                    <strong><?php echo esc_html(get_field('director_name1')); ?> (<?php echo esc_html(get_field('director_designation1')); ?>)</strong><br>
                                    Mobile: <?php echo esc_html(get_field('director_phone1')); ?><br>
                                    Email: <a href="mailto:<?php echo antispambot(get_field('director_email1')); ?>">
                                        <?php echo esc_html(get_field('director_email1')); ?>
                                    </a><br><br>
                                <?php endif; ?>

                                <?php if(get_field('director_name2')): ?>
                                    <strong><?php echo esc_html(get_field('director_name2')); ?> (<?php echo esc_html(get_field('director_designation2')); ?>)</strong><br>
                                    Mobile: <?php echo esc_html(get_field('director_phone2')); ?><br>
                                    Email: <a href="mailto:<?php echo antispambot(get_field('director_email2')); ?>">
                                        <?php echo esc_html(get_field('director_email2')); ?>
                                    </a><br><br>
                                <?php endif; ?>

                                <?php if(get_field('director_name3')): ?>
                                    <strong><?php echo esc_html(get_field('director_name3')); ?> (<?php echo esc_html(get_field('director_designation3')); ?>)</strong><br>
                                    Mobile: <?php echo esc_html(get_field('director_phone3')); ?><br>
                                    Email: <a href="mailto:<?php echo antispambot(get_field('director_email3')); ?>">
                                        <?php echo esc_html(get_field('director_email3')); ?>
                                    </a>
                                <?php endif; ?>
                            </p>

                            <!-- Office Address -->
                            <h5 class="mt-4"><?php echo esc_html(get_field('office_tittle_name')); ?></h5>
                            <p><?php echo get_field('office_address'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
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