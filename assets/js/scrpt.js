;
jQuery(function( $ ) {
    
 "use strict";
 //  get all image  from the page 

 let image = $('img');

 if(image.length > 0) {

   image.each(function(){
        
       let imgHeight = $(this).height() === 0 ? iahw_get_size.height : $(this).height();
       let imgWidth = $(this).width() === 0 ? iahw_get_size.width : $(this).width();

       if(typeof $(this).attr('width') === 'undefined') {
        $(this).attr('width', Math.round(imgWidth));
       }
       
       if(typeof $(this).attr('height') === 'undefined') {
        $(this).attr('height', Math.round(imgHeight));
       }

   });
 }

});