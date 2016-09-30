
jQuery('.menu > ul > li > a').on('click', function (event) {
		event.preventDefault();
		
		var clicked_nav = jQuery(this).parent();
		
		var active_nav = jQuery('.current_page_item');
		
		var active_slide = jQuery('.slide.active').first();

		var next_slide = return_next_slide ( clicked_nav );
		
		var direction = (clicked_nav.index() < active_nav.index()) ? -1 : 1;

		update_nav ( active_nav, clicked_nav );
		
		do_slide ( active_slide, next_slide, direction );
				
//		do_update_slug( next_slide );
		
		

//		alert(direction);	
//		console.log(next_slide);

		
		
});

function do_update_slug( next_slide ){
	
	var slug = next_slide.attr("id");
	var hrefArray = window.location.href.split( '#' );
    window.location.href = hrefArray[0] + '#' + slug;
	
	};
	
function windowoffset (winwidth, hswidth) {
								
	return (winwidth - hswidth);
					
} //end  windowoffset 


function do_slide( active_slide, next_slide, direction ){

	active_slide.removeAttr( 'style' );
	active_slide.removeClass('active');
	
	next_slide.addClass('active'); 

	var winwidth = jQuery( window ).width();			
	var hswidth = jQuery('.home-section').width();
	
	var ws = windowoffset(winwidth, hswidth );		
	
	var start_offset = -(0.5 * ws);
	var start_position = '';
	
	var start_position_num = start_offset + hswidth;
		
		start_position = start_position_num + "px"
	 
	// alert(start_position);

//	alert(direction);
//    jQuery( window ).scrollTop( '0' );
	
	
	if (direction === 1) {
		start_position = "-" + start_position;
//		next_slide.css({"left":"-100%"});
		
		next_slide.css({"left":start_position});
		next_slide.animate({"left":"0"}, 4000, function() {
				do_update_slug( next_slide );
				jQuery( document.body).scrollTop( 0 );
			});		
		}
	else
	{

//		next_slide.css({"left":"100%"});
		next_slide.css({"left":start_position});
		next_slide.animate({"left":"0"}, 4000, function() {
				do_update_slug( next_slide );
				jQuery( document.body).scrollTop( 0 );
			});		
		
		}
		
	
	
	}; //end do_slide

function update_nav ( active_nav, clicked_nav ) {
	
	active_nav.removeClass('current_page_item');
	clicked_nav.addClass('current_page_item');
	
	
	};

function return_next_slide ( clicked  ) {
	
		var selectedClass = clicked.attr("class");
		var selectedNum = selectedClass.substr(selectedClass.lastIndexOf("-")+1);
		
		var n_slide = jQuery('div[data-id="' + selectedNum + '"]');
		
		return n_slide;
	
	};



/*				
		var selectedClass = jQuery(this).parent().attr("class");
		var selectedNum = selectedClass.substr(selectedClass.lastIndexOf("-")+1);
			
				 
			// Create slide wrapper - class="slide-wrapper" - Done 9/27/2016 - 3:03pm
			// set var to slide wrapper 
				
			// var slidewrapper = jQuery('.slide-wrapper'); Doesn't work - look later
				
			// use find to get individual slides or remove classes		
			//	slidewrapper.jQuery('.active').removeClass('active');	Doesn't work - Look later
				 
			//var slides = jQuery('.slide');
			//slides.removeClass('active');
				
			// jQuery('div').find("[data-id='" + $selectedNum + "']") 
		
				var currentindex = jQuery('.slide.active').parent().index();
			//	alert(currentindex);

				var nextindex = jQuery(this).parent().index();
			
				
				var nextslide = jQuery("article").get([nextindex]);
				
				

				
				
				jQuery('.slide.active').removeClass('active'); 								
				
				var slide = jQuery("div").find("[data-id='" + selectedNum + "']");
				

				
				slide.addClass('active');  
				
				var slug = slide.attr("id");	
				
			//	resource: https://css-tricks.com/snippets/javascript/get-url-and-url-parts-in-javascript/
				var hrefArray = window.location.href.split( '#' );
			    window.location.href = hrefArray[0] + '#' + slug;
								
   				jQuery('.current_page_item').removeClass('current_page_item');		
			    jQuery(this).parent().addClass('current_page_item'); 								


			var direction =	function ( currentindex, newindex ) {
					
				if ( currenttindex < newindex ) {
					 	direction = 1;				 
					 } 
					 else {
						 direction = -1;				 
						 }

					return direction;	 

					}
						
			 
					
				var windowoffset = function () {
					
					var winwidth = jQuery( window ).width();
					
					var hswidth = jQuery('.home-section').width();
			
					windowoffset = winwidth - hswidth;
			
					return windowoffset;
					
					}
					
			 var changeslide = function (currentslide , windowoffset , direction ) {
				 
				 		if (direction === 1) {
							
							
							
							
							}
						else {
							
							
							}	
			 	
					return; 

			 } //end changeslide
				
			 changeslide(slide, nextslide, direction);
			 
		});
 	
*/
/*
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
*/
// var slideshow1 = new slide_show(jQuery ('#slider'));
