// $('.owl-carousel').owlCarousel({
//     loop: true,
//     margin: 10,
//     nav: true,
//     navText: [
//       "<i class='fa fa-caret-left'></i>",
//       "<i class='fa fa-caret-right'></i>"
//     ],
//     autoplay: true,
//     autoplayHoverPause: true,
//     responsive: {
//       0: {
//         items: 1
//       },
//       600: {
//         items: 3
//       },
//       1000: {
//         items: 5
//       }
//     }
//   })

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      responsive:{
        0:{
          items: 1,
          nav: true
        },
        600:{
          items: 2,
          nav: false
        },
        1000:{
          items: 3,
          nav: true,
          loop: false
        }
      }
    });
  });
  