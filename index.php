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
    <div class="blog-content">
        <?php
            if (is_home() && !is_front_page()) {
            ?>
        <h1 class="page-title text-center my-2">
            <?php single_post_title() ?>
        </h1>
        <div class="content my-3">
            <?php
                    $is_post_first = true;
                    while (have_posts()) : the_post();

                    ?>
            <?php $is_post_first ? get_template_part('template-parts/content-first-post') : get_template_part('template-parts/content'); ?>

            <?php
                        $is_post_first = false;
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