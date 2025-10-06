<?php
/**
 * The main template file
 * Template Name: Company Culture
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
            <?php echo esc_html(get_field('company_culture_breadcrumb_page')); ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white"
                        href="<?php echo esc_url(get_field('company_culture_breadcrumb_home_link')); ?>">
                        <?php 
                            $home_text = get_field('company_culture_breadcrumb_home_link_text'); 
                            echo $home_text ? esc_html($home_text) : 'Home'; 
                        ?>
                    </a>
                </li>
                <li class="breadcrumb-item text-light active" aria-current="page">
                    <?php echo esc_html(get_field('company_culture_breadcrumb_page')); ?>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Start Download Culture -->
<div class="hero-banner d-flex align-items-center justify-content-center text-white mb-5">
    <div class="text-center">
        <?php 
            $pdf_url = get_field('company_culture_profile_pdf'); // PDF File (URL)
            $button_text = get_field('company_culture_profile_pdf_text'); // Button Text
            if($pdf_url): 
        ?>
        <a href="<?php echo esc_url($pdf_url); ?>" download class="btn btn-light btn-lg mt-3 p-4">
            <i class="fas fa-download me-2"></i>
            <?php echo esc_html($button_text ?: 'Download PDF'); ?>
        </a>
        <?php endif; ?>
    </div>
</div>


<div class="container py-5 mb-5">
    <div class="row">
        <!-- Filters Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="filter-section">
                <div class="mb-4">
                    <h5 class="fw-bold mb-3">
                        <?php echo esc_html(get_field('company_culture_filters_heading')); ?>
                    </h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-primary" placeholder="Search resources...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="accordion" id="filterAccordion">

                <?php 
                $company_culture_filt = new WP_Query(array(
                    'post_type'      => 'company_culture_filt',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'ASC'
                ));

                if ($company_culture_filt->have_posts()) :
                    $accordion_index = 0; // unique ID for each accordion
                    while ($company_culture_filt->have_posts()) : $company_culture_filt->the_post(); 
                        $accordion_index++;
                        $collapse_id = 'filterSection' . $accordion_index;
                ?>

                    <div class="accordion-item mb-2 border-0">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-primary btn btn-primary shadow-download"
                                type="button" data-bs-toggle="collapse"
                                data-bs-target="#<?php echo esc_attr($collapse_id); ?>">
                                <i
                                    class="<?php echo esc_attr(get_field('company_culture_section_icon')); ?> me-2 text-white"></i>
                                <?php echo esc_html(get_field('company_culture_section_tittle')); ?>
                            </button>
                        </h2>
                        <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse"
                            data-bs-parent="#filterAccordion">
                            <div class="accordion-body pt-3">

                                <?php 
                                // Loop through 4 checkbox fields
                                for($i = 1; $i <= 4; $i++):
                                    $checkbox_id    = get_field("company_culture_section_id_$i");
                                    $checkbox_label = get_field("company_culture_section_lebal_$i");
                                    if($checkbox_id && $checkbox_label): 
                                ?>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"
                                        id="<?php echo esc_attr($checkbox_id); ?>">
                                    <label class="form-check-label" for="<?php echo esc_attr($checkbox_id); ?>">
                                        <?php echo esc_html($checkbox_label); ?>
                                    </label>
                                </div>
                                <?php 
                                    endif;
                                endfor; 
                                ?>

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

        <div class="col-lg-9">
            <!-- Corporate Profile -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">
                    <?php echo esc_html(get_field('company_culture_profile_main_heading')); ?>
                </h3>
                <div class="download-card p-4 bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <i
                                class="<?php echo esc_attr(get_field('company_culture_profile_icon')); ?> text-primary fs-1"></i>
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold">
                                <?php echo esc_html(get_field('company_culture_profile_sub_heading')); ?>
                            </h5>
                            <div class="text-muted">
                                <?php echo wp_kses_post(get_field('company_culture_profile_description')); ?>
                            </div>
                        </div>
                        <div class="col-md-2 text-center text-md-end">
                            <?php 
                            $download_pdf_url   = get_field('company_culture_profile_file_download'); // PDF File (URL)
                            $download_button_text = get_field('company_culture_profile_file_text');    // Button Text
                            
                            if ($download_pdf_url): ?>
                            <a href="<?php echo esc_url($download_pdf_url); ?>" download class="btn btn-primary px-3">
                                <i class="fas fa-download me-2"></i>
                                <?php echo esc_html($download_button_text ?: 'Download PDF'); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <!-- Sector Brochures -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">
                    <?php echo esc_html(get_field('company_culture_solution_brochures_heading')); ?>
                </h3>

                <div class="row g-4">
                    <?php 
                    $company_solution_bro = new WP_Query(array(
                        'post_type'      => 'company_solution_bro',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',
                        'order'          => 'ASC'
                    ));

                    if ($company_solution_bro->have_posts()) :
                        while ($company_solution_bro->have_posts()) : $company_solution_bro->the_post(); 
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="download-card p-4 h-100 bg-white">

                            <div class="d-flex align-items-center mb-3">
                                <i class="<?php echo esc_html(get_field('company_culture_solution_brochures_icon')); ?> me-3 text-primary"
                                    style="font-size: 1.5rem;"></i>
                                <h5 class="fw-bold mb-0">
                                    <?php the_title(); ?>
                                </h5>
                            </div>

                            <?php echo wp_kses_post(get_field('company_culture_solution_brochures_description')); ?>

                            <?php 
                                $download_pdf_url  = get_field('company_culture_solution_brochures_pdf_download'); 
                                $download_button_text = get_field('company_culture_solution_brochures_pdf_text'); 
                                
                                if ($download_pdf_url): ?>
                            <a href="<?php echo esc_url($download_pdf_url); ?>" download class="btn btn-primary w-100">
                                <i class="fas fa-download me-2"></i>
                                <?php echo esc_html($download_button_text ?: 'Download PDF'); ?>
                            </a>
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

            <div class="section-divider"></div>

            <!-- Services Catalogues -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">Services Catalogues</h3>

                <ul class="nav nav-pills mb-4" id="servicesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="digital-tab" data-bs-toggle="pill"
                            data-bs-target="#digital-pane" type="button" role="tab">
                            Digital Transformation
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ai-tab" data-bs-toggle="pill" data-bs-target="#ai-pane"
                            type="button" role="tab">
                            AI & Analytics
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cyber-tab" data-bs-toggle="pill" data-bs-target="#cyber-pane"
                            type="button" role="tab">
                            Cybersecurity
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="servicesTabContent">
                    <div class="tab-pane fade show active" id="digital-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">End-to-End Digital Transformation</h5>
                                    <p class="text-muted small mb-3">Strategy, implementation and managed services</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">Industry 4.0 Playbook</h5>
                                    <p class="text-muted small mb-3">Smart manufacturing with automation and IoT</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ai-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">AI/ML Solutions</h5>
                                    <p class="text-muted small mb-3">Advanced AI for smarter decisions</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cyber-pane" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="download-card p-4 h-100 bg-white">
                                    <h5 class="fw-bold mb-3">Threat Detection Catalogue</h5>
                                    <p class="text-muted small mb-3">AI-based surveillance and cyber protection</p>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-download me-1"></i> Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-divider"></div>


            <!-- Technical Resources -->
            <div class="mb-5">
                <h3 class="fw-bold mb-4">
                    <?php echo esc_html(get_field('company_culture_technical_heading')); ?>
                </h3>

                <?php 
                // Query all Technical Resources
                $tech_query = new WP_Query(array(
                    'post_type'      => 'company_culture_tech',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                ));

                if ($tech_query->have_posts()) :
                    while ($tech_query->have_posts()) : $tech_query->the_post(); 
                        $heading = get_field('company_culture_technical_resources_heading');
                        $description = get_field('company_culture_technical_resources_description');
                        $pdf_url = get_field('company_culture_technical_resources_file');
                        $pdf_text = get_field('company_culture_technical_resources_file_download');
                ?>
                <div class="download-card p-4 bg-white mb-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 text-center">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div class="col-md-8">
                            <?php if ($heading): ?>
                            <h5 class="fw-bold mb-1">
                                <?php echo esc_html($heading); ?>
                            </h5>
                            <?php endif; ?>
                            <?php if ($description): ?>
                            <?php echo wp_kses_post($description); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 text-center text-lg-end">
                            <?php if ($pdf_url): ?>
                            <a href="<?php echo esc_url($pdf_url); ?>" download class="btn btn-primary">
                                <i class="fas fa-download me-2"></i>
                                <?php echo esc_html($pdf_text ?: 'Download PDF'); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile; 
                    wp_reset_postdata(); 
                else: 
                    echo '<p>No technical resources available.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="section-divider"></div>
<!-- End Company Culture -->


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