var swiper = new Swiper('.at-slider', 
  {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoHeight: true,
    pagination: {
      el: '.at-slider__pagination',
      clickable: true,
    }
  });