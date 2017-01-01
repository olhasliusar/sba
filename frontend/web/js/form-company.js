;(function($){
    $(document).ready(function () {

        var sectionCompanyOne = $('.company-form-create_one');
        var sectionCompanyTwo = $('.company-form-create_two');
        var formCompanyOne = sectionCompanyOne.html();
        var formCompanyTwo = sectionCompanyTwo.html();
        var inputHidden = $('.company-form-create__input-hidden');
        var buttonUpload = $('.field-company-licenses').closest('.row');

        $(document).on('change', '.checkbox-company', function () {
            if($(this).prop('checked')){
                sectionCompanyOne.html('');
                sectionCompanyTwo.html('');
                inputHidden.css('display','none');
                buttonUpload.css('visibility','hidden');
                console.log(buttonUpload);
            } else {
                sectionCompanyOne.html(formCompanyOne);
                sectionCompanyTwo.html(formCompanyTwo);
                inputHidden.css('display','block');
                buttonUpload.css('visibility','visible');
                console.log(buttonUpload);
            }
        });

    });
})(jQuery);