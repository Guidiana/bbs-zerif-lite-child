<?php

// add child theme customizer settings
function bbs_zerif_customize_register( $wp_customize ) {
	// setting for subtitle
	$wp_customize->add_setting( 'zerif_bigtitle_subtitle', array('sanitize_callback' => 'zerif_sanitize_text','default' => __('SUBTITLE GOES HERE','zerif-lite')));
	$wp_customize->add_control( 'zerif_bigtitle_subtitle', array(
		'label'    => __( 'Sub Title', 'zerif-lite' ),
	      	'section'  => 'zerif_bigtitle_section',
	      	'settings' => 'zerif_bigtitle_subtitle',
		'priority'    => 3,
	));
}
add_action( 'customize_register', 'bbs_zerif_customize_register' );

?>