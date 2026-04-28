<?php

// admin side
function sanabil_plugin_admin_scripts(){
	wp_enqueue_style( 'sanabil-plugin-admin-css', SANABIL_PLUGIN_DIR_URL . 'admin/css/admin.css', '', SANABIL_PLUGIN_VERSION );
	wp_enqueue_script( 'sanabil-plugin-admin-js', SANABIL_PLUGIN_DIR_URL . 'admin/js/admin.js', '', SANABIL_PLUGIN_VERSION, true );
}

add_action( 'admin_enqueue_scripts', 'sanabil_plugin_admin_scripts');

// frontend side
function sanabil_plugin_public_scripts(){
	wp_enqueue_style( 'sanabil-plugin-public-css', SANABIL_PLUGIN_DIR_URL . 'public/css/public.css', '', SANABIL_PLUGIN_VERSION );
	wp_enqueue_script( 'sanabil-plugin-public-js', SANABIL_PLUGIN_DIR_URL . 'public/js/public.js', '', SANABIL_PLUGIN_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'sanabil_plugin_public_scripts');
