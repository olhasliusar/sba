;(function($){
    $(document).ready(function () {
        
        /*MAIN IMAGE*/        
        var imageActiveInput = $('.image-show__input');
        var imageActiveId = $('.image-show_1').data('image-id');
        imageActiveInput.val(imageActiveId);

        $(document).on('click', '.image-show', function () {
            if(!$(this).hasClass('image-show_1')){
                $('.image-update__btn_show').removeClass('image-show_1');
                $(this).removeClass('image-show_0').addClass('image-show_1');

                imageActiveInput.val($(this).data('image-id'));
            }
        });
        /*END MAIN IMAGE*/
        
        /*REMOVE IMAGE*/
        var imageRemoveInput = $('.image-remove__input');
        $(document).on('click', '.image-delete', function () {
            var images = imageRemoveInput.val();
            if(images != ''){
                images += ',';
            }
            images += $(this).data('image-id');
            imageRemoveInput.val(images);
            console.log(imageRemoveInput.val());
            $(this).parent().css('display', 'none');
        });
        /*END REMOVE IMAGE*/

        /*GENRES*/
        var genres = [];

        var checkboxes = $(".genres__box :checkbox:checked").map(function() {
            return this.value;
        }).get();

        $.merge( genres, checkboxes);

        $(document).on('change', '.genres__checkbox', function () {
            checksend($(this).val(), $(this).prop('checked'));
            $('.genresform__input').val(genres);
        });

        function checksend(val, checked) {
            checked ?  pushItem(val) : removeItem(val);
        }

        function pushItem(val) {
            if(genres.indexOf(val) == -1 ){
                genres.push(val);
            }
        }

        function removeItem(val) {
            var i = genres.indexOf(val);
            if(i != -1) {
                genres.splice(i, 1);
            }
        }
        /*END GENRES*/

    });
})(jQuery);