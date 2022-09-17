<!DOCTYPE html>
<html class="result" lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="ja">
	<meta name="description" content="西九州新幹線開通元年　つながりましておめでとうございます">
	<meta property="og:type" content="website">
	<meta property="og:title" content="西九州新幹線開通元年">
	<meta property="og:description" content="西九州新幹線開通元年　つながりましておめでとうございます">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script
  	src="https://code.jquery.com/jquery-2.2.4.js"
  	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  	crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
	<?php $Path = "./"; include(dirname(__FILE__).'/functions.php'); ?>
  	<?php if( is_mobile()) : ?>
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <?php elseif( is_tablet()) : ?>
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php endif; ?>
	<title>西九州新幹線開通元年　つながりましておめでとうございます</title>
</head>
<body>
<div id="kekkawrapper" class="page">
  <img src="images/start.png">
  <p>開&emsp;通&emsp;祈&emsp;願<br><span>お&emsp;み&emsp;く&emsp;じ</span></p>
  <div id="kekkacontent">
    <div id="kekkabox01">
      <div id="kekkabox01-01">
        <img class="kujikekka" src="">
      </div>
      <div id="kekkabox01-02">
        万事順調。諫早にはお米を食べて育つ<br>美味しい「諫美豚」がいるよ
      </div>
    </div>
    <div id="kekkabox02">
      <div id="kekkabox02-01">ラッキースポット</div>
      <div id="kekkabox02-02">
        <div>
          <p>ハートのイチョウ</p>
          <p>飯盛ふれあい会館には<br>ハートの形をした銀杏の木があり<br>秋には黄色のハートが見れるよ</p>
          <i class="fa-solid fa-location-dot"></i>
        </div>
      </div>
    </div>
    <div id="kekkabox03">
      <p><button onclick="drawKuji()">もう一度挑戦する</button></p>
    </div>
    <div id="kekkabox04">
      <img src="images/kaitsu_type_b.svg">
    </div>
    <a href="#">気運を高める<br>開通元年イベントはこちら↘</a>
    <img src="images/shinkansen_kamome_moji.svg">
  </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>