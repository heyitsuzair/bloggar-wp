<?php

/**
 * Main Header Of Theme
 *
 * @package Bloggar_WP
 */
?>
<div class="bg-white shadow-sm px-5 p-3">
    <div class="main-header d-flex">
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
            <h4> <?php echo get_bloginfo('name'); ?> </h4>
            <?php
            }
            ?>
        </div>
        <div class="right col-md-8 col-sm-8 col-lg-8 col-xs-8 d-flex align-items-center">
            <!-- <ul class="mb-0 list-unstyled d-flex justify-content-evenly">
                <li>
                    <a class="header-link active nav-link fw-bold" href="#">Home</a>
                </li>
                <li>
                    <a class="header-link nav-link fw-bold" href="#">Contact</a>
                </li>
                <li>
                    <a class="header-link nav-link fw-bold" href="#">About</a>
                </li>
                <li>
                    <a class="header-link nav-link fw-bold" href="#">Services</a>
                </li>
            </ul> -->
            <?php wp_nav_menu(['theme_location' => 'bloggar_header_menu']); ?>
        </div>
    </div>

</div>