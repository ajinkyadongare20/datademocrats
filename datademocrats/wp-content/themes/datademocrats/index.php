<?php
/**
 * The main template file
 * Template Name: Home
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

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php 
            $home_carousel = new WP_Query(array(
                'post_type'      => 'home_carousel',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ));

            $i = 0; // counter to set 'active' only for the first slide
            while ($home_carousel->have_posts()) : $home_carousel->the_post();
                $home_carousel_image = get_field('home_carousel_image');
                $button_link         = get_field('home_carousel_button_link'); 
                $button_text         = get_field('home_carousel_button_text');
            ?>

            <!-- Slide -->
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                <img class="w-100" src="<?php echo esc_url($home_carousel_image); ?>" alt="Data Democrats">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">
                                    <?php echo esc_html(get_field('home_carousel_heading')); ?>
                                </h1>
                                <?php echo wp_kses_post(get_field('home_carousel_text')); ?>

                                <?php if ($button_link && $button_text): ?>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown"
                                    href="<?php echo esc_url($button_link); ?>" target="">
                                    <?php echo esc_html($button_text); ?>
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            $i++;
            endwhile; 
            wp_reset_postdata();
            ?>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Left Images -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <?php if ($image1 = get_field('home_about_image_1')): ?>
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="<?php echo esc_url($image1); ?>"
                        alt="About Image 1" style="object-fit: cover;">
                    <?php endif; ?>

                    <?php if ($image2 = get_field('home_about_image_2')): ?>
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="<?php echo esc_url($image2); ?>"
                        alt="About Image 2" style="width: 200px; height: 200px;">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">

                    <?php if ($heading_name = get_field('home_about_heading_name')): ?>
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        <?php echo esc_html($heading_name); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($text_heading = get_field('home_about_text_heading')): ?>
                    <h1 class="display-6 mb-4">
                        <?php echo esc_html($text_heading); ?>
                    </h1>
                    <?php endif; ?>

                    <?php if ($text_description = get_field('home_about_text_description')): ?>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <?php echo wp_kses_post($text_description); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ($text_description2 = get_field('home_about_text_description_2')): ?>
                    <p>
                        <?php echo wp_kses_post($text_description2); ?>
                    </p>
                    <?php endif; ?>

                    <?php 
                    $learn_link   = get_field('home_about_learn_more_link'); 
                    $learn_text   = get_field('home_about_learn_more_link_text'); 
                    $contact_link = get_field('home_about_contact_link'); 
                    $contact_text = get_field('home_about_contact_link_text'); 
                    ?>

                    <?php if ($learn_link && $learn_text): ?>
                    <a class="btn btn-primary py-2 px-3 me-3" href="<?php echo esc_url($learn_link); ?>"
                        target="_blank">
                        <?php echo esc_html($learn_text); ?>
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <?php endif; ?>

                    <?php if ($contact_link && $contact_text): ?>
                    <a class="btn btn-outline-primary py-2 px-3 mt-3 mt-lg-0"
                        href="<?php echo esc_url($contact_link); ?>" target="_blank">
                        <?php echo esc_html($contact_text); ?>
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Our Solution Start -->
<div class="container-xxl bg-light my-0 my-lg-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php echo esc_html(get_field('home_about_our_solution')); ?>
            </div>
            <h1 class="display-6 mb-5">
                <?php echo esc_html(get_field('home_about_our_solution_heading')); ?>
            </h1>
        </div>

        <div class="row g-4 g-lg-5 justify-content-center">

            <?php 
            $home_our_solution = new WP_Query(array(
                'post_type'      => 'home_our_solution',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ));

            while ($home_our_solution->have_posts()) : $home_our_solution->the_post();
                $solution_causes_image = get_field('solution_causes_image');
                $service_metric_left_value = get_field('service_metric_left_value');
                $service_metric_left_label = get_field('service_metric_left_label');
                $service_metric_right_value = get_field('service_metric_right_value');
                $service_metric_right_label = get_field('service_metric_right_label');
                $service_progress_percentage = get_field('service_progress_percentage');
        ?>

            <!-- Each Solution Item -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>
                                <?php echo esc_html(get_field('solution_causes_name')); ?>
                            </small>
                        </div>
                        <h5 class="mb-3">
                            <?php echo esc_html(get_field('solution_causes_name_heading')); ?>
                        </h5>
                        <?php the_field('solution_causes_text_description'); ?>

                        <!-- Dynamic Progress Section -->
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <?php if ($service_metric_left_value && $service_metric_left_label): ?>
                                <p class="text-dark">
                                    <?php echo esc_html($service_metric_left_value); ?>
                                    <small class="text-body">
                                        <?php echo esc_html($service_metric_left_label); ?>
                                    </small>
                                </p>
                                <?php endif; ?>

                                <?php if ($service_metric_right_value && $service_metric_right_label): ?>
                                <p class="text-dark">
                                    <?php echo esc_html($service_metric_right_value); ?>
                                    <small class="text-body">
                                        <?php echo esc_html($service_metric_right_label); ?>
                                    </small>
                                </p>
                                <?php endif; ?>
                            </div>

                            <?php if ($service_progress_percentage): ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="<?php echo intval($service_progress_percentage); ?>"
                                    aria-valuemin="0" aria-valuemax="100"
                                    style="width: <?php echo intval($service_progress_percentage); ?>%;">
                                    <span>
                                        <?php echo esc_html($service_progress_percentage); ?>%
                                    </span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Image + Button -->
                    <div class="position-relative mt-auto">
                        <?php if ($solution_causes_image): ?>
                        <img class="img-fluid" src="<?php echo esc_url($solution_causes_image); ?>"
                            alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="<?php the_field('solution_causes_link_more'); ?>"
                                target="_blank">
                                <?php echo esc_html(get_field('solution_causes_link_more_name')); ?>
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</div>
<!-- Our Solution End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php echo esc_html(get_field('home_services_text_name')); ?>
            </div>
            <h1 class="display-6 mb-5">
                <?php echo esc_html(get_field('home_services_text_heading')); ?>
            </h1>
        </div>
        <div class="row g-4 justify-content-center">

            <?php 
            $home_our_services = new WP_Query(array(
                'post_type'      => 'home_our_services',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ));

            while ($home_our_services->have_posts()) : $home_our_services->the_post();

                $home_services_image        = get_field('home_services_image');
                $services_text_name         = get_field('services_text_name');
                $services_text_description  = get_field('services_text_description'); // WYSIWYG/textarea
                $services_page_link         = get_field('services_page_link');
                $services_page_link_text    = get_field('services_page_link_text');
            ?>

            <!-- Service Item -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <?php if ($home_services_image): ?>
                    <img class="img-fluid service-img-fluid mb-4" src="<?php echo esc_url($home_services_image); ?>"
                        alt="<?php echo esc_attr($services_text_name); ?>">
                    <?php endif; ?>

                    <h5 class="mb-3">
                        <?php echo esc_html($services_text_name); ?>
                    </h5>

                    <div class="mb-3">
                        <?php echo wp_kses_post($services_text_description); ?>
                    </div>

                    <?php if ($services_page_link && $services_page_link_text): ?>
                    <a class="btn btn-outline-primary px-3" href="<?php echo esc_url($services_page_link); ?>"
                        target="_blank">
                        <?php echo esc_html($services_page_link_text); ?>
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark feature pt-5">
    <div class="container pt-0 pt-lg-5">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                <h1 class="text-white mb-4">
                    <?php echo esc_html(get_field('home_why_choose_text_name')); ?>
                </h1>
                <?php the_field('home_why_choose_text_description'); ?>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>
                        <?php echo esc_html(get_field('why_choose_services_list1')); ?>
                    </span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>
                        <?php echo esc_html(get_field('why_choose_services_list2')); ?>
                    </span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>
                        <?php echo esc_html(get_field('why_choose_services_list3')); ?>
                    </span>
                </div>
                <div class="d-flex align-items-center text-white mb-3">
                    <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                        <i class="fa fa-check"></i>
                    </div>
                    <span>
                        <?php echo esc_html(get_field('why_choose_services_list4')); ?>
                    </span>
                </div>

                <div class="row g-4 g-lg-5 pt-3">
                    <?php 
                        $why_choose_counter = new WP_Query(array(
                            'post_type'      => 'why_choose_counter',
                            'posts_per_page' => -1,
                            'orderby'        => 'title',
                            'order'          => 'ASC'
                        ));

                        while ($why_choose_counter->have_posts()) : $why_choose_counter->the_post(); 
                            $icon  = get_field('why_choose_counter_icon');
                            $value = get_field('why_choose_counter_value');
                            $text  = get_field('why_choose_counter_text');
                    ?>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="<?php echo esc_attr($icon); ?> fa-3x text-white"></i>
                                <div class="ms-3">
                                    <div class="d-flex">
                                        <h2 class="text-white mb-0" data-toggle="counter-up">
                                            <?php echo esc_html($value); ?>
                                        </h2>

                                        <?php if ($text === 'Happy Client' || $text === 'Happy Clients') : ?>
                                            <span class="text-primary ms-1" style="font-size: 1.5rem;">%</span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="text-white mb-0"><?php echo esc_html($text); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="col-lg-6 pb-5">
                <?php 
                    $why_choose_feature = new WP_Query(array(
                        'post_type'      => 'why_choose_feature',
                        'posts_per_page' => -1,
                        'orderby'        => 'title',
                        'order'          => 'ASC'
                    ));

                    while ($why_choose_feature->have_posts()) : $why_choose_feature->the_post(); 
                ?>
                    <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                        
                        <div class="d-flex align-items-center">
                            <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                                <i class="<?php echo esc_attr(get_field('why_choose_feature_icon')); ?> fa-2x text-white"></i>
                            </div>
                            <div class="px-3">
                                <h4 class="text-white mb-3">
                                    <?php echo esc_html(get_field('why_choose_feature_text')); ?>
                                </h4>
                            </div>
                        </div>

                        <div class="text-white">
                            <?php echo wp_kses_post(get_field('why_choose_feature_text_description')); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->


<!-- Our Core Strengths Start -->
<div class="container-xxl py-5">
    <div class="container pb-lg-5">
        <div class="row g-4 g-lg-5">
            <!-- Left Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">
                        <?php echo esc_html(get_field('home_core_strengths_text')); ?>
                    </h6>
                    <h1 class="display-6 mb-0">
                        <?php echo esc_html(get_field('home_core_strengths_heading')); ?>
                    </h1>
                </div>

                <div class="core-strengths-description">
                    <?php echo wp_kses_post(get_field('home_core_strengths_description')); ?>
                </div>

                <div class="row gy-4 gy-lg-5 gx-4 gx-lg-5">
                    <?php 
                        $home_core_strengths = new WP_Query(array(
                            'post_type'      => 'home_core_strengths',
                            'posts_per_page' => -1,
                            'orderby'        => 'title',
                            'order'          => 'ASC'
                        ));

                        if ( $home_core_strengths->have_posts() ) :
                            while ( $home_core_strengths->have_posts() ) : $home_core_strengths->the_post(); 
                    ?>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="<?php echo esc_attr(get_field('core_strengths_icon')); ?> fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0"><?php echo esc_html(get_field('core_strengths_text_tittle')); ?></h6>
                            </div>
                            <p><?php echo wp_kses_post(get_field('core_strengths_text_description')); ?></p>
                        </div>
                    <?php 
                            endwhile; 
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100"
                        src="<?php echo esc_url(get_field('home_core_strengths_image')); ?>"
                        alt="Core Strengths" style="object-fit: cover;">

                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                        style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">
                                <?php echo esc_html(get_field('home_core_strengths_year_num')); ?>
                            </h1>
                            <h2 class="text-white">
                                <?php echo esc_html(get_field('home_core_strengths_year_text')); ?>
                            </h2>
                            <h5 class="text-white mb-0">
                                <?php echo esc_html(get_field('home_core_strengths_expertise')); ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Core Strengths End -->


<!-- Team Start -->
<div class="container-fluid bg-light py-5">
    <div class="container pb-5">
        <div class="d-flex flex-column mx-auto text-start text-lg-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
            style="max-width: 800px;">
            <h4 class="text-secondary"><?php echo esc_html(get_field('our_team_text_heading')); ?></h4>
            <h1 class="display-6 mb-4"><?php echo esc_html(get_field('our_team_text_name')); ?></h1>
            <p><?php echo wp_kses_post(get_field('our_team_text_description')); ?></p>
        </div>
        <div class="row g-4">
            <?php 
                $our_team = new WP_Query(array(
                    'post_type'      => 'our_team',
                    'posts_per_page' => -1,
                    'orderby'        => 'title',
                    'order'          => 'ASC'
                ));

                if ($our_team->have_posts()) :
                    while ($our_team->have_posts()) : $our_team->the_post(); 
                        $team_member_image = get_field('team_member_image'); // define image field
            ?>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="team-item position-relative overflow-hidden">
                    <?php if ($team_member_image) : ?>
                        <img class="img-fluid w-100" src="<?php echo esc_url($team_member_image); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                    <div class="team-overlay">
                        <small class="mb-2"><?php echo esc_html(get_field('team_member_role')); ?></small>
                        <h4 class="lh-base text-light"><?php echo esc_html(get_field('team_member_name')); ?></h4>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
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
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <?php if (get_field('testimonial_text_heading')) : ?>
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    <?php echo esc_html(get_field('testimonial_text_heading')); ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('testimonial_text_name')) : ?>
                <h1 class="display-6 mb-5"><?php echo esc_html(get_field('testimonial_text_name')); ?></h1>
            <?php endif; ?>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php 
                $testimonials = new WP_Query(array(
                    'post_type'      => 'testimonials',
                    'posts_per_page' => -1,
                    'orderby'        => 'title',
                    'order'          => 'ASC'
                ));

                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post(); 
                        $testimonial_client_image = get_field('testimonial_client_image'); 
                        $testimonial_text = get_field('testimonials_text_description');
                        $testimonial_name = get_field('testimonial_client_name');
                        $testimonial_designation = get_field('testimonial_client_desgination');
            ?>
            <div class="testimonial-item text-center">
                <?php if ($testimonial_client_image) : ?>
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="<?php echo esc_url($testimonial_client_image); ?>"
                        alt="<?php echo esc_attr($testimonial_name); ?>"
                        style="width: 100px; height: 100px;">
                <?php endif; ?>
                <div class="testimonial-text rounded text-center p-4">
                    <?php if ($testimonial_text) : ?>
                        <div class="testimonial-content">
                            <?php echo wp_kses_post($testimonial_text); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($testimonial_name) : ?>
                        <h5 class="mb-1"><?php echo esc_html($testimonial_name); ?></h5>
                    <?php endif; ?>
                    <?php if ($testimonial_designation) : ?>
                        <span class="fst-italic"><?php echo esc_html($testimonial_designation); ?></span>
                    <?php endif; ?>
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
<!-- Testimonial End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <?php 
                $vendor_company = new WP_Query(array(
                    'post_type'      => 'vendor_company',
                    'posts_per_page' => -1,
                    'orderby'        => 'title',
                    'order'          => 'ASC'
                ));

                if ($vendor_company->have_posts()) :
                    while ($vendor_company->have_posts()) : $vendor_company->the_post(); 
                        $vendor_company_image = get_field('vendor_company_image'); 
                ?>
                        <?php if ($vendor_company_image) : ?>
                            <div class="bg-light p-4">
                                <img src="<?php echo esc_url($vendor_company_image); ?>" 
                                     alt="<?php the_title_attribute(); ?>" 
                                     class="img-fluid">
                            </div>
                        <?php endif; ?>
                <?php 
                    endwhile; 
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


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