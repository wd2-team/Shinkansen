// ボタンクリック時にくじを引く
function drawKuji() {
   // ランダムな整数を作成（1-6の例）
   let randomNumber = Math.floor(Math.random() * 7 + 1);

   // くじの結果画像を表示させる
   document.getElementsByClassName("kuji")[0].setAttribute('src', `images/kuji${randomNumber}.png`);　// バックティック文字で囲む事に注意(` `)

   // ボタンの文字を変更する
   document.querySelectorAll("button")[0].innerHTML = "もう一度引く";
}