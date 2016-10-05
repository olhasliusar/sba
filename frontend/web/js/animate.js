;(function($){
    $(document).ready(function () {
        if( ($( window ).width()) >= 1100){

            $(document).scroll(function() {

                var height = $(window).height();

                var indexHeader = $('.bg_move_wrapper').height();

                /*1 section: title*/
                if ( $(this).scrollTop() > indexHeader / 4) {
                    $('.animate_index-1').css('visibility', 'visible');
                    $('.animate_index-1').addClass('animated fadeInUpBig');
                }

                /*2 section: icons*/
                if ( $(this).scrollTop() > indexHeader - 100) {
                    $('.animate_index-2').css('visibility', 'visible');
                    $('.animate_index-2').addClass('animated zoomIn');
                }

                if ( ($(this).scrollTop() + height) >= $('.animate_index-3').offset().top) {
                    $(".animate_index-3").addClass('animated fadeInRight');
                }

                if ( ($(this).scrollTop() + height - 100) >= $('.animate_index-4').offset().top) {
                    $('.animate_index-4').css('visibility', 'visible');
                    $('.animate_index-5').css('visibility', 'visible');
                    $(".animate_index-4").addClass('animated fadeInDownBig');
                    $(".animate_index-5").addClass('animated fadeInUpBig');
                }

                if ( ($(this).scrollTop() + height - 100) >= $('.animate_index-6').offset().top) {
                    $('.animate_index-6').css('visibility', 'visible');
                    $('.animate_index-7').css('visibility', 'visible');
                    $(".animate_index-6").addClass('animated fadeInLeftBig');
                    $(".animate_index-7").addClass('animated fadeInRightBig');
                }

            });
        }
    });
})(jQuery);
