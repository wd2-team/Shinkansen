<!DOCTYPE html>
<html class="result" lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="ja">
  <meta name="description" content="西九州新幹線の開業を記念した、諫早市開通元年イベント特設サイトです。つながりましておめでとうございます。シャトルバスやイベントのご案内、諫早市限定おみくじもあります。">
  <meta property="og:title" content="西九州新幹線開通元年">
  <meta property="og:description" content="西九州新幹線の開業を記念した、諫早市開通元年イベント特設サイトです。つながりましておめでとうございます。シャトルバスやイベントのご案内、諫早市限定おみくじもあります。">
  <meta property="og:type" content="website">
  <meta property="og:image" content="images/ogp.png">
  <meta property="og:site_name" content="西九州新幹線開通元年">
  <meta property="og:locale" content="ja_JP">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script
  	src="https://code.jquery.com/jquery-2.2.4.js"
  	integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  	crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<?php $Path = "./"; include(dirname(__FILE__).'/functions.php'); ?>
  	<?php if( is_mobile()) : ?>
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <?php elseif( is_tablet()) : ?>
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php endif; ?>
	<title>西九州新幹線開通元年　つながりましておめでとうございます</title>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EDLBVBGQ6D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EDLBVBGQ6D');
</script>
</head>
<body>
<div id="countdownwrapper" class="page">
  <div id="countcontent">
  	<img src="images/kaitsu-gannen.svg">
  	<div id=count class="container">
  		<p>西九州新幹線開業まで</p>
  		<p>あと<span class="today"></span>日</p>
      <a href="images/kaitsu_gannen_isahaya_event.pdf">開通元年イベント総合パンフレットを見る</a>
      <br>
      <a href="images/kaitsu_gannen_isahaya_time_Schedule.pdf">◀&ensp;各イベントのタイムテーブルはこちらから&ensp;▶</a>
  		<p>主催：諫早市新幹線開業記念事業実行委員会</p>
  	</div>
  </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>