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

    <h5>Muhammad Uzair</h5>
    <a href="<?php echo esc_attr('//www.upwork.com/freelancers/~017b298c253a9c9bcb') ?>"
        class="text-light fw-bold btn btn-info td-none" target="_blank">Hire Me <i class="fa fa-paper-plane"
            aria-hidden="true"></i>
    </a>
</main>