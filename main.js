function drawKuji() {
   let randomNumber = Math.floor(Math.random() * 7 + 1);
   document.getElementsByClassName("kujikekka")[0].setAttribute('src', `images/kuji${randomNumber}.png`);
   // document.querySelectorAll("button")[0].innerHTML = "もう一度引く";
}
window.onload = drawKuji;

$(function(){


});