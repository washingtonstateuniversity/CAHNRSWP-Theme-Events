// JavaScript Document
  jQuery(document).ready(function( $ ) {
                jQuery('ul.enav a').bind('click',function(event){
                    var $anchor = jQuery(this);
                    /*
                    if you want to use one of the easing effects:
                    jQuery('html, body').stop().animate({
                        scrollLeft: jQuery($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    jQuery('html, body').stop().animate({
                        scrollLeft: jQuery($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });