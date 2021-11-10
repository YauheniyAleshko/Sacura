var swiper = new Swiper(".mySwiper", {
  spaceBetween: 0,
  slidesPerView: 7,
  freeMode: false,
  watchSlidesProgress: true,
});

var swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 0,
  
  thumbs: {
    swiper: swiper,
  },
});


var swiper = new Swiper(".mySwiper3", {
  spaceBetween: 0,
  slidesPerView: 7,
  freeMode: false,
  watchSlidesProgress: true,
});

var swiper2 = new Swiper(".mySwiper4", {
  spaceBetween: 0,
  
  thumbs: {
    swiper: swiper,
  },
});



/*navigation: {
  nextEl: ".swiper-button-next1",
  prevEl: ".swiper-button-prev2",
},*/

/*navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},*/







