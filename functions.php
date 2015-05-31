<?php

// do not want to show admin bar
add_filter('show_admin_bar', '__return_false');


// need to make sure the css is loaded in the right order
function bbs_fix_style_deps() {
    // bootstrap should be a dependency so it loads first
    wp_enqueue_style('zerif_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array('zerif_bootstrap_style'));
}
add_action( 'wp_enqueue_scripts', 'bbs_fix_style_deps');


// child theme customizer elements
function bbs_zerif_setup() {
    require get_stylesheet_directory() . '/inc/customizer.php';
}
add_action( 'after_setup_theme', 'bbs_zerif_setup' );

?>