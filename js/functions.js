$(function () {

  $('.featured-album').hover(
    function () {
      $('.featured-album__spotify').addClass('show-player');
    },
    function () {
      $('.featured-album__spotify').removeClass('show-player');
    }
  );

  $('a.page-scroll').bind('click', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top - 50)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
  });

  $(window).scroll(function () {
    var scroll = $(this).scrollTop();
    headerAnimation(scroll);
  });

  function headerAnimation(scroll) {
    if (scroll > 65) {
      $('header').addClass('header--scrolled');
      // $('.nav-ul').addClass('bounce');
    } else {
      $('header').removeClass('header--scrolled');
      // $('.nav-ul').removeClass('bounce');
    }
  }

  // Flickity // ————————————————————————————————————————————

  $('.music-videos__carousel').flickity({
    pageDots: false
  });

  $('.lyrics-carousel').flickity({

  });

});