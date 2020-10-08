$(document).ready(function () {

    const checkAcceptCookie = localStorage.getItem('cook');

    if (!checkAcceptCookie) {
        $('.cookie').fadeIn();
    }

    $('.cookie__btn').on('click', () => {
        $('.cookie').fadeOut();
        setSubscriber()
    })

    function setSubscriber() {
        localStorage.setItem('cook', true);
    }


})