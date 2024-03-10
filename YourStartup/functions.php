<?php

function YourStartup_assets() {
    wp_enqueue_style('ico', get_template_directory_uri() . '/assets/images/Group 35.ico');

    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/CSS/styles.css');
    
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/JavaScript/script.js', array(), '20151215', true );

    // wp_enqueue_script('', get_template_directory_uri() . '', array(), '', true );

    // if (is_singular() && comments_open() && get_option( '' ) ) {
    //     wp_enqueue_scripts( '' );
    // }
}

add_action( 'wp_enqueue_scripts', 'YourStartup_assets' );

show_admin_bar(false);