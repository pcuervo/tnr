(function($){
    "use strict";

    $(function(){
        $('#not-pirate-form').submit( function(e){
            e.preventDefault();
            sendEmail( $(this).serialize() );
        });
    });
})(jQuery);

/**
 * Mandar email forma de contacto
 */
function sendEmail( data ){

    console.log( data );

    // $.post(
    //     ajax_url,
    //     data,
    //     function( response ){
    //         //console.log( response );
    //         $('.js-para-reuniones').addClass('hidden');
    //         $('.js-para-reuniones-response').removeClass('hidden');
    //     }
    // );

}// sendEmail