<?php

/**
 * Main Header Of Theme
 *
 * @package Bloggar_WP
 */
?>
<div class="bg-light px-5 p-3">
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
            <ul class="mb-0 list-unstyled">
                <li>
                    <a class="header-link active nav-link fw-bold" href="#">Home</a>
                </li>
            </ul>
        </div>
    </div>

</div>