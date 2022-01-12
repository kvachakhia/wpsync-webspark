<?php
/*
Plugin Name: wpsync-webspark
Plugin URI:  https://github.com/kvachakhia/wpsync-webspark
Description: wpsync-webspark
Version:     1.0
Author:      Dimitri Kvachakhia
Author URI:  https://dima.ge
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined('ABSPATH') or die('Nope, not accessing this');


if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require 'importer.php';
}
