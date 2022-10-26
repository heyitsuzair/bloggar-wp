<?php

/**
 * Front Page File
 *
 * @package Bloggar_WP
 */
?>

<?php
get_header();
?>
<main class="container p-5">
    <?php
    if (have_posts()) {
    ?>
    <div class="row">
        <?php
            if (is_home() && !is_front_page()) {

            ?>
        <h1 class="page-title">
            <?php single_post_title() ?>
        </h1>
        <div class="content">
            <?php
                    while (have_posts()) : the_post();

                    ?>
            <?php get_template_part('template-parts/content.php'); ?>

            <?php
                    endwhile
                    ?>
        </div>
        <?php
            }
            ?>
    </div>
    <?php
    } else {
        get_template_part('template-parts/content-none');
    }
    ?>
</main>
<?php
get_footer();
?>