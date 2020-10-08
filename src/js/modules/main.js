$(document).ready(function () {

    $('.nav-btn').on('click', function () {
        $('.nav-btn').toggleClass('nav-btn--opened');
        $('.header-navs').toggleClass('header-navs--opened');
    });

})