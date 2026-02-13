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
$about_page_id = 13;
$index_page_id = 9;
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('about_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('about_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('about_breadcrumb_home_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('about_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Start Overview Section -->
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h2 class="section-title">
                <?php echo esc_html(get_field('about_company_overview')); ?>
            </h2>
            <div class="card overview-card animate-on-scroll">
                <div class="card-header">
                    <h3 class="text-light mb-0">
                        <i class="fas fa-building me-2"></i>
                        <?php echo esc_html(get_field('about_compnany_overview_heading')); ?>
                    </h3>
                </div>
                <div class="card-body">
                    <?php echo wp_kses_post(get_field('about_compnany_overview_description')); ?>

                    <?php for ($i = 1; $i <= 3; $i++): 
                        $tagline = get_field("about_overview_taglines_$i");
                        if ($tagline): ?>
                            <div class="tagline animate-on-scroll">
                                <i class="fas fa-quote-left me-2"></i>
                                <?php echo esc_html($tagline); ?>
                                <i class="fas fa-quote-right ms-2"></i>
                            </div>
                        <?php endif;
                    endfor; ?>
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
                    <h3 class="text-light mb-0"><i class="fas fa-history me-2"></i><?php echo esc_html(get_field('about_history_section_title')); ?></h3>
                </div>
                <div class="card-body">
                    <?php echo wp_kses_post(get_field('about_history_section_description')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End History Section -->


<!-- About Section Start -->
<div class="container-xxl py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5">
            <!-- Left Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <?php if ($large_image = get_field('about_left_large_image')): ?>
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" 
                             src="<?php echo esc_url($large_image); ?>" 
                             alt="" 
                             style="object-fit: cover;">
                    <?php endif; ?>

                    <?php if ($small_image = get_field('about_left_small_image')): ?>
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" 
                             src="<?php echo esc_url($small_image); ?>" 
                             alt="" 
                             style="width: 200px; height: 200px;">
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill text-secondary py-1 px-3 mb-3">
                        <?php echo get_field('about_section_tagline'); ?>
                    </div>
                    <h1 class="display-6 mb-3"><?php echo get_field('about_section_heading'); ?></h1>

                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <?php echo get_field('about_highlight_text'); ?>
                        <span class="text-primary"><?php echo get_field('about_founder_name'); ?></span>
                    </div>
                    
                    <?php echo get_field('about_main_content'); ?>

                    <a class="btn btn-primary py-2 px-3 me-3" href="<?php the_field('learn_more_button_link'); ?>">
                        <?php the_field('learn_more_button_text'); ?>
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>

                    <a class="btn btn-outline-primary text-dark border-secondary mt-3 mt-lg-0 py-2 px-3" 
                       href="<?php the_field('contact_us_button_link'); ?>">
                        <?php the_field('contact_us_button_text'); ?>
                        <div class="d-inline-flex btn-sm-square bg-primary text-white border-1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->


<!-- Our Mission, Vision, Values Start -->
<div class="container-xxl bg-light py-5">
    <div class="container py-2 py-lg-0">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-5"><?php echo get_field('about_mvc_heading'); ?></h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php 
            // Desired order
            $desired_order = array('Mission', 'Vision', 'Core Values');

            foreach ($desired_order as $mvc_type) :
                $about_mission_vision = new WP_Query(array(
                    'post_type'      => 'about_mission_vision',
                    'posts_per_page' => 1,
                    'meta_key'       => 'about_mvc', // Field storing "Mission", "Vision", etc.
                    'meta_value'     => $mvc_type
                ));

                while ($about_mission_vision->have_posts()) : $about_mission_vision->the_post();
            ?>
            <!-- Item -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small><?php echo esc_html(get_field('about_mvc')); ?></small>
                        </div>
                        <div class="text-start">
                            <h5 class="mb-3"><?php echo esc_html(get_field('about_mvc_name')); ?></h5>
                            <?php echo wp_kses_post(get_field('about_mvc_text_description')); ?>                        
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                endwhile; 
                wp_reset_postdata();
            endforeach;
            ?>
        </div>
    </div>
</div>
<!-- Our Mission, Vision, Values End -->


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