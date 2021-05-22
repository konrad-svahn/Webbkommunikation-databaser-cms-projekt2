<?php
function our_theme_assets() {

    // CSS
    wp_enqueue_style(
        'theme-css',
        get_bloginfo('stylesheet_directory') . '/style.css',
        false,
        filemtime(get_template_directory() . '/style.css'),
        false
    );
}
add_action('wp_enqueue_scripts', 'our_theme_assets');

function mychildtheme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 }
 add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
// koden ovan fick jag när jag frågade Ville om hjälp och är inte skriven av mig.
//Den fixar ett problem där sidan inte laddade parent theme utan bara child themets css





 ?>