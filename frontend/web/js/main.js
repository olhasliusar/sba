;(function($){
    $(document).ready(function(){

        // = Вешаем событие прокрутки к нужному месту
        // на все ссылки якорь которых начинается на #
        $('a[href^="#"]').bind('click.smoothscroll',function (e) {
            e.preventDefault();

            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                // window.location.hash = target;
            });
        });



        var exp = $('.form__experience').html();
        $('#add-exp').on('click', function(){
            $('.form__experience').append(exp);
            $('.form__experience .row:last-child').append('<div class="btn-close"></div>').prepend('<hr>');
        })

        $(document).on('click', '.btn-close', function () {
            console.log(3);
            $(this).closest('.row').remove();
        })

    });
})(jQuery);
