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
</head>
<body>
<div id="wrapper">
	<header>
		<div id="headchouchin1" class="blinkred">
			<div class="headchouchin">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
			</div>
			<p>9.23</p>
		</div>
		<div id="headchouchin2" class="blinkwhite">
			<div class="headchouchin">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
			</div>
			<p>9.24</p>
		</div>
		<div id="headchouchin3" class="blinkred">
			<div class="headchouchin">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
				<img src="images/chouchin_kouhaku.png">
			</div>
			<p>9.25</p>
		</div>
	</header>
	<div id="headlink">
		<label for="modal-trigger01">モーダルが開きます</label>
		<div class="modal">
		  <input id="modal-trigger01" class="checkbox" type="checkbox">
		  <div class="modal-overlay">
		    <label for="modal-trigger01" class="o-close">&#10006;</label>
		    <div class="modal-wrap a-center">　/*a-centerがウィンドウを中心に設置*/
		      <label for="modal-trigger01" class="close">&#10006;</label>
		      <h2>モーダルのタイトル</h2>
		      <p>テキストテキストテキストテキストテキスト</p>
		    </div>
		  </div>
		</div>
	</div>
	
	<footer>
	</footer>
</div><!-- #wrapper -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>