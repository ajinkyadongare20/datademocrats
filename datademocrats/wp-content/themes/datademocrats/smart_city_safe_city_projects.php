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
$index_page_id = 9;
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo wp_kses_post( get_field('technology_solutions_breadcrumb_page') ); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white"
                        href="<?php echo esc_url(get_field('technology_solutions_home_link')); ?>">
                        <?php 
                            $home_text = get_field('technology_solutions_home_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo wp_kses_post( get_field('technology_solutions_breadcrumb_page') ); ?>
                </li>
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
                <h2 class="text-primary mb-3">
                    <?php echo esc_html(get_field('technology_solutions_introduction_heading', get_the_ID())); ?>
                </h2>
                <?php echo wp_kses_post(get_field('technology_solutions_introduction_description', get_the_ID())); ?>
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
                    <h1 class="display-6 mb-5">
                        <?php echo esc_html(get_field('technology_solutions_services_heading', get_the_ID())); ?>
                    </h1>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <h5 class="mb-0">
                                <?php echo esc_html(get_field('technology_solutions_services_feature_1', get_the_ID())); ?>
                            </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-0">
                                <?php echo esc_html(get_field('technology_solutions_services_feature_2', get_the_ID())); ?>
                            </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-0">
                                <?php echo esc_html(get_field('technology_solutions_services_feature_3', get_the_ID())); ?>
                            </h5>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="mb-0">
                                <?php echo esc_html(get_field('technology_solutions_services_feature_4', get_the_ID())); ?>
                            </h5>
                        </div>
                    </div>

                    <?php echo wp_kses_post(get_field('technology_solutions_services_description', get_the_ID())); ?>
                </div>
            </div>

            <!-- Image Grid -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s"
                             src="<?php echo esc_url(get_field('technology_solutions_services_image_1', get_the_ID())); ?>" 
                             alt="Service Image 1" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s"
                             src="<?php echo esc_url(get_field('technology_solutions_services_image_2', get_the_ID())); ?>" 
                             alt="Service Image 2">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s"
                             src="<?php echo esc_url(get_field('technology_solutions_services_image_3', get_the_ID())); ?>" 
                             alt="Service Image 3">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s"
                             src="<?php echo esc_url(get_field('technology_solutions_services_image_4', get_the_ID())); ?>" 
                             alt="Service Image 4">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->


<!-- SD-WAN Content Architecture Start -->
<div class="container py-5">
    <div class="row g-5">
        <h1 class="display-6 text-center mb-4"><?php echo esc_html(get_field('technology_solutions_architecture_heading')); ?></h1>
        <!-- Left Column -->
        <div class="col-lg-4">
            <div class="row g-5">
                <?php
                $args = array(
                    'post_type'      => 'arc_smart_city_safe',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                );
                $loop = new WP_Query($args);

                if ($loop->have_posts()):
                    $i = 0;
                    while ($loop->have_posts()): $loop->the_post();
                        $icon   = get_field('technology_solutions_architecture_icon');
                        $head   = get_field('technology_solutions_architecture_heading');
                        $desc   = get_field('technology_solutions_architecture_description');
                        $delay  = get_field('technology_solutions_architecture_delay');

                        // First 2 items go to left column
                        if ($i < 2): ?>
                            <div class="col-12 wow zoomIn" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                                     style="width: 60px; height: 60px;">
                                    <i class="<?php echo esc_attr($icon); ?> text-white"></i>
                                </div>
                                <h4><?php echo esc_html($head); ?></h4>
                                <p class="mb-0"><?php echo wp_kses_post($desc); ?></p>
                            </div>
                        <?php endif;
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>

        <!-- Center Column (Static Image) -->
        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded" 
                     src="<?php echo esc_url(get_field('technology_solutions_architecture_image', get_the_ID())); ?>" 
                     style="object-fit: contain; border: 1px solid black;">
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
            <div class="row g-5">
                <?php
                // Run query again for right column
                $args = array(
                    'post_type'      => 'arc_smart_city_safe',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                );
                $loop = new WP_Query($args);

                if ($loop->have_posts()):
                    $i = 0;
                    while ($loop->have_posts()): $loop->the_post();
                        $icon   = get_field('technology_solutions_architecture_icon');
                        $head   = get_field('technology_solutions_architecture_heading');
                        $desc   = get_field('technology_solutions_architecture_description');
                        $delay  = get_field('technology_solutions_architecture_delay');

                        // Next 2 items go to right column
                        if ($i >= 2 && $i < 4): ?>
                            <div class="col-12 wow zoomIn" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                                     style="width: 60px; height: 60px;">
                                    <i class="<?php echo esc_attr($icon); ?> text-white"></i>
                                </div>
                                <h4><?php echo esc_html($head); ?></h4>
                                <p class="mb-0"><?php echo wp_kses_post($desc); ?></p>
                            </div>
                        <?php endif;
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>

    <!-- Extra Row -->
    <div class="row g-5 mt-4">
        <?php
        $args = array(
            'post_type'      => 'arc_smart_city_safe',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        );
        $loop = new WP_Query($args);

        if ($loop->have_posts()):
            $i = 0;
            while ($loop->have_posts()): $loop->the_post();
                $icon   = get_field('technology_solutions_architecture_icon');
                $head   = get_field('technology_solutions_architecture_heading');
                $desc   = get_field('technology_solutions_architecture_description');
                $delay  = get_field('technology_solutions_architecture_delay');

                // Remaining items go to bottom row
                if ($i >= 4): ?>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="<?php echo esc_attr($delay); ?>">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" 
                             style="width: 60px; height: 60px;">
                            <i class="<?php echo esc_attr($icon); ?> text-white"></i>
                        </div>
                        <h4><?php echo esc_html($head); ?></h4>
                        <p class="mb-0"><?php echo wp_kses_post($desc); ?></p>
                    </div>
                <?php endif;
                $i++;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>
<!--End SD-WAN Content Architecture End -->


<!--Start Why Businesses Choose Data Democrats -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2"><?php echo esc_html(get_field('technology_solutions_businesses_heading')); ?></h6>
                <h1 class="display-6 mb-4"><?php echo esc_html(get_field('technology_solutions_businesses_subheading')); ?></h1>
                <?php echo wp_kses_post(get_field('technology_solutions_businesses_description')); ?>
                <div class="row gy-5 gx-4">

                    <?php 
                    $business_smart_citty = new WP_Query(array(
                        'post_type'      => 'business_smart_citty',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'ASC'
                    ));
                    if ($business_smart_citty->have_posts()) :
                        while ($business_smart_citty->have_posts()) : $business_smart_citty->the_post(); ?>

                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="<?php echo esc_html(get_field('technology_solution_businesses_icon')); ?> text-white"></i>
                            </div>
                            <h5 class="mb-0"><?php echo esc_html(get_field('technology_solution_businesses_heading')); ?></h5>
                        </div>
                        <?php echo wp_kses_post(get_field('technology_solution_businesses_description')); ?>
                    </div>
                    <?php endwhile; 
                    wp_reset_postdata();
                endif;
                ?>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="<?php echo esc_url(get_field('technology_solutions_businesses_image_1', get_the_ID())); ?>" alt="SD-WAN Solutions" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php echo esc_url(get_field('technology_solutions_businesses_image_2', get_the_ID())); ?>" alt="SD-WAN Features" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Businesses Choose Data Democrats -->


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