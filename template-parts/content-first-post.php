<?php

/** Content File
 * 
 * 
 * @package Bloggar_WP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    get_template_part('template-parts/components/first-post/entry-header');
    get_template_part('template-parts/components/first-post/entry-content');
    // get_template_part('./template-parts/components/blog/entry-footer');
    ?>
</article>