<?php

add_action('wp_enqueue_scripts', function () {
    $stylesheet_uri = get_stylesheet_directory_uri();

    /**
     * Global
     */
    // wp_enqueue_script('wpr-jjj', "$stylesheet_uri/wpr-assets/js/jjj.js", ['jquery'], WPR_VERSION, true);

    /**
     * Load with condition
     */
    if (is_page()) {
        // wp_enqueue_style('wpr-jjj', "$stylesheet_uri/wpr-assets/css/jjj.css", [], WPR_VERSION);
    }
});
