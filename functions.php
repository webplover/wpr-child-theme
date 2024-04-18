<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

define('WPR_VERSION', '1.1.0');


// BEGIN ENQUEUE PARENT ACTION
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}


// END ENQUEUE PARENT ACTION

require_once 'wpr-inc/enqueue.php';
require_once 'wpr-inc/custom.php';
