<?php

/** Blog Meta File
 * 
 * 
 * @package Bloggar_WP
 */
?>

<?php
if (is_single() && !is_front_page()) :
?>
<div class="date-published">
    <h5 class="date my-4">
        <?php the_time('Y-m-d'); ?>
    </h5>
</div>
<?php endif; ?>