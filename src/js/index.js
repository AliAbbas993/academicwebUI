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

function decrementNoOfPage() {
  event.preventDefault();
  let number = document.querySelector("#noOfPages").value;
  noOfPages = parseInt(number);
  if (noOfPages > 1) {
    noOfPages = noOfPages - 1;
    document.querySelector("#noOfPages").value = noOfPages.toString()
  }
}
function incrementNoOfPage() {
  event.preventDefault();
  let number = document.querySelector("#noOfPages").value;
  noOfPages = parseInt(number);
  noOfPages = noOfPages + 1;
  document.querySelector("#noOfPages").value = noOfPages.toString()
}

const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

const info = document.querySelector(".alert-info");
const error = document.querySelector(".alert-error");

function process(event) {
  event.preventDefault();

  const phoneNumber = phoneInput.getNumber();

  info.style.display = "none";
  error.style.display = "none";

 if (phoneInput.isValidNumber()) {
   info.style.display = "";
   info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
 } else {
   error.style.display = "";
   error.innerHTML = `Invalid phone number.`;
 }
} 