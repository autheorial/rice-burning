	jQuery(document).ready(function($){
    $('.smoothup').on('click', function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
        });
});