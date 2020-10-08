$('.field__input').on('blur', function () {
    if ($(this).val().length) {
        $(this).closest('.field').addClass('field--active');
    } else {
        $(this).closest('.field').removeClass('field--active');
    }
})