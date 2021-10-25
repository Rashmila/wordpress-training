<?php

/*REGISTER MENU */
function wp_custom_menu(){
    register_nav_menus(
        array(
            'header-menu' =>('Header Menu'),
            'footer-menu' => ('Footer Menu')
        )
        );
}
add_action('init','wp_custom_menu');


/*LOAD CSS FILE */
function theme_script_enqueue(){
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '', 'all');

    wp_enqueue_style('themestyle', get_template_directory_uri() . '/css/theme-style.css', array(),
     '', 'all'); 
}
add_action('wp_enqueue_scripts', 'theme_script_enqueue');

/*FEATURED IMAGE */
add_theme_support('post-thumbnails');

?>