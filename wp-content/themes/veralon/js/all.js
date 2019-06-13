/************Scroll Effect*************/
    $(window).scroll(function() {
        if ($(window).scrollTop() > 5) {

            $('.header').addClass('scroll-effect');

        } else {
            $('.header').removeClass('scroll-effect');

        }
    });
