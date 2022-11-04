<?php

/**
 * Pre Footer For the Theme.
 *
 * @package Bloggar_WP
 */
?>

<main class="d-flex flex-column align-items-center gap-3 testimonial justify-content-center p-5">
    <img src="<?php echo get_theme_mod('testimonial-image-setting') == '' ? BLOGGAR_WP_DIR_URI . '/assets/img/me.jpg' : get_theme_mod('testimonial-image-setting'); ?>"
        class="<?php echo esc_attr('testimonial-img') ?>" alt="<?php echo esc_attr('Loading...') ?>"
        loading="<?php echo esc_attr('lazy') ?>">

    <h5><?php echo get_theme_mod('testimonial-name-setting') == '' ? 'Muhammad Uzair' : get_theme_mod('testimonial-name-setting') ?>
    </h5>
    <a href="<?php echo esc_attr(get_theme_mod('testimonial-btn-link-setting') == '' ? '#' : get_theme_mod('testimonial-btn-link-setting')) ?>"
        class="text-light fw-bold btn <?php echo get_theme_mod('testimonial-btn-color-setting') == '' ? ' btn-info' : '' ?> td-none testi-btn"
        target="_blank"><?php echo get_theme_mod('testimonial-btn-text-setting') == '' ? 'Hire Me' : get_theme_mod('testimonial-btn-text-setting') ?>
        <i class="<?php echo get_theme_mod('testimonial-btn-icon-setting') == '' ? "fa fa-paper-plane" : get_theme_mod('testimonial-btn-icon-setting') ?>"
            aria-hidden="true"></i>
    </a>
</main>