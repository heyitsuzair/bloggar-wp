<?php

/**
 * Main Header Of Theme
 *
 * @package Bloggar_WP
 */
?>
<div class="bg-white shadow-sm px-5 p-3">
    <div class="main-header d-flex align-items-center justify-content-between">
        <div class="left col-md-4 col-sm-4 col-lg-4 col-xs-4 brand">
            <?php
            if (has_custom_logo()) {
            ?>
            <?php
                the_custom_logo();
                ?>
            <?php
            } else {
            ?>
            <a href="<?php echo esc_attr(home_url()); ?>" class="td-none">
                <h4> <?php echo get_bloginfo('name'); ?> </h4>
            </a>
            <?php
            }
            ?>
        </div>
        <div
            class="desktop-right col-md-8 col-sm-8 col-lg-8 col-xs-8 d-none d-md-flex d-lg-flex d-xl-flex align-items-center">
            <?php wp_nav_menu(['theme_location' => 'bloggar_header_menu']); ?>
        </div>
        <div class="mobile-right col-sm-8 col-xs-8 d-lg-none justify-content-end d-xs-flex d-sm-flex d-md-none">
            <button class="bg-white border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="sidebar">
                <i class="fa fa-bars" id="hamburger" aria-hidden="true"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php wp_nav_menu([
                        'theme_location' => 'bloggar_header_menu',
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

</div>