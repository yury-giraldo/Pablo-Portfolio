<?php
/**
 * Functions.php for child theme.
 *
 * @since   1.0.0
 *
 * @package Elementor\ChildTheme
 */

// Enqueue styles
function enqueue_child_theme_styles() {
    // Enlaza el estilo del tema hijo
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}

// Añade la acción para encolar los estilos del tema hijo
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
