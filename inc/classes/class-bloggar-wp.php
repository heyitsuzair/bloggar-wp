<?php

/**
 * Bootstraps the Theme.
 *
 * @package Bloggar_WP
 */

namespace BLOGGAR_WP\Inc;

use BLOGGAR_WP\Inc\Traits\Singleton;

class BLOGGAR_WP
{
    use Singleton;


    protected function __construct()
    {

        /**
         @get_instance(): To Load Classes
         */
        Assets::get_instance();
        Theme_Supports::get_instance();
        Nav_Menus::get_instance();
    }
}