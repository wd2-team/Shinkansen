<!DOCTYPE html>
<html class="result" lang="ja" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="ja">
  <meta name="description" content="西九州新幹線の開業を記念した、諫早市開通元年イベント特設サイトです。つながりましておめでとうございます。シャトルバスやイベントのご案内、諫早市限定おみくじもあります。">
  <meta property="og:title" content="西九州新幹線開通元年">
  <meta property="og:description" content="西九州新幹線の開業を記念した、諫早市開通元年イベント特設サイトです。つながりましておめでとうございます。シャトルバスやイベントのご案内、諫早市限定おみくじもあります。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://kaitsu-gannen-isahaya.com/kekka">
  <meta property="og:image" content="images/ogp.png">
  <meta property="og:site_name" content="西九州新幹線開通元年">
  <meta property="og:locale" content="ja_JP">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <link rel="icon" href="images/icon.png">
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
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EDLBVBGQ6D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EDLBVBGQ6D');
</script>
<script>
  (function(d) {
    var config = {
      kitId: 'qbw3zuc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>
<body>
<div id="kekkawrapper" class="page">
  <img src="images/omikuji_kumo.svg">
  <p>諫&ensp;早&ensp;市&ensp;限&ensp;定<br><span class="omikujifont">お&emsp;み&emsp;く&emsp;じ</span></p>
  <div id="kekkaback">
    <div id="kekkacontent">
      <?php
      $luckjson = file_get_contents("json/luck.json");
      $luckjson = mb_convert_encoding($luckjson, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      $luckjson = trim($luckjson);
      $lucks = json_decode($luckjson,true);

      $cntlucks = count($lucks) - 1;
      $randluck = rand(0,$cntlucks);
      $lucktitles = $lucks[$randluck]["TITLE"];
      $lucktitle = explode("br",$lucktitles);
      $luckcontents = $lucks[$randluck]["CONTENT"];
      $luckcontent = explode("br",$luckcontents);

      $itemjson = file_get_contents("json/item.json");
      $itemjson = mb_convert_encoding($itemjson, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      $itemjson = trim($itemjson);
      $items = json_decode($itemjson,true);
      $cntitems = count($items) - 1;
      $randitem = rand(0,$cntitems);

      $spotjson = file_get_contents("json/spot.json");
      $spotjson = mb_convert_encoding($spotjson, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      $spotjson = trim($spotjson);
      $spots = json_decode($spotjson,true);
      $cntspots = count($spots) - 1;
      $randspot = rand(0,$cntspots);
      $spotmap = false;

      $foodjson = file_get_contents("json/food.json");
      $foodjson = mb_convert_encoding($foodjson, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
      $foodjson = trim($foodjson);
      $foods = json_decode($foodjson,true);
      $cntfoods = count($foods) - 1;
      $randfood = rand(0,$cntfoods);

      $randall = rand(0,2);
      if ($randall == 0) {
        $bottomh = 'ラッキーアイテム';
        $randitem = rand(0,$cntitems);
        $bottomtitles = $items[$randitem]["TITLE"];
        $bottomtitle = explode("br",$bottomtitles);
        $bottomcontents = $items[$randitem]["CONTENT"];
        $bottomcontent = explode("br",$bottomcontents);
      } else if ($randall == 1) {
        $bottomh = 'ラッキースポット';
        $randspot = rand(0,$cntspots);
        $bottomtitles = $spots[$randspot]["TITLE"];
        $bottomtitle = explode("br",$bottomtitles);
        $bottomcontents = $spots[$randspot]["CONTENT"];
        $bottomcontent = explode("br",$bottomcontents);
        $spotmap = $spots[$randspot]["MAP"];
      } else {
        $bottomh = 'ラッキーフード';
        $randfood = rand(0,$cntfoods);
        $bottomtitles = $foods[$randfood]["TITLE"];
        $bottomtitle = explode("br",$bottomtitles);
        $bottomcontents = $foods[$randfood]["CONTENT"];
        $bottomcontent = explode("br",$bottomcontents);
      }
      ?>
      <div id="kekkabox01">
        <div id="kekkabox01-01">
          <div id="kekkabox01-01top">
            <img id="kekkabox01-01unagihidari" src="images/unagi_hidari.svg">
            <span id="kekkabox01-01title">運&emsp;&emsp;勢</span>
            <img id="kekkabox01-01unagimigi" src="images/unagi_migi.svg">
          </div>
          <div id="kekkabox01-01content" class="omikujifont">
            <?php foreach ($lucktitle as $luckti){
              echo $luckti;
              echo '<br>';
            } ?>
          </div>
        </div>
        <div id="kekkabox01-02" class="omikujifont">
          <?php foreach ($luckcontent as $luckcon){
            echo $luckcon;
            echo '<br>';
          } ?>
        </div>
      </div>
      <div id="kekkabox02">
        <div id="kekkabox02-01" class="omikujifont"><?php echo $bottomh; ?></div>
        <div id="kekkabox02-02" class="omikujifont">
          <p>
            <?php foreach ($bottomtitle as $bottomti){
              echo $bottomti;
              echo '<br>';
            } ?>
          </p>
          <p>
            <?php foreach ($bottomcontent as $bottomcon){
              echo $bottomcon;
              echo '<br>';
            } ?>
          </p>
          <?php
          if ($spotmap) {
            echo '<a href="' . $spotmap . '"><img src="images/spot.svg"></a>';
          }
          ?>
        </div>
      </div>
      <div id="kekkabox03" class="omikujifont">
        <a href="omikuji.php">もう一度挑戦する</a>
      </div>
      <div id="kekkabox04">
        <img src="images/kaitsu_type_b.svg">
        <a href="index.php"><span>開通元年イベント</span><br>特設サイトはこちら</a>
        <p>9月23日･24日･25日<br>諫早市内の各会場で開催</p>
        <a href="mailto:kaitsugannen@gmail.com?subject=%E3%81%8A%E3%81%BF%E3%81%8F%E3%81%98%E3%82%A2%E3%82%A4%E3%83%87%E3%82%A3%E3%82%A2">おみくじアイディア募集中</a>
        <p>※こちらからの返信はございません</p>
        <p>主催：諫早市新幹線開業記念事業実行委員会</p>
        <img src="images/shinkansen_kamome_moji.svg">
      </div>
    </div>
  </div>
</div>
<div id="animewrapper">
  <div id="animetopwrapper">
    <div id="animetopimages">
      <div id="animetopleft">
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
      <div id="animetopright">
        <img class="fadeUp" src="images/tsunagari_moji-01.svg">
        <img class="delay-time01 fadeUp" src="images/tsunagari_moji-02.svg">
        <img class="delay-time02 fadeUp" src="images/tsunagari_moji-03.svg">
        <img class="delay-time03 fadeUp" src="images/tsunagari_moji-04.svg">
        <img class="delay-time04 fadeUp" src="images/tsunagari_moji-05.svg">
        <img class="delay-time05 fadeUp" src="images/tsunagari_moji-06.svg">
        <img class="delay-time06 fadeUp" src="images/tsunagari_moji-07.svg">
      </div>
    </div>
    <div id="animetopbottom">
      <img class="slideUp" src="images/shinkansen_kamome_moji.svg">
    </div>
  </div><!-- #animetopwrapper -->
</div><!-- #animewrapper -->
<div id="sprecommendedwrapper">
  <div id="sprecommendedcontent">
      <img src="images/kaitsu-gannen.svg">
      <div id="sprecommended" class="container">
          <img src="images/site_qr.svg">
          <p><span>開通元年イベント特設サイト</span><br>特設サイトはスマートフォンでのみご覧になれます</p>
          <img src="images/site_qr.svg">
      </div>
      <p>主催：諫早市新幹線開業記念事業実行委員会</p>
  </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>