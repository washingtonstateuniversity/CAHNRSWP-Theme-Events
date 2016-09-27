<?php 
	
	echo '<article>';
//	 echo '<div class="slide" id="' . $my_query->post->post_name .   '" data-id="' . $my_query->post->ID . '" style="display: block;">';
	echo '<div class="slide active" id="' . $my_query->post->post_name .   '" data-id="' . $my_query->post->ID . '">';
	echo '<div class="events-title">';		
	echo '<h1>';
  		bloginfo('title');
	echo '</h1>';
	echo " <h3> Event Date Here</h3><p />";
	echo ' <h3>Event Location Goes Here <a href="#">[Map link]</a></h3><p /> ';			
	echo '<div class="rsvp"><a href="#">[RSVP]</a></div>';
	echo "</div>"; //end of envent-title
	echo "<p>";
	the_content();
	echo "</p>";
	echo '</div>';
	echo '</article>';

