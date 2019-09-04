$(document).ready(function(){
    


    $('.subir').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function(){
        if($(this).scrollTop() > 200 ){
            $('.subir').fadeIn(500);
        }else{
            $('.subir').fadeOut(500);
        }
    });
});