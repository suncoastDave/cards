<?php

  //  require get_theme_file_path('/includes/search-route.php');

function prescriptionDotCards_files() {
    wp_enqueue_style('cards_main_styles', get_stylesheet_uri());
    wp_enqueue_style('cards_main_styles2', get_template_directory_uri() . '/css/custom.min.css');
    wp_enqueue_script('main_javascript_file', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'prescriptionDotCards_files');

function prescriptionCards_features(){
    register_nav_menu( 'headerMenuLocation', 'Test from functions.php' );
    add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'prescriptionCards_features');

function typeaheadJs() {

	if( is_front_page() ) {

	wp_enqueue_script('search_javascript_file', get_template_directory_uri() . '/js/typeahead.js', array(), 1.0, true);

	}
}

add_action( 'wp_enqueue_scripts', 'typeaheadJs');


//function drug_search_custom_rest() {
//    deleted. ACF does this for you.

