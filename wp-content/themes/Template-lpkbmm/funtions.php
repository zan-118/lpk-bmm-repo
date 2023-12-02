<?php
function enqueue_scripts_and_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css', array(), '5.3.0', 'all');

    // Custom CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

    // Google Fonts - Roboto
    wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', array(), null, 'all');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');

    // jQuery (WordPress default)
    wp_enqueue_script('jquery');

    // Your custom script
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles');

function add_custom_favicon() {
    // Favicon
    echo '<link rel="icon" href="https://lpkbinamudamandiri.com/wp-content/uploads/2023/11/favicon-32x32-1.png" type="image/x-icon" />' . "\n";
}
add_action('wp_head', 'add_custom_favicon');

// Membersihkan seluruh cache
function clear_all_cache() {
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
}
add_action('init', 'clear_all_cache');

?>
