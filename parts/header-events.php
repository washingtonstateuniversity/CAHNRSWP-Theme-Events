<header>

	 <div class="top-bar<?php echo ( spine_get_option( 'cahnrs_events_header_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_header_bg_color' ) ) : ' gray'; ?> events-bleed">
     	
        <div id="org-title"><a href="#">college of agricultural, human, and natural resources</a></div><div id="top-links">
        <a href="#">request info</a>|<a href="#">apply</a>|<a href="#">give</a></div>
    
    </div>
    <div class="header-logo events-bleed">
    	<a href="#">
        	<img src="<?php echo get_stylesheet_directory_uri();?>/images/events-logo.jpg" /></a>
    </div>
    <div class="mobile-title-bar <?php echo ( spine_get_option( 'cahnrs_events_header_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_header_bg_color' ) ) : ' gray'; ?>"></div>
    <nav class="events-nav <?php echo ( spine_get_option( 'cahnrs_events_header_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_header_bg_color' ) ) : ' gray'; ?> events-bleed"> 
    <?php
    wp_nav_menu( array( 'theme_location' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order' ) ); 
//		echo wp_nav_menu( array( 'menu' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order', 'echo' => false, 'after' => ' | ' ) );
		
	
	?>	
    
    
    </nav>
    
</header>