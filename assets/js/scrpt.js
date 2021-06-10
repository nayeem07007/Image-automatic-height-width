;
jQuery(function( $ ) {
    
 "use strict";
 //  get all image  from the page 

 let image = $('img');

 if(image.length > 0) {

   image.each(function(){

       let imgHeight = $(this).height() === 0 ? '370' : $(this).height();
       let imgWidth = $(this).width() === 0 ? '600' : $(this).width();

       if(typeof $(this).attr('width') === 'undefined') {
        $(this).attr('width', Math.round(imgWidth));
       }
       
       if(typeof $(this).attr('height') === 'undefined') {
        $(this).attr('height', Math.round(imgHeight));
       }

   });
 }

});