//You don't really need jQuery for that. But anyway
jQuery(document).ready(function($) {
    $('#simply-burger').click(function () {
        //On click, toggle on 'this' (#simply-burger) the class open
        $(this).addClass('open');
        // $(this).toggleClass('open').delay.queue(function(next){
        //     $(this).removeClass('open');
        //     $(this).addClass('tt');
        //     next();
        // });

        
        // $(this).addClass('tt');

        
    });
});