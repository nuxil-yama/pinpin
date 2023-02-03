$(function () {
  const mediaQuery = window.matchMedia('(max-width: 767px)');
  handle(mediaQuery);
  mediaQuery.addListener(handle);

  function handle(mm) {
    if (mm.matches && $('.js-modal-open').length) {
      // modal
      $('.js-modal-open').click(function (e) {
        $(this).children('.js-modal-area').show();
        e.stopPropagation();
      });

      $('.js-modal-detail').click(function (e) {
        e.stopPropagation();
      });

      $('.js-modal-close, .js-modal-area').click(function (e) {
        $(this).closest('.js-modal-area').hide();
        e.stopPropagation();
      });
    }
  }

  // cursor
  let $cursor = $('#cursor');

  if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
    // SP, TB
    $cursor.css('display', 'none');
  } else {
    // PC
    $(document).on('mousemove', function (e) {
      let x = e.clientX;
      let y = e.clientY;
      $cursor.css({
        'top': y + 'px',
        'left': x + 'px',
        'transform': 'translate(-50%, -50%)',
      })
    });

    $('a').on({
      'mouseenter': function () {
        $cursor.addClass('active');
      },
      'mouseleave': function () {
        $cursor.removeClass('active');
      }
    });
  }

  $(window).on('load resize', function () {
    // footer animation
    const windowSize = $(window).width();
    const speed = Math.round(windowSize / 106);
    let num = Math.round(windowSize / 111);
    if (num % 2 == 1) num++;

    $('.footer__anime-item').remove();

    $('.footer__anime-list').css('animation-duration', speed + 's');

    for (let i = 1; i <= num; i++) {
      $('.footer__anime-list').append('<li class="footer__anime-item"><img src="/wp/wp-content/themes/wordpress-template/img/icon_box.svg" alt="" /></li>');
    }
  });
});