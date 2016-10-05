;(function($) {

    var transparentClass = "nav-transparent";
    var logoSrcDark = window.location.origin + '/frontend/web/img/logo_d.png';
    var logoSrcLight = window.location.origin + '/frontend/web/img/logo_l.png';

    $(document).scroll(function() {
        var menu = $('.nav-main-page');
        var logo = $('.navbar-brand .logo');

        // var pos = $('.position-menu').height() - 50;//для прозрачного меню на главной
        var pos = $('.position-menu').offset().top - 60;
        
        if($(this).scrollTop() > 50 && $(this).scrollTop() < pos) {
            menu.addClass('fade')
        }
        if($(this).scrollTop() > pos) {
            if (menu.hasClass(transparentClass)) {
                menu.removeClass(transparentClass);
                menu.removeClass('fade');
                logo.attr('src', logoSrcDark);
            }
        } else {
            if($(this).scrollTop() < 50){
                menu.removeClass('fade');
            }
            if (!menu.hasClass(transparentClass)) {
                menu.addClass(transparentClass);
                logo.attr('src', logoSrcLight);
            }
        }
    });

})(jQuery);
