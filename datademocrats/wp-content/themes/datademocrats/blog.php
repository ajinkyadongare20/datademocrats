<?php
/**
 * The main template file
 * Template Name: Blog
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
$blog_page_id = 67;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo esc_html(get_field('blog_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('blog_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('blog_breadcrumb_home_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('blog_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-3">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-primary mb-3 py-3"><?php echo esc_html(get_field('blog_main_heading_text')); ?></h1>
            <?php echo wp_kses_post(get_field('blog_main_description_text')); ?>
        </div>

        <div class="row g-4">
            <?php 
            $blog_cpt = new WP_Query(array(
                'post_type'      => 'blog_cpt',
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ));

            while ($blog_cpt->have_posts()) : $blog_cpt->the_post();
                $blog_image       = get_field('blog_image');
                $blog_date        = get_field('blog_date');
                $blog_type        = get_field('blog_type_name');
                $blog_comments    = get_field('blog_comments');
                $blog_link        = get_field('blog_attach_link');
                $blog_link_text   = get_field('blog_attach_link_text');
                $blog_description = get_field('blog_about_description');
                $blog_read_more   = get_field('blog_read_more');
            ?>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <!-- Blog Image -->
                        <div class="blog-img">
                            <?php if ($blog_image): ?>
                                <img src="<?php echo esc_url($blog_image); ?>" 
                                     class="img-fluid rounded-top w-100" 
                                     alt="<?php echo esc_attr(get_the_title()); ?>">
                            <?php endif; ?>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content rounded-bottom p-4">
                            <?php if ($blog_date): ?>
                                <div class="blog-date"><?php echo esc_html($blog_date); ?></div>
                            <?php endif; ?>

                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <?php if ($blog_type): ?>
                                    <div class="small">
                                        <span class="fa fa-user text-primary"></span>
                                        <span class="ms-2"><?php echo esc_html($blog_type); ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if ($blog_comments): ?>
                                    <div class="small">
                                        <span class="fa fa-comment-alt text-primary"></span>
                                        <span class="ms-2"><?php echo esc_html($blog_comments); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Blog Title -->
                            <?php if ($blog_link && $blog_link_text): ?>
                                <a href="<?php echo esc_url($blog_link); ?>" class="h4 d-block mb-3">
                                    <?php echo esc_html($blog_link_text); ?>
                                </a>
                            <?php endif; ?>

                            <!-- Blog Short Description -->
                            <?php if ($blog_description): ?>
                                <div class="mb-3">
                                    <?php echo wp_kses_post($blog_description); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Read More -->
                            <?php if ($blog_read_more && $blog_link): ?>
                                <a href="<?php echo esc_url($blog_link); ?>" class="btn btn-primary">
                                    <?php echo esc_html($blog_read_more); ?> <i class="fa fa-arrow-right"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- Blog End -->


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