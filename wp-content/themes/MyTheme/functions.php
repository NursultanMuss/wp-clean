<?php
/**
 * Created by PhpStorm.
 * User: Nurs
 * Date: 16.03.2019
 * Time: 16:11
 */
remove_action("wp_head", "rsd_link");
remove_action("wp_head", "wlwmanifest_link");
remove_action("wp_head", "wp_generator ");

show_admin_bar(false);
function logo_widget_init() {

    register_sidebar( array(
        'name'          => 'Логотип SVG',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<span class="hidden">',
        'after_title'   => '</span>',
    ) );

}
add_action( 'widgets_init', 'logo_widget_init' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
require_once (get_stylesheet_directory(). '/theme-options.php');