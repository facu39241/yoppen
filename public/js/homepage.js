$( document ).ready(function() {
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: false,
        loop: true,
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
    
    });
    
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });

    var date = 1;

    $.ajax({
        url: 'ajaxProduct',
        type: 'POST',
        data: {
            date: date
        },
        dataType: 'JSON',
        type: "POST",
        success: function (data) {
            console.log(data);
        }
    });
});
