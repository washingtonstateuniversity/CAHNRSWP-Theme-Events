


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
	
	
		jQuery('.menu > ul > li > a').on('click', function (event) {
				event.preventDefault();
				
				 //$target = jQuery(event.target);  
				
				
				var $selectedClass = jQuery(this).parent().attr("class");
				var selectedNum = $selectedClass.substr($selectedClass.lastIndexOf("-")+1);
/*				var pageida = '.page-item-id-' + selectNum + ' > a';	*/
				 
				// Create slide wrapper - class="slide-wrapper" - Done 9/27/2016 - 3:03pm
				// set var to slide wrapper 
				
//			var slidewrapper = jQuery('.slide-wrapper'); Doesn't work - look later
				
				// use find to get individual slides or remove classes
				
			//	slidewrapper.jQuery('.active').removeClass('active');	Doesn't work - Look later
						 
				//var slides = jQuery('.slide');
				
				
/*				 jQuery('div').find("[data-id='" + $selectedNum + "']") */
				
				jQuery('.slide.active').removeClass('active'); 
				
				//slides.removeClass('active');
				
/*				jQuery('#events-title').removeClass('active'); */

				var slide = jQuery("div").find("[data-id='" + selectedNum + "']");
				
				slide.addClass('active');  
	
				var slug = slide.attr("id");	
										
				jQuery('.current_page_item').removeClass('current_page_item');	
							
			    jQuery(this).parent().addClass('current_page_item'); 

/*				resource: https://css-tricks.com/snippets/javascript/get-url-and-url-parts-in-javascript/		*/
				var hrefArray = window.location.href.split( '#' );
			    window.location.href = hrefArray[0] + '#' + slug;
	

/*							var _href = jQuery("pageida").attr("href");
								jQuery("pageida").attr("href",  _href + slug);
*/	
				/* jQuery(this).parent().addClass('current_page_item'); */
			
				 
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
