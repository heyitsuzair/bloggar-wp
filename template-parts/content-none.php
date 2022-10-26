<?php

/** Content None File
 * 
 * 
 * @package Bloggar_WP
 */

?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('No Post Found!', 'aquila') ?></h1>
    </header>
    <div class="page-content">
        <?php
        if (is_home() && current_user_can('edit_posts')) {
        ?>
        <p>
            <?php printf(wp_kses(
                    __('Ready To Publish Your First Post? <a href="%s">Get Started Now!</a>', 'aquila'),
                    [
                        'a' => [
                            'href' => []
                        ]
                    ]
                ), esc_url(admin_url('post-new.php'))) ?>
        </p>
        <?php
        } elseif (is_search()) {
        ?>
        <p><?php esc_html_e('Nothing Matched Your Search!', 'aquila') ?></p>
        <?php
            get_search_form();
        } else {
        ?>
        <p><?php esc_html_e('It Seems That We Cannot Find Something You Looking For.!', 'aquila') ?></p>
        <?php
            get_search_form();
        }
        ?>
    </div>
</section>