<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
</head>
<body>
  <header>
    <?php include( dirname(__FILE__) . "/modules/header.html"); ?>
    <!-- <div class="header-left">
      <p class="header-text">大阪北部の箕面市で100年愛されるあんこやさんです。</p>
      <img src="images/logo.png" class="header-logo">
    </div>
    <div class="header-right">
      <div class="header-tel">
        <i class="fas fa-phone-volume"></i>
        <span class="telnumber">072-014-085</span>
        <p class="business-time">月〜金 9:00~18:00</p>
      </div>
      <div class="header-menu">
        <ul class="menu-list">
          <li><a href="#">会社概要</a></li>
          <li><a href="product/pro-index.php">商品紹介</a></li>
          <li><a href="reserve/new-reserve.php">和菓子教室</a></li>
          <li><a href="contact/contact-new.php">お問い合わせ</a></li>
          <li>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
          </li>
        </ul>
      </div>
    </div> -->
  </header>
  <section class="page-top">
    <div class="top-slider">
      <img src="images/main1.png" class="main1">
    </div>
    <div>
      <ul class="dots">
        <li class="dot">・</li>
        <li class="dot">・</li>
        <li class="dot">・</li>
      </ul>
    </div>
    <div class="product-info">
      <h2 class="product-info__title">商品紹介</h2>
      <div class="product-info__image">画像</div>
      <a href="product/pro-index.php" class="product-info__link">商品紹介ページへ</a>
    </div>
    <div class="handmade-wrapper">
      <div class="handmade-info">
        <div class="handmade-info__content">
          <h2 class="handmade-title">手作り和菓子教室</h2>
          <div class="handmade-introduction">
            毎週土曜日に<br/>
            手作り和菓子教室を開催しています。<br/>
            ご家族やお友達をお誘い合わせの上、<br/>
            ぜひご参加ください。<br/>
            お一人様での参加も大歓迎です。<br/>
          </div>
          <a href="reserve/new-reserve.php" class="handmade-link">手作り和菓子教室についてはこちら</a>
        </div>
        <div class="handmade-info__flame">
          <img src="images/cooking.png" class="handmade-info__flame--image">
        </div>
      </div>
    </div>
    <div class="oem-wrapper">
      <div class="oem-info">
        <div class="oem-info__flame">
          <img src="images/azuki-beans.png" class="oem-info__flame--image">
        </div>
        <div class="oem-info__content">
          <h2 class="oem-title">オーダーメイド製品<br/>お作りします</h2>
          <div class="oem-introduction">
            小ロット(500kg)から<br/>
            オーダーメイド製品の製造を承っております。<br/>
            季節のあんこの製造も、ぜひご相談ください。
          </div>
          <a href="contact/contact-new.php" class="oem-link">お問い合わせはこちら</a>
        </div>
      </div>
    </div>
  </section>
  <div class="footer">
    <?php include( dirname(__FILE__) . "/modules/header.html"); ?>
    <!-- <div class="footer-top">
      <ul class="footer-list">
        <li><a href="/index.html">HOME</a></li>
        <li><a href="#">会社概要</a></li>
        <li><a href="/product/pro-index.php">商品紹介</a></li>
        <li><a href="/reserve/new-reserve.php">和菓子教室</a></li>
        <li><a href="/minohseian/contact/contact-new.php">お問い合わせ</a></li>
        <li><a href="#">STAFF</a></li>
      </ul>
      <div class="footer-company-wrapper">
        <img src="images/footer_logo.png" class="footer-logo">
        <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
      </div>
      </div>
    <div class="footer-bottom">
      Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
    </div> -->
  </div>
  </body>
</html>
