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

document.addEventListener('DOMContentLoaded', () => {
  const selectCountryDropdown = document.querySelector('#country')
  fetch('https://restcountries.com/v2/all').then(res => {
    return res.json()
  })
  .then(countriesList => {
    let output = ""
    countriesList.forEach(country => {
      output += `<option value="${country.name}">${country.name}</option>`;
    });
    selectCountryDropdown.innerHTML = output
  }).catch(error => {
    console.log(error)
  })
})

function getCountries(e){
  console.log(e)
  // https://countriesnow.space/api/v0.1/countries/cities
}