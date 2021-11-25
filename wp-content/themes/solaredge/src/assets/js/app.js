import $ from 'jquery';
import { Swiper, SwiperSlide, Pagination, Navigation, Scrollbar,Autoplay }  from 'swiper';

Swiper.use([Pagination,Navigation, Scrollbar,Autoplay]);

window.$ = $;

const content_slider = ".js-content-slider"
const calendar_slider = ".js-calendar-slider"
const event_slider = '.js-event-slider'

const event_swiper = new Swiper(event_slider, {
    slidesPerView: 1,
    loop:true,
    pagination: {
      el: ".js-event-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    navigation: {
      nextEl: ".js-event-button-next",
      prevEl: ".js-event-button-prev",
    },
    autoplay: {
        delay: 20000,
    },
});

const calendar_swiper = new Swiper(calendar_slider, {
  slidesPerView: 1,
  loop:true,
  pagination: {
    el: ".js-calendar-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".js-calendar-button-next",
    prevEl: ".js-calendar-button-prev",
  },
  autoplay: {
      delay: 10000,
    },
});

const content_swiper = new Swiper(content_slider, {
  slidesPerView: 1,
  loop:true,
  navigation: {
    nextEl: ".js-content-button-next",
    prevEl: ".js-content-button-prev",
  },
  autoplay: {
      delay: 30000,
    },
});

jQuery(function($) {
  $(document).on('click', '.menu__btn', function(e){
    $(".header__menu-hover").slideToggle("slow");
  })
})


  ////////////////////////////////CALENDAR//////////////////


function Calendar (id, year, month) {
  var Dlast = new Date(year,month+1,0).getDate(),
      D = new Date(year,month,Dlast),
      DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
      DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
      calendar = '<tr>',
      month=["January","February","March","April","May","June","July","August","September","October","November","December"];
  if (DNfirst != 0) {
    for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
  }else{
    for(var  i = 0; i < 6; i++) calendar += '<td>';
  }
  for(var  i = 1; i <= Dlast; i++) {
    if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
      calendar += '<td class="today">' + i;
    }else{
      calendar += '<td>' + i;
    }
    if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
      calendar += '<tr>';
    }
  }
  for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
  document.querySelector('#'+id+' tbody').innerHTML = calendar;
  document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
  document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
  document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
  if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // so that when turning over the months the entire page does not "jump", a row of empty cells is added. Bottom line: always 6 lines for numbers
      document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
  }
  }
  Calendar("calendar-sheet", new Date().getFullYear(), new Date().getMonth());
  // switch minus month
  document.querySelector('#calendar-sheet thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
    Calendar("calendar-sheet", document.querySelector('#calendar-sheet thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar-sheet thead td:nth-child(2)').dataset.month)-1);
  }
  // switch plus month
  document.querySelector('#calendar-sheet thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
    Calendar("calendar-sheet", document.querySelector('#calendar-sheet thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar-sheet thead td:nth-child(2)').dataset.month)+1);
  }




 ////////////////////////////////////////TIME//////////////////////////////////
 
 
 function clockPainting() {
  var now = new Date();
  var sec = now.getSeconds();
  var min = now.getMinutes();
  var hr = now.getHours();

  var ctx = document.getElementById("canvas").getContext("2d");
  ctx.save();// push the current context to the stack

  ctx.clearRect(0,0,150,150);
  ctx.translate(75, 75);
  ctx.scale(0.4,0.4);
  ctx.rotate(-Math.PI/2);

  ctx.strokeStyle = "black";
  ctx.fillStyle = "black";
  ctx.lineWidth = 3;
  ctx.lineCap = "round";

  ctx.save();
  ctx.beginPath();

  for (var i = 0; i < 12; i++) {
      ctx.rotate(Math.PI/6);
      ctx.moveTo(150,0);
      ctx.lineTo(120,0);
  }

  ctx.stroke();// drew what previously described
  ctx.restore();// get the last saved context from the stack

  ctx.save();
  // draw an hour hand by rotating the canvas
  ctx.rotate((Math.PI/6)*hr +
      (Math.PI/360)*min +
      (Math.PI/21600)*sec);
  ctx.lineWidth = 6;

  ctx.beginPath();
  ctx.moveTo(0,0);

  // line almost to hour markers
  ctx.lineTo(80,0);
  ctx.stroke();
  ctx.restore();

  ctx.save();

  // minute hand
  ctx.rotate((Math.PI/30*min) +
      (Math.PI/1800)*sec);
  ctx.lineWidth = 6;

  ctx.beginPath();
  ctx.moveTo(0,0);
  ctx.lineTo(112,0);
  ctx.stroke();
  ctx.restore();

  ctx.save();

  // second hand
  ctx.rotate(sec * Math.PI/30);
  ctx.strokeStyle = "#d0d0d0";// outline color
  ctx.fillStyle = "#d0d0d0";
  ctx.lineWidth = 6;

  ctx.beginPath();
  ctx.moveTo(0,0);
  ctx.lineTo(150,0);
  ctx.stroke();
  ctx.restore();

  ctx.restore();
}
window.onload = function() {
  setInterval(clockPainting, 1000);// function that redraws the clock
  //at regular intervals
}

  