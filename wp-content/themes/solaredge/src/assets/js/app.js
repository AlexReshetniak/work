import $ from 'jquery';
import { Swiper, SwiperSlide, Pagination, Navigation, Scrollbar,Autoplay }  from 'swiper';

Swiper.use([Pagination,Navigation, Scrollbar,Autoplay]);

window.$ = $;

const mainSlider = ".js-main-slider"
const postsSlider = ".js-posts-slider"
const acfSlider = '.js-acf-slider'
const fileContainer = ".ginput_container_fileupload"

const acf_swiper = new Swiper(acfSlider, {
    slidesPerView: 4,
    centeredSlides:false,
    loop:false,
    scrollbar: {
      el: '.js-acf-slider__scrollbar',
      hide: false,
    },
    autoplay: {
        delay: 20000,
      },
  });

  $(document).on("ready",function () {
    if ($(mainSlider).length) {
        let swiper = new Swiper(mainSlider, {
            slidesPerView: 1,
            pagination: {
                clickable: true,
                el: ".js-main-pagitanion",
            },
        });
    }
    if (postsSlider.length && $(window).width() <= 974) {
        $(postsSlider).each(function(index, element){
            var $this = $(this);
            $this.addClass("instance-" + index);
            $this.closest(".posts-common").find(".js-posts-pg").addClass("pg-" + index);
            var swiper = new Swiper(".instance-" + index, {
                slidesPerView: 1,
                autoHeight: true,
                pagination: {
                    el: ".pg-" + index,
                },
            });
        });
    }
    if ($(fileContainer).length) {
        $(fileContainer).closest('.gfield').addClass('m-cst-file')
    }
});

$(document).on("click", ".js-nav-toggle", function () {
  $(this).find(".navbar-mob__toggler").toggleClass('is-active');
  $(this).find(".navbar-mob__toggler-triangle").toggleClass('show');
  $(this).siblings(".navbar-menu").toggleClass('show');
  $(this).closest("html").toggleClass('show-menu')
});

$(document).on("click", ".js-accordion-toggle", function () {
  $(this).find('.title-arrow').toggleClass('show');
  $(this).find('.accordion__item-content').slideToggle();
});


$(document).on("scroll",function () {
    if ($('.goog-te-menu-frame').is(':visible') ) {
        $('.goog-te-menu-frame').hide()
    }
  });

  