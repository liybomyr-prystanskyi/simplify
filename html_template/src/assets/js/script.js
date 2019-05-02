$(function () {
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

    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $('header').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $('header').removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }

  $('.prev-slide').click(function () {
    $('.our-news__slider').slick('slickPrev');
  });

  $('.next-slide').click(function () {
    $('.our-news__slider').slick('slickNext');
  });

  $('.our-news__slider').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
    ]
  });


  $('.client-block__brands-block').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
    ]
  });

  $('.clients-block-left-arrow').click(function () {
    $('.client-block__brands-block').slick('slickPrev');
  });

  $('.clients-block-right-arrow').click(function () {
    $('.client-block__brands-block').slick('slickNext');
  });


  var nextWork = '';
  var prevWork = '';
  var slickParameters = {
    dots: false,
    arrows: false,
    autoplay: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 15,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          centerMode: false,
          focusOnSelect: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }

    ]
  };



  $('.our-works-left-arrow').click(function () {
    $('.our-works__slider').slick('slickPrev');
  });

  $('.our-works-right-arrow').click(function () {
    $('.our-works__slider').slick('slickNext');
  });

  $('.our-works__slider').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
    ]
  });

  $('.project-desktop__main__arrows__left').click(function () {
    $('.project-desktop__slider').slick('slickPrev');
  });

  $('.project-desktop__main__arrows__right').click(function () {
    $('.project-desktop__slider').slick('slickNext');
  });

  $('.project-desktop__slider').slick({
    autoplaySpeed: 3000,
    autoplay: true,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
    slidesToScroll: 1
  });



  $('#other-news-left').click(function () {
    $('.news-slide').slick('slickPrev');
  });

  $('#other-news-right').click(function () {
    $('.news-slide').slick('slickNext');
  });

  $('.news-slide').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
    ]
  });




  $('.about-left').click(function () {
    $('.about-us__slider__wrapper').slick('slickPrev');
  });

  $('.about-right').click(function () {
    $('.about-us__slider__wrapper').slick('slickNext');
  });

  $('.about-us__slider__wrapper').slick({
    dots: false,
    infinite: true,
    speed: 800,
    arrows: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
    ]
  });


 



  function getWorks(index1, index2) {
    prevWork = $('.our-works__slider *[data-slick-index="' + index1 + '"] .mask-container img').attr('data-name');
    nextWork = $('.our-works__slider *[data-slick-index="' + index2 + '"] .mask-container img').attr('data-name');
    $('.next-work').text(nextWork);
    $('.prev-work').text(prevWork);
  }
  getWorks(-1, 1);
  $('.our-works__slider').on('afterChange', function (event, slick, currentSlide) {
    getWorks((+currentSlide - 1), (+currentSlide + 1));
  });
});

$(function () {
  $('.default-title').each(function () {
    var str = $(this).find('h2').text();
    var lastSymbol = str[str.length - 1];

    if (lastSymbol == '?') $(this).find('h2').append('<i class="dot dot--question"></i>')
    else if (lastSymbol == '!') $(this).find('h2').append('<i class="dot dot--attension"></i>')
    else if (lastSymbol == '.') $(this).find('h2').append('<i class="dot dot--dot"></i>')
    else $(this).find('h2').append('<i class="dot"></i>')
  });

  // $('.who-we-are__global-block__default').each(function () {
  //   var str = $(this).find('h2').text();
  //   var lastSymbol = str[str.length - 1];
  
  //   if (lastSymbol == '?') $(this).find('h2').append('<i class="dot dot--question"></i>')
  //   else if (lastSymbol == '!') $(this).find('h2').append('<i class="dot dot--attension"></i>')
  //   else if (lastSymbol == '.') $(this).find('h2').append('<i class="dot dot--dot"></i>')
  //   else $(this).find('h2').append('<i class="dot"></i>')
  // });
});

function slickUnslickClients() {
  var windowWidth = $(window).width();
  if (windowWidth < 768) {
    if (!$('.client-block__brands-block').hasClass('slick-slider')) {
      $('.client-block__brands-block').slick(slickParameters);
    }
  } else {
    if ($('.client-block__brands-block').hasClass('slick-slider')) {
      $('.client-block__brands-block').slick('unslick');
    }
  }
}
slickUnslickClients();
// // Init AOS
// AOS.init();