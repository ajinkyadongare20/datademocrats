<?php
/**
 * The template for displaying the footer
 * Template Name: Footer
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package datademocrats
 */


$footer_page_id = 655; // 
?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Company Info -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold text-primary mb-4">
                        <?php echo esc_html(get_field('footer_company_name_1', $footer_page_id)); ?>
                        <span class="text-white"><?php echo esc_html(get_field('footer_company_name_2', $footer_page_id)); ?></span>
                    </h3>
                    <?php echo wp_kses_post(get_field('footer_company_description', $footer_page_id)); ?>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="<?php echo esc_url(get_field('footer_twitter_link', $footer_page_id)); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href="<?php echo esc_url(get_field('footer_facebook_link', $footer_page_id)); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="<?php echo esc_url(get_field('footer_youtube_link', $footer_page_id)); ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="<?php echo esc_url(get_field('footer_linkedin_link', $footer_page_id)); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Address -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4"><?php echo esc_html(get_field('footer_address_heading', $footer_page_id)); ?></h5>
                    <?php echo wp_kses_post(get_field('footer_full_address', $footer_page_id)); ?>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4"><?php echo esc_html(get_field('footer_quick_link_text', $footer_page_id)); ?></h5>
                    <?php 
                    $footer_quick_links = new WP_Query(array(
                        'post_type'      => 'footer_quick_links',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'ASC'
                    ));

                    if ($footer_quick_links->have_posts()) :
                        while ($footer_quick_links->have_posts()) : $footer_quick_links->the_post(); 
                            $link_url  = get_field('footer_page_quick_links');
                            $link_text = get_field('footer_page_quick_links_text');
                            if ($link_url && $link_text) :
                    ?>
                            <a class="btn btn-link" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_text); ?></a>
                    <?php 
                            endif;
                        endwhile; 
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4"><?php echo esc_html(get_field('footer_newslater_heading', $footer_page_id)); ?></h5>
                    <?php echo wp_kses_post(get_field('footer_newslater_description', $footer_page_id)); ?>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            <?php echo esc_html(get_field('footer_signup', $footer_page_id)); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <a href="<?php echo esc_url(get_field('footer_all_right_reserved_link', $footer_page_id)); ?>">
                            <?php echo wp_kses_post(get_field('all_right_reserved_text', $footer_page_id)); ?>
                        </a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <?php echo esc_html(get_field('footer_desgin_text', $footer_page_id)); ?> 
                        <a href="<?php echo esc_url(get_field('footer_desgin_link', $footer_page_id)); ?>">
                            <?php echo esc_html(get_field('footer_desgin_by', $footer_page_id)); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>