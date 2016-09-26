<?php 
		echo '<article>';
		//echo '<div class="slide" id="' . strtolower($my_query->post->post_title) .   '" style="display: none;" data-id="' . $my_query->post->ID . '">';					
		echo '<div class="slide" id="' . strtolower($my_query->post->post_title) .   '" data-id="' . $my_query->post->ID . '">';					
		echo '<h2>';
		the_title();
		echo '</h2><p>';
		the_content();
		echo '</p>';
		echo '</div>';
		echo '</article>';
