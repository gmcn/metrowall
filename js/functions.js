( function($) {

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });

} ) (jQuery);

(function() {
    $(window).on('load', function() {
        var select = $('.__js_filter-select');
        var filterItem = $('.filter__item');
        var filterItemAll = $('.filter__item[data-filter="*"]');
        var filterActiveClass = 'filter__item--active';
        var grid = $('.__js_gallery-filter').isotope({
            // itemSelector: '.works__item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });
        var grid2 = $('.__js_news-list-filter').isotope({
            itemSelector: '.__js_news-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });

        var grid3 = $('.__js_projects-list-filter').isotope({
            itemSelector: '.__js_projects-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });




        setTimeout(function() {
            $('.masonry').isotope({
                itemSelector: '.masonry-item',
                layoutMode: 'packery'
            });
        }, 100);
        select.on('change', function() {
            var value = select.val();
            var filterValue = value !== '*' ? '.__js_' + value : value;
            if (value !== '*') {
                var filterValue = '.__js_' + value;
                filterItem.removeClass(filterActiveClass);
            } else {
                filterItemAll.addClass(filterActiveClass);
                var filterValue = value;
            }
            grid.isotope({
                filter: filterValue
            });
        });
        filterItem.on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass(filterActiveClass).siblings().removeClass(filterActiveClass);
            grid.isotope({
                filter: filterValue
            });
            grid2.isotope({
                filter: filterValue
            });
            if ($('.__js_news-list-filter') && $('.__js_news-list-filter').length > 0) {
                var destination = $('.__js_news-list-filter').offset().top - 200;
                $('html').animate({
                    scrollTop: destination
                }, 1100);
            }
        });
    });
})();

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000",
      "text": "#fff"
    },
    "button": {
      "background": "#E30B18"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "privacy-policy"
  }
});

var heroSwiper = new Swiper(".heroSwiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var testimonialSwiper = new Swiper(".testimonialSwiper", {

  loop: true,
  autoHeight: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var productSwiper = new Swiper(".productSwiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
