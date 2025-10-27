var navToggler = document.querySelector(".navbar-toggler"),
  navTogglerIcon = document.querySelector(".navbar-toggler-icon");

navToggler.addEventListener("click", () => {
  navTogglerIcon.classList.toggle("close-icon");
})

//swipper js
const swiper = new Swiper('.slider-wrapper', {
  loop: true,
  spaceBetween: 5,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    620: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 4
    },
  }

});

// Mouse hover এ autoplay pause
const swiperEl = document.querySelector('.swiper');

swiperEl.addEventListener('mouseenter', () => {
  swiper.autoplay.stop();  // autoplay stop on hover
});

// Mouse leave এ autoplay resume
swiperEl.addEventListener('mouseleave', () => {
  swiper.autoplay.start(); // autoplay start on mouse out
});

//swipper js




