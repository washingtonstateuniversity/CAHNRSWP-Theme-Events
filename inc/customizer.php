<?php 




add_action( 'customize_register', 'cahnrs_events_customize_register', 999 );
/**
 * Add custom settings and controls to the WP Customizer.
 *
 * @param WP_Customize_Manager $wp_customize
 */
function cahnrs_events_customize_register( $wp_customize ) {
 
 // Remove some Spine options.
	$wp_customize->remove_control( 'campus_location' );
	$wp_customize->remove_control( 'spine_bleed' );
	$wp_customize->remove_control( 'spine_theme_style' );
	$wp_customize->remove_control( 'global_main_header_sup' );
	$wp_customize->remove_control( 'global_main_header_sub' );
	$wp_customize->remove_control( 'spine_options[articletitle_show]' );
	$wp_customize->remove_control( 'spine_options[articletitle_header]' );

	
	// CAHNRS Events Header options.
	$wp_customize->add_section( 'cahnrs_events_header', array(
		'title'    => __( 'CAHNRS Events Header' ),
		'priority' => 19,
	));
	$wp_customize->add_setting('spine_options[cahnrs_events_header_bg_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
		$wp_customize->add_control('cahnrs_events_header_bg_color', array(
		'settings'   => 'spine_options[cahnrs_events_header_bg_color]',
		'label'      => __('Background Color', 'spine'),
		'section'    => 'cahnrs_events_header',
		'type'       => 'select',
		'choices'    => array(
			'gray'   => 'Gray',
			'green'  => 'Green',
			'orange' => 'Orange',
			'blue'   => 'Blue',
			'yellow' => 'Yellow',
		),
	));



	
}