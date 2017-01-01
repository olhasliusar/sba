;(function($){
    $(document).ready(function () {

        var select = $('#artist-genres');
        var limit = 4;

        var last_valid_selection = null;

        select.change(function(event) {            
            if ($(this).val().length > limit) {

                $(this).val(last_valid_selection);
            } else {
                last_valid_selection = $(this).val();
            }
        });

    });
})(jQuery);