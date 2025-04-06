const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  
});

const our_brands_swiper = new Swiper('.our_brands_swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 5,
  slidesPerGroup: 1,
  spaceBetween: 80,

  // Navigation arrows
  navigation: {
    nextEl: '.brands-swiper-button-next',
    prevEl: '.brands-swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 1240px
     1240: {
      slidesPerView: 5,
      spaceBetween: 80,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 4,
      spaceBetween: 60,
    },
    // when window width is >= 760px
    760: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    // when window width is >= 200px
    200: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },

});

const our_products_swiper = new Swiper('.our_products_swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: 5,
  slidesPerGroup: 1,
  spaceBetween: 0,

  // Navigation arrows
  navigation: {
    nextEl: '.products-swiper-button-next',
    prevEl: '.products-swiper-button-prev',
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