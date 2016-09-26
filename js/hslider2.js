// JavaScript Document
var slide_show = function(container) {
	
	this.cont = container;
	
	this.sh = container.find('.slideshow');
	
	var self = this;
	
	this.init = function () {

		self.cont.on('click','.next', function () {
    		self.do_slide_right();
		});
		
		
		self.cont.on('click','.prev', function () {
    		self.do_slide();
		});
			
		}
	
	this.do_slide_right = function() {

		
		var current = self.sh.find('.active');
		
		current.animate({left : '100%'}, 4000, function() {
			current.removeClass('active').addClass('preslide').css('left', '100%');
			});
		
		var pre_slide = self.sh.find('.preslide');
		
		pre_slide.animate({left : '200%'}, 4000, function() {
    		pre_slide.removeClass('preslide').addClass('active').css('left','0');
		 });
		} 
	
	this.do_slide = function () {
		
		var current = self.sh.find('.active');
		
		current.animate({left : '-100%'}, 4000, function() {
			current.removeClass('active').addClass('preslide').css('left', '100%');
			});
		
		var pre_slide = self.sh.find('.preslide');
		
		pre_slide.animate({left : '0'}, 4000, function() {
    		pre_slide.removeClass('preslide').addClass('active');
		 });
		
		} //end do_slide
		
		this.init();
	
	} //end slide_show

var slideshow1 = new slide_show( jQuery('.slideshowwrap') );


