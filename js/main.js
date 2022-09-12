function drawKuji() {
   let randomNumber = Math.floor(Math.random() * 7 + 1);
   document.getElementsByClassName("kujikekka")[0].setAttribute('src', `images/kuji${randomNumber}.png`);
   // document.querySelectorAll("button")[0].innerHTML = "もう一度引く";
}
window.onload = drawKuji;

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
     // if (!(countDate < 1 && countHours < 1)) {
     //   $('#count .hours').text(countHours + '時間');
     // }
     // $('#count .minutes').text(countMinutes + '分');
   };
   time();
   const countDown = () => {
     time();
     setTimeout(countDown, 60000);
   };
   countDown();
});

const mySwiper = new Swiper('.swiper', {
  loop: true,
  slidesPerView: 1.1,
  spaceBetween: 8,
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
});