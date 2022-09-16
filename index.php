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
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
	<?php $Path = "./"; include(dirname(__FILE__).'/functions.php'); ?>
  	<?php if( is_mobile()) : ?>
	<script>
		setTimeout(function(){
			window.location.href = '/main.php';
		}, 5*1000);
	</script>
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <?php elseif( is_tablet()) : ?>
    <link rel="stylesheet" type="text/css" href="css/tablet.css">
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php endif; ?>
	<title>西九州新幹線開通元年　つながりましておめでとうございます</title>
</head>
<body>
<div id="indexwrapper">
	<div id="topwrapper">
		<div id="topimages">
			<div id="topleft">
				<img class="delay-time07 fadeUp" src="images/tsunagari_moji-08.svg">
				<img class="delay-time08 fadeUp" src="images/tsunagari_moji-09.svg">
				<img class="delay-time09 fadeUp" src="images/tsunagari_moji-10.svg">
				<img class="delay-time10 fadeUp" src="images/tsunagari_moji-11.svg">
				<img class="delay-time11 fadeUp" src="images/tsunagari_moji-12.svg">
				<img class="delay-time12 fadeUp" src="images/tsunagari_moji-13.svg">
				<img class="delay-time13 fadeUp" src="images/tsunagari_moji-14.svg">
				<img class="delay-time14 fadeUp" src="images/tsunagari_moji-15.svg">
				<img class="delay-time15 fadeUp" src="images/tsunagari_moji-16.svg">
				<img class="delay-time16 fadeUp" src="images/tsunagari_moji-17.svg">
			</div>
			<div id="topright">
				<img class="fadeUp" src="images/tsunagari_moji-01.svg">
				<img class="delay-time01 fadeUp" src="images/tsunagari_moji-02.svg">
				<img class="delay-time02 fadeUp" src="images/tsunagari_moji-03.svg">
				<img class="delay-time03 fadeUp" src="images/tsunagari_moji-04.svg">
				<img class="delay-time04 fadeUp" src="images/tsunagari_moji-05.svg">
				<img class="delay-time05 fadeUp" src="images/tsunagari_moji-06.svg">
				<img class="delay-time06 fadeUp" src="images/tsunagari_moji-07.svg">
			</div>
		</div>
		<div id="topbottom">
			<img class="slideUp" src="images/shinkansen_kamome_moji.svg">
		</div>
	</div><!-- #topwrapper -->
</div><!-- #indexwrapper -->
<div id="sprecommended"></div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>