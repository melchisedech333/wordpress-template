<?php

/**
 * Widget.
 */

function add_widget_support () {
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
}

add_action('widgets_init', 'add_widget_support');


/**
 * Appearance -> menus feature.
 */

function add_main_nav () {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action('init', 'add_main_nav');
  

