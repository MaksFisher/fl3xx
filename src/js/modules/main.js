$(document).ready(function () {

    // header nav 
    $('.nav-btn').on('click', function () {
        $('.nav-btn').toggleClass('nav-btn--opened');
        $('.header-navs').toggleClass('header-navs--opened');
    });

    // Faq 
    $('.faq').on('click', '.faq__question', function () {
        // if (!$(this).closest('.faq').hasClass('faq--opened')) {
        //     $('.faq--opened .faq__answear').slideUp();
        //     $('.faq--opened').removeClass('faq--opened');
        // }

        $(this).next('.faq__answear').slideToggle();
        $(this).closest('.faq').toggleClass('faq--opened');
    })
})