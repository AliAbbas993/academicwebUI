$(document).ready(function(){
    $('.products-slider > ul').slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        dots: false,
        button: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
                breakpoint: 767,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                }
            },
        ]
    })
})

$(document).ready(function(){
  $('.clients-testo-slider > ul').slick({
      slidesToShow: 1,
      infinite: true,
      slidesToScroll: 1,
      dots: true,
      button: false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
          },
      ]
  })
})