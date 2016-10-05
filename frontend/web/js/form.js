;(function($){
    $(document).ready(function () {

        $(document).on('focus click', '.input__field', function () {
            $(this).parent().addClass('input--filled');
            $(this).parent().find('.input__label--nao').css('background', 'transparent');
        });

        $(document).on('blur', '.input__field', function () {
            if($(this).val() == ''){
                $(this).parent().removeClass('input--filled');
                $(this).parent().find('.input__label--nao').css('background', '#fff');
            }
        });

    });
})(jQuery);