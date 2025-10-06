<?php
/**
 * The main template file
 * Template Name: Quote
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
$quote_page_id = 18;
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown m-5">
            <?php echo get_field('quote_breadcrumb_page', $quote_page_id); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="<?php echo esc_url(get_field('contact_breadcrumb_home_link')); ?>"><?php echo get_field('quote_breadcrumb_home_text', $quote_page_id); ?></a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo get_field('quote_breadcrumb_page', $quote_page_id); ?>
                </li>
            </ol>
        </nav>
    </div> 
</div>
<!-- Page Header End -->


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
            <h5 class="mb-2"><?php echo esc_html(get_field('quote_main_assistance', $quote_page_id)); ?></h5>
            <h4 class="text-primary mb-0"><?php echo esc_html(get_field('quote_contact_number', $quote_page_id)); ?></h4>
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