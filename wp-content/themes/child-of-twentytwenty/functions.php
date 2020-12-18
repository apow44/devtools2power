<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentytwenty-style'; // This is 'twentytwenty-style' for Twenty Twenty theme.

    wp_enqueue_style( $parent_style, get_template_directorry_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
