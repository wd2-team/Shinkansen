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
    <script>
  (function(d) {
    var config = {
      kitId: 'qbw3zuc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f%7C%7Ca&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="icon" href="images/icon.png">
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
</head>
<body>
<div id="kekkawrapper" class="page">
  <img src="images/omikuji_kumo.svg">
  <p>諫&emsp;早&emsp;市&emsp;限&emsp;定<br><span class="omikujifont">お&emsp;み&emsp;く&emsp;じ</span></p>
  <div id="kekkaback">
    <div id="kekkacontent">
      <?php
      function get_luck_data() {
        $url = 'https://script.googleusercontent.com/macros/echo?user_content_key=D71An70cQR7IdEEwyVUdM7AprFbQOxbk37_DIl9GQJfXvY28Ek2_SO6dE08cbEkOfN47m4VzTlN0FcqOup7Nlqdn-9gvHIBzm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnIXzT647ONc3aWmr4tbRmd2sLLk5gn7T-Uzd3xfo-HZd2UFjJ02hUWncQtNUlYwVhmeHF1aVl2Vt_i4YEl6wa6N3sE1xyZpz6dz9Jw9Md8uu&lib=MGCGSwU88mgjR4EiuwwnVWK_uYdcHmPPI';
        if ( file_get_contents( $url ) ) {
          $data = mb_convert_encoding( file_get_contents( $url ), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
          $json_decode = json_decode($data, true);
          return $json_decode;
        }
      }
      function get_item_data() {
        $url = 'https://script.googleusercontent.com/macros/echo?user_content_key=5ISYrODQUHB60gPs-ZkMWNgUEe-r6MygDcTdoNtlT92q-jSH3JaiVR9XrGZ_sMnb4tnEggmJ-z5d2ml3Nl7vuEcGyAm49CNXm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnAUP0sBXi52xIy_p6v-6Lz4pj5WAk1clfHKWY_g6Usl8B3I9LSX7b9wbimy255tdC47ZUUuF93hWMwwv3CkrwcS7KsGIIxohiw&lib=MURsQyvxp9xRfkImfm-2mbhy_24_rZK5a';
        if ( file_get_contents( $url ) ) {
          $data = mb_convert_encoding( file_get_contents( $url ), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
          $json_decode = json_decode($data, true);
          return $json_decode;
        }
      }
      function get_spot_data() {
        $url = 'https://script.googleusercontent.com/macros/echo?user_content_key=cDVjNLGlSB51MLhFkDr1N38k-1rToEJP400Vd-WR8MOD9WEp_8gTEJSKaQET1h3nNu8BMNDD315d2ml3Nl7vuKXZzMK4L4R1m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnGrd7XCOjJun8jMlrgZtXTEN5zJblhTiqjkYYVAok-k5cfhfMQLJ_aonOidiBM2f90Es2jQ7FfD6RXV4URG5OlcRBhJtVIztNA&lib=MRM0HZ0153TD_AdZUnIivUxy_24_rZK5a';
        if ( file_get_contents( $url ) ) {
          $data = mb_convert_encoding( file_get_contents( $url ), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
          $json_decode = json_decode($data, true);
          return $json_decode;
        }
      }
      function get_food_data() {
        $url = 'https://script.googleusercontent.com/macros/echo?user_content_key=8M8cDXXeyVP4Ev8AOmT8RxxflHoutkTnir7BbxXwmRSEwqugmkC8Y3uNVpHwpBKypPcX9WcgaytU9pBUDUNktPGuySMm_Wh-m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnMsOL5C9BpDRY-M5mpxKexHDmfg0sH4SCHEn1jSmdH6i7YzXD3W0EuowoYmGzIeMlUghh3CC7hlAyedGI1bBBFuroEXrdCm8Pw&lib=MHT1O2dQR523fwwczY4y04By_24_rZK5a';
        if ( file_get_contents( $url ) ) {
          $data = mb_convert_encoding( file_get_contents( $url ), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN' );
          $json_decode = json_decode($data, true);
          return $json_decode;
        }
      }
      $lucks  = get_luck_data();
      $items  = get_item_data();
      $spots  = get_spot_data();
      $foods  = get_food_data();
      $randluck = rand(0,8);
      $lucktitle = $lucks[$randluck]["title"];
      $luckcontents = $lucks[$randluck]["content"];
      $luckcontent = explode("。",$luckcontents);
      $randall = rand(0,2);
      if ($randall == 0) {
        $bottomh = 'ラッキーアイテム';
        $randitem = rand(0,1);
        $bottomtitle = $items[$randitem]["title"];
        $itemcontents = $items[$randitem]["content"];
        $bottomcontent = explode("。",$itemcontents);
      } else if ($randall == 1) {
        $bottomh = 'ラッキースポット';
        $randspot = rand(0,1);
        $bottomtitle = $spots[$randspot]["title"];
        $spotcontents = $spots[$randspot]["content"];
        $bottomcontent = explode("。",$spotcontents);
      } else {
        $bottomh = 'ラッキーフード';
        $randfood = rand(0,1);
        $bottomtitle = $foods[$randfood]["title"];
        $foodcontents = $foods[$randfood]["content"];
        $bottomcontent = explode("。",$foodcontents);
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
            <?php echo $lucktitle; ?>
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
          <p><?php echo $bottomtitle; ?></p>
          <p>
            <?php foreach ($bottomcontent as $bottomcon){
              echo $bottomcon;
              echo '<br>';
            } ?>
          </p>
          <img src="images/mappin.png">
        </div>
      </div>
      <div id="kekkabox03" class="omikujifont">
        <a href="kekka.php">もう一度挑戦する</a>
      </div>
      <div id="kekkabox04">
        <img src="images/kaitsu_type_b.svg">
        <a href="#"><span>開通元年イベント</span><br>特設サイトはこちら</a>
        <p>9月23日･24日･25日<br>諫早市内の各会場で開催</p>
        <a href="#">おみくじアイディア募集中</a>
        <p>※こちらからの返信はございません</p>
        <p>主催：諫早市新幹線開業記念事業実行委員会</p>
        <img src="images/shinkansen_kamome_moji.svg">
      </div>
    </div>
  </div>
</div>
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