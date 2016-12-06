jQuery(document).ready(function($){

   //controlling product gallery slider controls
    $('.owl-stage').find(function() {
       var x = $('.owl-item', this).length;
       //alert(x);
       if( x == 3 ){
        $( ".owl-controls" ).hide();
       }
    });

});