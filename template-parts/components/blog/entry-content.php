<?php

/** Content File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<?php
if (is_home() && !is_front_page()) {
?>
<div class="entry-title">
    <a href="<?php esc_url(the_permalink()) ?>" class="post-title-link">
        <?php the_title('<h5 class="blog-post-title">', '</h5>'); ?>
    </a>
</div>
<?php
} else {
    if (is_single()) {
    ?>
<div class="single-blog-content mt-5">
    <?php
            the_title('<h1 class="entry-title fw-bold">', '</h1>');
            get_template_part('template-parts/components/blog/entry-meta');
            ?>
</div>
<?php
    } elseif (is_front_page()) {
        the_content();
    }
}
?>