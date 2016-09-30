<article>
	<div class="slide active events-bleed" id="<?php echo $my_query->post->post_name ?>" data-id="<?php echo $my_query->post->ID ?>">
        <div class="events-title">	
            <h1>  <?php	bloginfo('title'); ?></h1>
            <h3> Event Date Here</h3><p />
            <h3>Event Location Goes Here <a href="#">[Map link]</a></h3><p /> 	
            <div class="rsvp"><a href="#">[RSVP]</a></div>
            <p><?php the_content(); ?></p>
        </div>
   </div>
</article>

