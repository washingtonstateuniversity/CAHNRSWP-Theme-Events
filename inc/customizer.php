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

	
	// CAHNRS Events options.
	$wp_customize->add_section( 'cahnrs_events_color', array(
		'title'    => __( 'Events Colors' ),
		'priority' => 19,
	));
	$wp_customize->add_setting('spine_options[cahnrs_events_bg_color]', array(
		'default'    => 'gray',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));

		$wp_customize->add_control('cahnrs_events_bg_color', array(
		'settings'   => 'spine_options[cahnrs_events_bg_color]',
		'label'      => __('Primary Color', 'spine'),
		'section'    => 'cahnrs_events_color',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#981e32' => 'Crimson', 
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	
	$wp_customize->add_setting('spine_options[cahnrs_events_secondary_color]', array(
		'default'    => 'black',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_secondary_color', array(
		'settings'   => 'spine_options[cahnrs_events_secondary_color]',
		'label'      => __('Secondary Color', 'spine'),
		'section'    => 'cahnrs_events_color',
		'type'       => 'select',
		'choices'    => array(
			'black'  => 'Black',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));

	$wp_customize->add_setting('spine_options[cahnrs_events_tertiary_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_tertiary_color', array(
		'settings'   => 'spine_options[cahnrs_events_tertiary_color]',
		'label'      => __('Tertiary Color', 'spine'),
		'section'    => 'cahnrs_events_color',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	
		$wp_customize->add_setting('spine_options[cahnrs_events_active_link_color]', array(
		'default'    => 'light-gray',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_active_link_color', array(
		'settings'   => 'spine_options[cahnrs_events_active_link_color]',
		'label'      => __('Active Link Color', 'spine'),
		'section'    => 'cahnrs_events_color',
		'type'       => 'select',
		'choices'    => array(
					'#d7dadb' => 'Light Gray',
					'#8f7e35' => 'Green',
					'#b67233' => 'Orange',
					'#4f868e' => 'Blue',
					'#c69214' => 'Yellow',
					'#fff'	  => 'White',
		),
	));
	
	
	//Banner settings
	$wp_customize->add_section( 'cahnrs_events_banner', array(
		'title'    => __( 'Events Banner' ),
		'priority' => 19,
	));

	$wp_customize->add_setting('spine_options[cahnrs_events_banner_image]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'banner-logo',
           array(
               'label'      => __( 'Upload Banner', 'cahnrs_events_theme' ),
               'section'    => 'cahnrs_events_banner',
               'settings'   => 'spine_options[cahnrs_events_banner_image]',
               'context'    => 'your_setting_context' 
           )
       )
   );
   
   $wp_customize->add_setting('spine_options[cahnrs_events_banner_text]', array(
		'default'    => 'Event Title',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	
   $wp_customize->add_control(
    'spine_options[cahnrs_events_banner_text]',
    array(
        'label' => 'Banner Text',
        'section' => 'cahnrs_events_banner',
        'type' => 'text',
      )
	);
	
	$wp_customize->add_setting('spine_options[cahnrs_events_banner_text_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_banner_text_color', array(
		'settings'   => 'spine_options[cahnrs_events_banner_text_color]',
		'label'      => __('Banner Text Color', 'spine'),
		'section'    => 'cahnrs_events_banner',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	//Home settings
	$wp_customize->add_section( 'cahnrs_events_home', array(
		'title'    => __( 'Events Home' ),
		'priority' => 19,
	));

	$wp_customize->add_setting('spine_options[cahnrs_events_home_image]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'home-logo',
           array(
               'label'      => __( 'Upload Home Image', 'cahnrs_events_theme' ),
               'section'    => 'cahnrs_events_home',
               'settings'   => 'spine_options[cahnrs_events_home_image]',
               'context'    => 'your_setting_context' 
           )
       )
   );
   
   $wp_customize->add_setting('spine_options[cahnrs_events_home_bg_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_home_bg_color', array(
		'settings'   => 'spine_options[cahnrs_events_home_bg_color]',
		'label'      => __('Home Background Color', 'spine'),
		'section'    => 'cahnrs_events_home',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	
	  $wp_customize->add_setting('spine_options[cahnrs_events_home_title_bg_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_home_title_bg_color', array(
		'settings'   => 'spine_options[cahnrs_events_home_title_bg_color]',
		'label'      => __('Home Title Background Color', 'spine'),
		'section'    => 'cahnrs_events_home',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	
	
  $wp_customize->add_setting('spine_options[cahnrs_events_home_title_bg_opacity]', array(
		'default'    => 'opacity-0',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_home_title_bg_opacity', array(
		'settings'   => 'spine_options[cahnrs_events_home_title_bg_opacity]',
		'label'      => __('Home Title Background Opacity', 'spine'),
		'section'    => 'cahnrs_events_home',
		'type'       => 'select',
		'choices'    => array(
			'opacity-0'   => '0%',
			'opacity-50'  => '50%',
			'opacity-100' => '100%',

		),
	));
		
  $wp_customize->add_setting('spine_options[cahnrs_events_home_font_color]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_home_font_color', array(
		'settings'   => 'spine_options[cahnrs_events_home_font_color]',
		'label'      => __('Home Font Color', 'spine'),
		'section'    => 'cahnrs_events_home',
		'type'       => 'select',
		'choices'    => array(
			'#5e6a71' => 'Gray',
			'#8f7e35' => 'Green',
			'#b67233' => 'Orange',
			'#4f868e' => 'Blue',
			'#c69214' => 'Yellow',
		),
	));
	   
	 $wp_customize->add_setting('spine_options[cahnrs_events_footer_wordmark]', array(
		'default'    => '',
		'capability' => 'edit_theme_options',
		'type'       => 'option'
	));
	
	$wp_customize->add_control('cahnrs_events_footer_wordmark', array(
		'settings'   => 'spine_options[cahnrs_events_footer_wordmark]',
		'label'      => __('Footer Workmark', 'spine'),
		'section'    => 'cahnrs_events_home',
		'type'       => 'select',
		'choices'    => array(
			'default'   => 'Default',
			'horizontal'  => 'Horizontal',
		),
	));	   


	
} //end cahnrs_events_customize_register