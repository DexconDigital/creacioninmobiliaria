const mediumBp = matchMedia('(min-width: 992px)');
const changesize = mql => {
    if (mql.matches) {
        $(window).scroll(function () {
            if ($("#menu").offset().top > 300) {
                $(".logo").addClass('scroll');
                $(".alto-opciones").addClass('scroll');
            } else {
                $(".logo").removeClass('scroll');
                $(".alto-opciones").removeClass('scroll');
            }
        });
    }else{

    }
}
mediumBp.addListener(changesize);
changesize(mediumBp);