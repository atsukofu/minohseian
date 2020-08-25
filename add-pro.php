<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/reserve.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-left">
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
          <li><a href="contact/contact-new.html">お問い合わせ</a></li>
          <li>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <section>
    <h2 class="title">商品情報登録ページ</h2>
    <div class="customer-form-wrapper">
    <form method="post" action="add-pro-check.php" enctype="multipart/form-data">
      <p class="form-introduction">商品名</p>
      <input type="text" name="name" style="width:300px"><br/>
      <p class="form-introduction">商品説明文</p>
      <textarea name="content" cols="60" rows="5"></textarea>
      <p class="form-introduction">糖度</p>
      <input type="text" name="brix" style="width: 200px;"><br/>
      <p class="form-introduction">商品規格</p>
      <input type="text" name="weight" style="width: 200px;"><br/>    
      <p class="form-introduction">保存方法</p>
      <input type="text" name="preserve" style="width: 200px;"><br/>
      <p class="form-introduction">賞味期限</p>
      <input type="text" name="expir" style="width: 200px;"><br>
      <p class="form-introduction">画像の選択</p>
      <input type="file" name="image" style="width: 400px;"><br />
      <br/>
      <input type="button" onclick="history.back()" value="戻る" class="submit-btn">
      <input type="submit" value="登録" class="submit-btn">
    </form>
  </div>
</section>
<div class="footer">
  <div class="footer-top">
    <ul class="footer-list">
      <li><a href="/minohseian/index.html">HOME</a></li>
      <li><a href="#">会社概要</a></li>
      <li><a href="/minohseian/product/pro-index.php">商品紹介</a></li>
      <li><a href="/minohseian/reserve/new-reserve.php">和菓子教室</a></li>
      <li><a href="/minohseian/contact/contact-new.html">お問い合わせ</a></li>
      <li><a href="#">STAFF</a></li>
    </ul>
    <div class="footer-company-wrapper">
      <img src="images/footer_logo.png" class="footer-logo">
      <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
    </div>
    </div>
  <div class="footer-bottom">
    Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
  </div>
</div>
</body>
</html>