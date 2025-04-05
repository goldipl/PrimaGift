
const similar_products_swiper = new Swiper('.similar_products_swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 5,
  slidesPerGroup: 1,
  spaceBetween: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-similar-products-button-next',
    prevEl: '.swiper-similar-products-button-prev',
  },
  breakpoints: {
    // when window width is >= 1240px
     1240: {
      slidesPerView: 5,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 2,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 1,
    },
  },

});