<?php 
		echo '<article>';
		//echo '<div class="slide" id="' . strtolower($my_query->post->post_title) .   '" style="display: none;" data-id="' . $my_query->post->ID . '">';					
		echo '<div class="slide" id="' . $my_query->post->post_name .   '" data-id="' . $my_query->post->ID . '" style="display: none;">';					
		echo '<h2>';
		the_title();
		echo '</h2><p>';
		the_content();
		echo '</p>';
		echo '</div>';
		echo '</article>';
		
