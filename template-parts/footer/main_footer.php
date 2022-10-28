<?php

/**
 * Main Footer For the Theme.
 *
 * @package Bloggar_WP
 */
?>

<footer class="p-5 d-flex flex-row justify-content-between" id="footer">
    <div class="col-md-2 text-center footer-bar">
        <?php is_active_sidebar('footer-bar-1') ? dynamic_sidebar('footer-bar-1') : esc_html_e('Please Add Widgets In Footer Bar 1 To See Content Here', 'bloggar_wp'); ?>
    </div>
    <div class="col-md-2 text-center footer-bar">
        <?php is_active_sidebar('footer-bar-2') ? dynamic_sidebar('footer-bar-2') : esc_html_e('Please Add Widgets In Footer Bar 2 To See Content Here', 'bloggar_wp'); ?>
    </div>
    <div class="col-md-2 text-center footer-bar">
        <?php is_active_sidebar('footer-bar-3') ? dynamic_sidebar('footer-bar-3') : esc_html_e('Please Add Widgets In Footer Bar 3 To See Content Here', 'bloggar_wp'); ?>
    </div>
    <div class="col-md-2 text-center footer-bar">
        <?php is_active_sidebar('footer-bar-4') ? dynamic_sidebar('footer-bar-4') : esc_html_e('Please Add Widgets In Footer Bar 4 To See Content Here', 'bloggar_wp'); ?>
    </div>
    <div class="col-md-2 text-center footer-bar">
        <?php is_active_sidebar('footer-bar-5') ? dynamic_sidebar('footer-bar-5') : esc_html_e('Please Add Widgets In Footer Bar 5 To See Content Here', 'bloggar_wp'); ?>
    </div>
</footer>