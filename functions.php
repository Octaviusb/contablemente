<?php
function landing_scripts() {
    wp_enqueue_style('landing-style', get_stylesheet_uri());
    wp_enqueue_script('landing-script', get_template_directory_uri() . '/js/mi-script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'landing_scripts');
?>
