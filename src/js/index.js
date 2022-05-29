$(document).ready(function(){
    $('.choose-writer-slider > ul').slick({
        slidesToShow: 3,
        infinite: false,
        slidesToScroll: 1,
        dots: true,
        button: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  centerMode: true
                }
            },
        ]
    })
})