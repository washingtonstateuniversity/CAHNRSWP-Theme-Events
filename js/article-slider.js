var slide_show = function(container) {	  
   	  
   var cont = container;
   
   this.sh = cont.find('.active-slide');
   
   
   var self = this.sh;
  
  
  
    self.do_slide = function() {
			
         jQuery('.prev').on('click', function() {	

 		  var casfr = jQuery(".active-slide:first");
    	  var psfr = jQuery(".preslide:first");

			 jQuery('.preslide').css({"left":"100%"});

            jQuery('.active-slide').animate({"left":"-100%"}, 4000, function() {
                    casfr.removeClass('active-slide').addClass('preslide').css('left','100%');
				}); 
			
     	    jQuery('.preslide').animate({"left":"0"}, 4000, function() {
                  psfr.removeClass('preslide').addClass('active-slide').css('left','0');
				});

	});
		
		jQuery('.goslide').on('click', function (event) {
				 $target = jQuery(event.target);  
				 /*	$target.addClass('active-slide'); */	
				
			//	alert($target.attr("id"));
			jQuery('.active-slide').removeClass('active-slide').removeAttr( 'style');
					
			jQuery('#' + $target.attr("id")).css('left','-100%').addClass('active-slide').animate({"left":"0"}, 4000).show(); 
			
			//jQuery('.active-slide').animate({"left":"100%"}, 4000);
				
				 });
		
		jQuery('.next').on('click', function() {	
		  
		  var casf = jQuery(".active-slide:first");
		 
		  var psf = jQuery(".preslide:first"); 
		  
		    jQuery('.preslide').css({"left":"-100%"});
		

			jQuery('.active-slide').animate({"left":"100%"}, 4000, function() {
                    casf.removeClass('active-slide').addClass('preslide').css('left','-100%');
				});

     	    jQuery('.preslide').animate({"left":"0"}, 4000, function() {
                  psf.removeClass('preslide').addClass('active-slide').css('left','0');
				});
				
				
		});
	
		 
	 }
   
    this.init =  function() {
	    
		
 	      self.do_slide();

		
		}	
    
  
   this.init();
}

var slideshow1 = new slide_show(jQuery ('#slider'));
