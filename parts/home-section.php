<section class="home-section">
 
 <div class="events-frontpage-content">
 	<div id="events-title">		
  	 <h1><?php bloginfo('title');?></h1>
     
   
    
   
	<?php 
	
	echo " <h3> Event Date</h3><p />";
	echo ' <h3>Event Location <a href="#">[Map link]</a></h3><p /> ';			
	echo '<div class="rsvp"><a href="#">RSVP</a></div>';
	echo "</div>";
				
	 if (is_front_page() ) {
		 echo '<div id="slider">';
		 echo '<ul>';
		 $args = array(
			'post_type' => 'page',
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC'
			);
		 $my_query = new WP_Query( $args ); 
		//var_dump($my_query->posts[0]);
		
		$count = $my_query->post_count;
		
		$sc = 0;
		
	//	var_dump($count);
		
		  if ( $my_query->have_posts() ) { 
			 while ( $my_query->have_posts() ) {
				$my_query->the_post(); 
					//
	/*$my_query->post->post_title	*/			
					if ( $sc == 0 ) {
//s						echo '<li class="slide active-slide">';
						echo '<li class="slide active-slide" id="' . strtolower($my_query->post->post_title) . '" style="display: block;" data-id="' . $my_query->post->ID . '">';
						}
//					else if ($my_query->post->post_title == 'About'   ) 
//					else if (($my_query->current_post + 1) < ($my_query->post_count) )
//					{
//							echo '<li class="slide preslide">';
//					echo '<li class="slide preslide" id="' . strtolower($my_query->post->post_title) .   '">';
//					}
					else {
						echo '<li class="slide" id="' . strtolower($my_query->post->post_title) .   '" style="display: none;" data-id="' . $my_query->post->ID . '">';	
						}	
			
		//			echo '<li class="slide preslide">';	
					
					echo '<div class="slide-container-2">';
					echo '<div class="slide-text-area-2">';
      				echo '<h2>';
					the_title();
					echo '</h2><p>';
					the_content();
					echo '</p>';
					echo '</div>';
					echo '</div>';
					echo '</li>';
					
					$sc++;
					
					//
				} // end while
        	  } //end if have_posts
		 wp_reset_query(); //resetting the page query	 
	
		
	 } // end if is_front_page
	 
	
	 ?>
     	</ul><div class="slide-container">
     
     		<div class="slide-arrows"><div class="prev"><a href="#"></a></div><div class="next"><a href="#"></a></div></div>
     
   		</div></div></section>
