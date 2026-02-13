<?php

/**
 * The main template file
 * Template Name: Terms & Conditions
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
$about_page_id = 13;
$index_page_id = 9;
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('terms_&_conditions_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('terms_&_conditions_breadcrumb_home_link')); ?>">
                        <?php
                        $home_text = get_field('terms_&_conditions_breadcrumb_home_text');
                        echo $home_text ? esc_html($home_text) : 'Home';
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('terms_&_conditions_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Page Title with Metrics -->
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="terms-page-header mb-3 mb-md-0">
                    <h1 class="display-5 fw-bold mb-1">Terms & Conditions</h1>
                    <p class="text-secondary-emphasis">Last updated: February 13, 2026</p>
                </div>
                <div class="d-flex gap-3">
                    <span class="badge bg-dark text-white px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill text-success me-1"></i> 100% Secure</span>
                    <span class="badge bg-dark text-white px-3 py-2 rounded-pill"><i class="bi bi-clock-history me-1"></i> 99.9% Uptime</span>
                </div>
            </div>

            <!-- Terms Cards (using terms-* classes) -->
            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-check2-circle"></i> <span>1. Acceptance of Terms</span>
                </div>
                <div class="terms-card-body">
                    <p>By accessing or using the services provided by DataDemocrats ("Company", "we", "us"), you agree to be bound by these Terms. Our services include AI/ML surveillance, big data analytics, cloud infrastructure, and cybersecurity solutions.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-briefcase"></i> <span>2. Service Description</span>
                </div>
                <div class="terms-card-body">
                    <p>DataDemocrats provides advanced technology solutions including but not limited to AI-powered security systems, big data processing, cloud management, and cyber threat protection. We reserve the right to modify or discontinue services with notice.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-person-lock"></i> <span>3. User Obligations</span>
                </div>
                <div class="terms-card-body">
                    <p>You agree to provide accurate information, maintain confidentiality, and use our services lawfully. Any attempt to breach security, reverse engineer our AI models, or misuse data is strictly prohibited.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-code-slash"></i> <span>4. Intellectual Property</span>
                </div>
                <div class="terms-card-body">
                    <p>All software, algorithms, AI models, and content developed by DataDemocrats remain our exclusive property. Clients receive a limited license to use deliverables as outlined in your service agreement.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-exclamation-octagon"></i> <span>5. Limitation of Liability</span>
                </div>
                <div class="terms-card-body">
                    <p>To the maximum extent permitted, DataDemocrats shall not be liable for indirect damages. Our total liability shall not exceed the fees paid for the service giving rise to the claim during the 12 months prior.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-shield-check"></i> <span>6. Indemnification</span>
                </div>
                <div class="terms-card-body">
                    <p>You agree to indemnify DataDemocrats against claims arising from your violation of these Terms or infringement of third-party rights.</p>
                </div>
            </div>

            <div class="card terms-card mb-4">
                <div class="terms-card-header">
                    <i class="bi bi-bank"></i> <span>7. Governing Law</span>
                </div>
                <div class="terms-card-body">
                    <p>These Terms shall be governed by the laws of Delaware, USA, without regard to conflict of law principles. Any disputes shall be resolved in courts located in Wilmington, DE.</p>
                </div>
            </div>

            <div class="card terms-card mb-5">
                <div class="terms-card-header">
                    <i class="bi bi-pencil"></i> <span>8. Changes to Terms</span>
                </div>
                <div class="terms-card-body">
                    <p>We may update these Terms periodically. Continued use after changes constitutes acceptance. Check this page for updates.</p>
                </div>
            </div>

            <!-- Contact CTA -->
            <div class="alert terms-alert d-flex align-items-center p-4" role="alert">
                <i class="bi bi-envelope-paper fs-1 me-4" style="color: #8b7cf0;"></i>
                <div>
                    <h5 class="text-white">Questions about our Terms?</h5>
                    <p class="mb-2">Our legal team is ready to assist with any inquiries.</p>
                    <a href="#" class="btn terms-btn mt-2"><i class="bi bi-chat-dots me-2"></i>Contact Support</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 g-lg-5">
            <!-- FAQ Text -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary"><?php echo esc_html(get_field('faqs_tittle', $index_page_id)); ?></h4>
                <h1 class="display-4 mb-4"><?php echo esc_html(get_field('faqs_heading', $index_page_id)); ?></h1>
                <?php echo wp_kses_post(get_field('faqs_description', $index_page_id)); ?>
                <a class="btn btn-primary py-3 px-5" href="<?php the_field('faqs_link', $index_page_id); ?>">
                    <?php echo esc_html(get_field('faqs_link_text', $index_page_id)); ?>
                </a>
            </div>

            <!-- FAQ Accordion -->
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="h-100">
                    <div class="accordion" id="accordionExample">
                        <?php
                        $faqs_cpt = new WP_Query(array(
                            'post_type'      => 'faqs_cpt',
                            'posts_per_page' => -1,
                            'order'          => 'ASC',
                            'orderby'        => 'menu_order'
                        ));

                        $count = 0;
                        if ($faqs_cpt->have_posts()) :
                            while ($faqs_cpt->have_posts()) : $faqs_cpt->the_post();
                                $count++;
                                $question        = get_field('faqs_question');
                                $answer          = get_field('faqs_answer');
                                $heading_id      = 'heading' . $count;
                                $collapse_id     = 'collapse' . $count;
                                $show_class      = ($count === 1) ? 'show' : '';
                                $collapsed_class = ($count === 1) ? '' : 'collapsed';
                        ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                        <button class="accordion-button <?php echo esc_attr($collapsed_class); ?>"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                            aria-expanded="<?php echo ($count === 1) ? 'true' : 'false'; ?>"
                                            aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                            <?php echo esc_html($question); ?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo esc_attr($collapse_id); ?>"
                                        class="accordion-collapse collapse <?php echo esc_attr($show_class); ?>"
                                        aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo wp_kses_post($answer); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Section End -->


<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Left Content -->
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">
                        <?php echo esc_html(get_field('quote_main_name', $quote_page_id)); ?>
                    </h5>
                    <h2 class="mb-0">
                        <?php echo esc_html(get_field('quote_main_subname', $quote_page_id)); ?>
                    </h2>
                </div>

                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4">
                            <i class="fa fa-reply text-primary me-3"></i>
                            <?php echo esc_html(get_field('quote_main_subheading1', $quote_page_id)); ?>
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4">
                            <i class="fa fa-headset text-primary me-3"></i>
                            <?php echo esc_html(get_field('quote_main_subheading2', $quote_page_id)); ?>
                        </h5>
                    </div>
                </div>

                <p><?php echo wp_kses_post(get_field('quote_main_description', $quote_page_id)); ?></p>

                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">
                            <?php echo esc_html(get_field('quote_main_assistance', $quote_page_id)); ?>
                        </h5>
                        <h4 class="text-primary mb-0">
                            <?php echo esc_html(get_field('quote_contact_number', $quote_page_id)); ?>
                        </h4>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-5">
                <div class="bg-primary rounded shadow h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <?php echo do_shortcode('[contact-form-7 id="97976" title="Contact form 3 - Quote"]'); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Quote End -->


<?php
// get_sidebar();
get_footer();
