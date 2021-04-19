<?php 

    function university_files() {
        wp_enqueue_script('main_university_js', get_theme_file_uri('/assets/js/scripts-bundled.js'), NULL, microtime(), true);

        wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime(), false);

    }

    // there's a hook for actions that link to the function
    add_action('wp_enqueue_scripts', 'university_files');

    function university_features() {
        add_theme_support('title-tag');
        register_nav_menu('header_menu_location', 'Header Menu Location');
        register_nav_menu('footer_menu_location_one', 'Footer Menu Location One');
        register_nav_menu('footer_menu_location_two', 'Footer Menu Location Two');
    }

    // add theme support in after setup theme
    add_action('after_setup_theme', 'university_features');
?>