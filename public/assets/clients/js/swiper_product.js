const swiper = new Swiper('.productSwiper', {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
    },
    // Responsive breakpoints
    breakpoints: {
      320: {
        slidesPerView: 1
      },
      384: {
        slidesPerView: 1.5
      },
      576: {
        slidesPerView: 2.5
      },
      768: {
        slidesPerView: 3
      },
      1150: {
        slidesPerView: 4.5
      },
    }
  })
