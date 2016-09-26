<section class="home-section">
 
 <div class="events-frontpage-content">
	<?php 
		
		 $args = array(
			'post_type' => 'page',
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC'
			);
		 $my_query = new WP_Query( $args ); 
		$count = $my_query->post_count;
		
		$sc = 0;
			
		  if ( $my_query->have_posts() ) { 
			 while ( $my_query->have_posts() ) {
				$my_query->the_post(); 
				
				//	if (is_front_page() ) {
		 	
						//	include_once( get_stylesheet_directory() .  '/inc/slide-home.php' );
		 
		 		//	 } // end if is_front_page
		
	        		include( get_stylesheet_directory() .  '/inc/slide.php' ); 
					
					//

					if ( $sc == 0 ) {
						//	echo '<div class="slide active-slide" id="' . strtolower($my_query->post->post_title) . '" style="display: block;" data-id="' . $my_query->post->ID . '">';
						}
		
		
					
					$sc++;
					
					//
				} // end while
        	  } //end if have_posts
		 wp_reset_query(); //resetting the page query	 
	
		

	 
	
	 ?>
     </section>
