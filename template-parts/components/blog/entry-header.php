<?php

/** Content Header File
 * 
 * 
 * @package Bloggar_WP
 */

?>

<?php
if (!is_single()) {
?>
<header class="entry-header post-<?php the_ID();  ?>">
    <div class="text-center mx-auto row-post mt-4 post-<?php the_ID(); ?>">
        <a href="<?php esc_url(the_permalink()); ?>" class="<?php echo esc_attr('post-thumbnail-parent'); ?>">
            <?php echo has_post_thumbnail() ? the_post_thumbnail('post-thumbnail') : get_place_holder_image('attachment-post-thumbnail'); ?>
        </a>
    </div>
</header>
<?php
} else {
?>
<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('single-post-thumbnail');
    } else {
        echo get_place_holder_image('attachment-single-post-thumbnail');
    }
    ?>
<?php
}
?>