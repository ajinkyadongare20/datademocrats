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
$index_page_id = 9;
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('awards_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('awards_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('awards_breadcrumb_home_link_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('awards_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Awards & Recognition Section Start -->
<div class="container px-3 px-lg-0">
    <div class="py-5">
        <h2 class="text-dark fw-bold text-start mb-4 mb-lg-5">
            <?php echo esc_html(get_field('awards_heading_name')); ?>
        </h2>

        <div class="row g-4 g-lg-5 portfolio-container">
            <?php 
            $awards_cpt = new WP_Query(array(
                'post_type'      => 'awards_cpt',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC'
            ));

            if ($awards_cpt->have_posts()) :
                while ($awards_cpt->have_posts()) : $awards_cpt->the_post();

                    $awards_image        = get_field('awards_image'); 
                    $awards_heading_text = get_field('awards_heading_text');
                    $awards_icon         = get_field('awards_icon');
                    $awards_heading_desc = get_field('awards_heading_description');

                    // Normalize image URL
                    $awards_image_url = '';
                    if (is_array($awards_image) && isset($awards_image['url'])) {
                        $awards_image_url = $awards_image['url'];
                    } elseif (is_string($awards_image)) {
                        $awards_image_url = $awards_image;
                    } elseif (is_numeric($awards_image)) {
                        $awards_image_url = wp_get_attachment_url($awards_image);
                    }
            ?>
                <div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
                    <div class="position-relative portfolio-box">
                        <?php if ($awards_image_url) : ?>
                            <img 
                                class="img-fluid w-100" 
                                src="<?php echo esc_url($awards_image_url); ?>" 
                                alt="<?php echo esc_attr($awards_heading_text); ?>" 
                                style="height: 700px; object-fit: cover;">
                        <?php endif; ?>

                        <a class="portfolio-title shadow-sm" href="#">
                            <?php if ($awards_heading_text) : ?>
                                <p class="h4"><?php echo esc_html($awards_heading_text); ?></p>
                            <?php endif; ?>

                            <?php if ($awards_heading_desc) : ?>
                                <span class="text-body">
                                    <?php if ($awards_icon) : ?>
                                        <i class="<?php echo esc_attr($awards_icon); ?> text-primary me-2"></i>
                                    <?php endif; ?>
                                    <?php echo wp_kses_post($awards_heading_desc); ?>
                                </span>
                            <?php endif; ?>

                        </a>
                    </div>
                </div>
            <?php 
                endwhile; 
                wp_reset_postdata();
            else :
                echo '<p>No awards found.</p>';
            endif; 
            ?>
        </div>
    </div>
</div>
<!-- Awards & Recognition Section End -->


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