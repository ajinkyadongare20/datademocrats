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
$index_page_id = 9;
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('career_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('career_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('career_breadcrumb_home_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('career_breadcrumb_page')); ?>
                </li>
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
            <h1 class="display-6 mb-4">
                <?php echo esc_html(get_field('career_main_heading')); ?>
            </h1>
            <?php echo wp_kses_post(get_field('career_main_heading_description')); ?>
        </div>
        <div class="row g-4">

            <?php 
                    $career_application = new WP_Query(array(
                        'post_type'      => 'career_application',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'ASC'
                    ));

                    if ($career_application->have_posts()) :
                        while ($career_application->have_posts()) : $career_application->the_post(); ?>
            <?php 
            $career_application_image = get_field('career_application_image');
            ?>

            <!-- Software Developer -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="career-item">
                    <?php if ($career_application_image) : ?>
                    <div class="career-img">
                        <img src="<?php echo esc_url($career_application_image); ?>" class="career-img-fluid w-100"
                            alt="Software Developer">
                    </div>
                    <?php endif; ?>
                    <div class="career-heading ms-2 my-3">
                        <a href="#" class="h4 mb-0 p-1">
                            <?php echo esc_html(get_field('career_desgination')); ?>
                        </a>
                    </div>
                    <div class="career-content bg-light p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i>
                                <?php echo esc_html(get_field('career_company_address')); ?>
                            </p>
                            <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i>
                                <?php echo esc_html(get_field('career_company_type')); ?>
                            </p>
                        </div>
                        <?php echo wp_kses_post(get_field('career_role_description')); ?>
                        <button class="btn btn-primary py-2 px-4 apply-btn"
                            data-position="<?php echo esc_attr(get_field('career_desgination')); ?>">
                            <?php echo esc_html(get_field('career_apply_text')); ?>
                        </button>
                    </div>
                </div>
            </div>

            <?php endwhile; 
                wp_reset_postdata();
            endif;
            ?>

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


<!-- FAQ Start -->
<div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 g-lg-5">
            <!-- FAQ Text -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <h4 class="text-primary">
                    <?php echo esc_html(get_field('faqs_tittle', $index_page_id)); ?>
                </h4>
                <h1 class="display-4 mb-4">
                    <?php echo esc_html(get_field('faqs_heading', $index_page_id)); ?>
                </h1>
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
                                <button class="accordion-button <?php echo esc_attr($collapsed_class); ?>" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
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

                <p>
                    <?php echo wp_kses_post(get_field('quote_main_description', $quote_page_id)); ?>
                </p>

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
                <div class="bg-primary rounded shadow h-100 d-flex align-items-center p-5 wow zoomIn"
                    data-wow-delay="0.9s">
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