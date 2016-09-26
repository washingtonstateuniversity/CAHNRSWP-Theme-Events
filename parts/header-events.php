<header>	
	 <div class="top-bar">
     	<div id="org-title"><a href="#">college of agricultural, human, and natural resources</a></div><div id="top-links">
        <a href="#">request info</a>|<a href="#">apply</a>|<a href="#">give</a></div>
    
    </div>
    <div class="header-logo">
    	<a href="#">
        	<img src="<?php echo get_stylesheet_directory_uri();?>/images/events-logo.jpg" /></a>
    </div>
    <nav class="events-nav events-bleed"> 
    <?php
    wp_nav_menu( array( 'theme_location' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order' ) ); 
//		echo wp_nav_menu( array( 'menu' => 'conference-menu', 'container_class' => 'events-nav', 'sort_column' => 'menu_order', 'echo' => false, 'after' => ' | ' ) );
		
	
	?>	
<!--//
   <ul>
        	<li><a class="goslide" id="home" href="#">HOME</a></li><li>
            <a class="goslide" id="about" href="#">ABOUT</a></li><li>
            <a class="goslide" id="schedule" href="#">SCHEDULE</a></li><li>
            <a class="goslide" id="speakers"href="#">SPEAKERS</a></li><li>
            <a class="goslide" id="contact" href="#">CONTACT</a></li>
        </ul>
//-->    
<!--//    
     <ul>
        <li><a class="active" href="#">HOME</a></li><li>
        <a href="#about">About</a></li><li>
        <a href="#speakers">Speakers</a></li><li>
        <a href="#schedule">Schedule</a></li><li>
        <a href="#schedule">Contact</a></li>
       </ul>
    //-->   
    
    
    </nav>
    
</header>