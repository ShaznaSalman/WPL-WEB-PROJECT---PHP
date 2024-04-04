$(document).ready(function() {
    const productSlider = $('.product-slider').slick({
       infinite: true,
       slidesToShow: 6,
       slidesToScroll: 2,
       autoplay: true, // Enable automatic scrolling by default
       autoplaySpeed: 3000, // Auto-scroll every 3 seconds
       responsive: [{
             breakpoint: 768,
             settings: {
                slidesToShow: 2
             }
          },
          {
             breakpoint: 480,
             settings: {
                slidesToShow: 1
             }
          }
       ]
    });

    $('.prev-button').click(function() {
       productSlider.slick('slickPrev');
    });

    $('.next-button').click(function() {
       productSlider.slick('slickNext');
    });
 });