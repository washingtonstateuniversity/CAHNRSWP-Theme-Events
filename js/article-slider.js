
jQuery('.menu > ul > li > a').on('click', function (event) {
		event.preventDefault();
				
		var selectedClass = jQuery(this).parent().attr("class");
		var selectedNum = selectedClass.substr(selectedClass.lastIndexOf("-")+1);
			
				 
			// Create slide wrapper - class="slide-wrapper" - Done 9/27/2016 - 3:03pm
			// set var to slide wrapper 
				
			// var slidewrapper = jQuery('.slide-wrapper'); Doesn't work - look later
				
			// use find to get individual slides or remove classes		
			//	slidewrapper.jQuery('.active').removeClass('active');	Doesn't work - Look later
				 
			//var slides = jQuery('.slide');
			//slides.removeClass('active');
				
/*			 jQuery('div').find("[data-id='" + $selectedNum + "']") */
		
				var currentindex = jQuery('.slide.active').parent().index();
			//	alert(currentindex);

				var nextindex = jQuery(this).parent().index();
			//	alert(nextindex);
			

				
				
				jQuery('.slide.active').removeClass('active'); 								
				
				var slide = jQuery("div").find("[data-id='" + selectedNum + "']");
				
				slide.addClass('active');  
				
				var slug = slide.attr("id");	
				
/*				resource: https://css-tricks.com/snippets/javascript/get-url-and-url-parts-in-javascript/		*/				
				var hrefArray = window.location.href.split( '#' );
			    window.location.href = hrefArray[0] + '#' + slug;
								
   				jQuery('.current_page_item').removeClass('current_page_item');		
			    jQuery(this).parent().addClass('current_page_item'); 								

			
				 
		});
 	


var slide_show = function(container) {	  
   	  
   var cont = container;
   
   this.sh = cont.find('.active');
   
   var self = this.sh;
  
    self.do_slide = function() {
			
		 
	 }
   

    this.init =  function() {
  
		
 	      self.do_slide();

		
		}	
    
  
   this.init();
   
} //slide_show

var slideshow1 = new slide_show(jQuery ('#slider'));
