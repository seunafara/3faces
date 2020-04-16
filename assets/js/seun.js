// $(document).ready(function () {
//   for (var i = 1; i <= $('.slider__slide').length; i++) {
//     $('.slider__indicators').append(
//       '<div class="slider__indicator" data-slide="' + i + '"></div>'
//     );
//   }
//   setTimeout(function () {
//     $('.slider__wrap').addClass('slider__wrap--hacked');
//   }, 1000);
// });

// function goToSlide(number) {
//   $('.slider__slide').removeClass('slider__slide--active');
//   $('.slider__slide[data-slide=' + number + ']').addClass(
//     'slider__slide--active'
//   );
// }

// $('.slider__next, .go-to-next').on('click', function () {
//   var currentSlide = Number($('.slider__slide--active').data('slide'));
//   var totalSlides = $('.slider__slide').length;
//   currentSlide++;
//   if (currentSlide > totalSlides) {
//     currentSlide = 1;
//   }
//   goToSlide(currentSlide);
// });

// header

// NAVIGATION LOGO SCROLL TOP
// $('.logo').on('click', function (e) {
//   e.preventDefault();
//   $('.nav-toggle').removeClass('open');
//   $('.menu-left').removeClass('collapse');
//   $('html, body').animate(
//     {
//       scrollTop: 0,
//     },
//     750,
//     'easeInOutQuad'
//   );
// });

// TOGGLE HAMBURGER & COLLAPSE NAV
$('.nav-toggle').on('click', function () {
  $(this).toggleClass('open');
  $('.menu-left').toggleClass('collapse');
});
// REMOVE X & COLLAPSE NAV ON ON CLICK
$('.menu-left a').on('click', function () {
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
});

// SHOW/HIDE NAV

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If they scrolled down and are past the navbar, add class .nav-up.
  // This is necessary so you never see what is "behind" the navbar.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $('header').removeClass('show-nav').addClass('hide-nav');
    $('.nav-toggle').removeClass('open');
    $('.menu-left').removeClass('collapse');
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $('header').removeClass('hide-nav').addClass('show-nav');
    }
  }

  lastScrollTop = st;
}
