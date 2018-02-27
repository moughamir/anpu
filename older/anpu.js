/*global jQuery*/
'use strict';
var anpu;

(function ($){
    
    /**
     * Make sure the page is fully loaded then show the content.
     */ 
    $(window).on('load', function(){
        $('.status').fadeOut(); // fade the loading animation
        $('.preloader').delay(450).fadeOut('slow'); // will fade out the animation container
    });
    
    // Add .right to every 2nd element
    $('.feature:nth-child(2n)').addClass('right');
})(jQuery);