<footer id="conference-footer">
	<?php // echo strip_tags(wp_nav_menu( array( 'menu' => 'conference-menu', 'echo' => false, 'after' => ' | ' ) ), '<a>' ); 
	
	$defaults = array(
	'menu' => 'conference-menu',
	'echo' => false,
	'after' => ' | ',
	'menu_class' => 'slide active-slide',
	);
	
	//echo strip_tags( wp_nav_menu( $defaults ), '<a>');
	
	$output = strip_tags(wp_nav_menu(  $defaults ),'<a>');
	$output = preg_replace('/<a/', '<a class="goslide"', $output); // Apply class to each anchor tag
	$pattern = '~(<a href="[^"]*">)([^<]*)(</a>)~';
//	$output = preg_replace($pattern, '$3$2$1', $output);
//	$output = preg_replace('/" >/', '#a" >', $output); // Apply class to each anchor tag
	//echo $output;
	
	?>
    
    <p><a class="goslide" id="home" href="#home">HOME</a>&nbsp;|&nbsp;<a class="goslide" id="about" href="#about">ABOUT</a>&nbsp;|&nbsp;<a class="goslide" id="schedule" href="#schedule">SCHEDULE</a>&nbsp;|&nbsp;<a class="goslide" id="speakers"href="#speakers">SPEAKERS</a>&nbsp;|&nbsp;<a class="goslide" id="contact" href="#contact">CONTACT</a>&nbsp;&nbsp;</p>
    <p><a href="http://wsu.edu">Washington State University</a></p>
</footer>