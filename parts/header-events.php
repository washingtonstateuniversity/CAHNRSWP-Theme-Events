<header>
<style>
:root {
/*	--main-bg-color: #5e6a71; */
	--main-bg-color:  <?php echo ( spine_get_option( 'cahnrs_events_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_bg_color' ) ) : '#5e6a71;'; ?>; 
	--secondary-color: <?php echo ( spine_get_option( 'cahnrs_events_secondary_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_secondary_color' ) ) : '#000;'; ?>; 
	--tertiary-color: <?php echo ( spine_get_option( 'cahnrs_events_tertiary_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_tertiary_color' ) ) : '#5e6a71;'; ?>; 
	--active-link-color: <?php echo ( spine_get_option( 'cahnrs_events_active_link_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_active_link_color' ) ) : '#fff;'; ?>; 
	--banner-text-color: <?php echo ( spine_get_option( 'cahnrs_events_banner_text_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_banner_text_color' ) ) : '#5e6a71;'; ?>; 
}
</style>
	 <div class="top-bar events-bleed">
	 <?php // echo ( spine_get_option( 'cahnrs_events_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_bg_color' ) ) : ' gray'; ?>
     
        <div id="org-title"><a href="#">college of agricultural, human, and natural resources</a></div><div id="top-links">
        <a href="#">request info</a>|<a href="#">apply</a>|<a href="#">give</a></div>
    
    </div>
    <div class="header-logo events-bleed">
    	<a href="#">
         <?php 
	   	  if ( spine_get_option( 'cahnrs_events_banner_text' ) !== "" ) {
	   			 echo "<h2>" . spine_get_option( 'cahnrs_events_banner_text' ) ."<h2>";
	   		}
			elseif ( spine_get_option( 'cahnrs_events_banner_image' ) !== "" ) { 
        
            echo '<img src="'. spine_get_option( 'cahnrs_events_banner_image')  .'"/>';
			
		 } else {
        	
			 echo '<img src="'. get_stylesheet_directory_uri() .'/images/events-logo.jpg"/>';
		 }
		  ?>
        
        </a>
	        
            
    </div>
    <div class="mobile-title-bar <?php echo ( spine_get_option( 'cahnrs_events_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_bg_color' ) ) : ' gray'; ?>"></div>
    <nav class="events-nav <?php echo ( spine_get_option( 'cahnrs_events_bg_color' ) ) ? ' ' . esc_attr( spine_get_option( 'cahnrs_events_bg_color' ) ) : ' gray'; ?> events-bleed"> 
    <?php
    wp_nav_menu( array( 'theme_location' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order' ) ); 
//		echo wp_nav_menu( array( 'menu' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order', 'echo' => false, 'after' => ' | ' ) );
		
	
	?>	
    
    
    </nav>
    
</header>