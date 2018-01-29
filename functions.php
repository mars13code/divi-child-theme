<?php

// PROTECTION CONTRE UN ACCES DIRECT PAR UN NAVIGATEUR
if (!function_exists('add_action')) return;

// AJOUTER SON CODE ICI
// https://codex.wordpress.org/fr:Th%C3%A8mes_Enfant
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function showThemePage ()
{
	$adminPath = __DIR__ . "/admin";
	$adminFile = "$adminPath/index.php";
	//if (!is_dir($adminPath)) mkdir($adminPath);
	//if (!is_file($adminFile)) touch($adminFile);
	
	require_once($adminFile);
}

function addThemePage ()
{
	// https://developer.wordpress.org/reference/functions/add_theme_page/
	$hookSuffix = add_theme_page('Mars13 Options', 'Mars13', 'update_themes', 'admin-mars13', 'showThemePage');
}

add_action('admin_menu', 'addThemePage');
