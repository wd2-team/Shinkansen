$(function(){
   const time = () => {
     const today = new Date();
     const year = today.getFullYear();
     const month = today.getMonth() + 1;
     const date = today.getDate();
     const day = today.getDay();
     const wArray = [ "日", "月", "火", "水", "木", "金", "土" ] ;
     const wDay = wArray[day];
     const hours = today.getHours();
     const minutes = today.getMinutes();

     const limiteDay = new Date('2022/09/23 00:00:00');
     const limiteyear = limiteDay.getFullYear();
     const limitemonth = limiteDay.getMonth() + 1;
     const limitedate = limiteDay.getDate();
     const limiteday = limiteDay.getDay();
     const limiteWDay = wArray[limiteday];
     const limitehours = limiteDay.getHours();
     const limiteminutes = limiteDay.getMinutes();

     const elToday = today.getTime();
     const ellimiteDay = limiteDay.getTime();
     const count = ellimiteDay - elToday;
     const countDate = (Math.trunc(count / 24 / 60 / 60 / 1000));
     const countHours = (Math.trunc(count / 60 / 60 / 1000 % 24));
     const countMinutes = (Math.trunc(count / 60 / 1000 % 60));
     if (!countDate < 1) {
       $('#count .today').text(countDate + 1);
     }
   };
   time();
   const countDown = () => {
     time();
     setTimeout(countDown, 60000);
   };
   countDown();

   var $body = $('body');
   var scrollTop;
   function bodyFixedOn() {
     scrollTop = $(window).scrollTop();
     $body.css({
       position: 'fixed',
       top: -scrollTop
     });
   }
   function bodyFixedOff() {
     $body.css({
       position: '',
       top: ''
     });
     $(window).scrollTop(scrollTop);
   }
   $('input').click(function() {
       $('input:checked').each(function() {
           bodyFixedOn();
       })
       
   })
   $('.close').on('click', function() {
     bodyFixedOff();
   });

  const soonomikuji = document.getElementById('soonomikuji');
  const soontexts = [
    'おみくじ',
    'まもなく'
  ];
  let i = 0;
  function showSoonomikuji() {
    if (i == 2) {
      i = 0;
    }
    soonomikuji.textContent = soontexts[i];
    i++;
  }
  setInterval(showSoonomikuji, 1800);

  // setTimeout(function(){
  //   $("#kekkacontent").css("display", "block");
  //   $("#kekkacontent").stop().animate({opacity:'1'},1000);
  // },1500);
});

// $('input:checked').parents('#wrapper').setAttribute('pointer-events', 'none');

const mySwiper = new Swiper('.swiper', {
  loop: true,
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 8,
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
});

var beforePos = 0;
function ScrollAnime() {
  var elemTop = $('#mainimage').offset().top + 100;
  var scroll = $(window).scrollTop();
    if(scroll == beforePos) {
    } else if(elemTop > scroll || 0 > scroll - beforePos){
      $('#headerblock').removeClass('UpMove');
      $('#headerblock').addClass('DownMove');
    } else {
      $('#headerblock').removeClass('DownMove');
      $('#headerblock').addClass('UpMove');
    }
    beforePos = scroll;
}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  ScrollAnime();//スクロール途中でヘッダーが消え、上にスクロールすると復活する関数を呼ぶ
});
// ページが読み込まれたらすぐに動かす
// $(window).on('load', function () {
//   ScrollAnime();
// });




//リンク先のidまでスムーススクロール
//※ページ内リンクを行わない場合は不必要なので削除してください
    var headerH = $("#header").outerHeight(true);//headerの高さを取得    
    $('#g-navi li a').click(function () {
  var elmHash = $(this).attr('href'); 
  var pos = $(elmHash).offset().top-headerH;//header分の高さを引いた高さまでスクロール
  $('body,html').animate({scrollTop: pos}, 1000);
  return false;
});