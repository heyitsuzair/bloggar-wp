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
        <?php   } ?>
        <div class="content my-3">
            <div class="row">

                <?php
                    $is_post_first = true;
                    while (have_posts()) : the_post();
                        if ($is_post_first) {
                    ?>
                <div class="col-md-12">
                    <?php get_template_part('template-parts/content-first-post'); ?>
                </div>
                <?php
                        } else {
                        ?>
                <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4"><?php
                                                                                get_template_part('template-parts/content');
                                                                                ?></div>
                <?php
                        }
                        ?>
                <?php
                        $is_post_first = false;
                    endwhile ?>
            </div>
        </div>
        <div class="next-prev-links mt-5">
            <?php bloggar_numeric_posts_nav(); ?>
        </div>
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