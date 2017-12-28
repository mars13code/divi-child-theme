<?php

// PROTECTION CONTRE UN ACCES DIRECT PAR UN NAVIGATEUR
if (!function_exists('add_action')) return;

// AJOUTER SON CODE ICI
// https://codex.wordpress.org/fr:Th%C3%A8mes_Enfant
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
