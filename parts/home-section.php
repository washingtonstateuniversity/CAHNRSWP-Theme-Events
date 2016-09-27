<section class="home-section">
 
 <div class="events-frontpage-content">
	<div class="slide-wrapper">
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
	
			
//					if (is_front_page() ) {
					if ($sc == 0) {
		 	
							include_once( get_stylesheet_directory() .  '/inc/slide-home.php' );
		 
		 			 } // end if is_front_page - sc == 0
					 
					 else {
			       			include( get_stylesheet_directory() .  '/inc/slide.php' ); 
					}
					//
					
					$sc++;
					
					//
				} // end while
        	  } //end if have_posts
		 wp_reset_query(); //resetting the page query	 

		

	 
	
	 ?>
     	</div> 
     </section>
