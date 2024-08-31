<?php
add_action('wp_enqueue_scripts', 'theme_scritps');
function theme_scritps()
{
    // Styles
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/scss/app.min.css',
        array(),
        _VERSION
    );

    //Scripts
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/assets/js/app.min.js',
        array(),
        _VERSION,
        true
    );
}
