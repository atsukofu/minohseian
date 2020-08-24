<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/reserve.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-left">
      <p class="header-text">大阪北部の箕面市で100年愛されるあんこやさんです。</p>
      <img src="../images/logo.png" class="header-logo">
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
  <h1 class="title">お客様上情報入力ページ</h1>
  <div class="customer-form-wrapper">
    <?php
      $year = $_GET['year'];
      $month = $_GET['month'];
      $day = $_GET['day'];
      print '<p class="reserve-date">ご予約日:';
      print ''.$year.'年'.$month.'月'.$day.'日 14:00〜';
      print '</p>';
    ?>
    <p class="form-introduction">人数を入力してください(1名〜5名)</p>
    <form method="POST" action="reserve-check.php">
    <select name="people">
    <?php
      for($i = 1; $i <= 5; $i++){
        print '<option name="people" value="'.$i.'"';
        print '>'.$i.'</option>';
      }
    ?>
    </select>
    <p class="form-introduction">お名前を入力してください</p>
    <input type="text" name="name">
    <p class="form-introduction">電話番号を入力してください(ハイフン不要)</p>
    <input type="text" name="tel"><br/><br/>
    <?php
    print '<input type="hidden" name="year" value="'.$year.'">';
    print '<input type="hidden" name="month" value="'.$month.'">';
    print '<input type="hidden" name="day" value="'.$day.'">';
    ?>
    <input type="submit" value="予約する">
    </form>
  </div>
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
      <img src="../images/footer_logo.png" class="footer-logo">
        <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
      </div>
      </div>
    <div class="footer-bottom">
      Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
    </div>
  </div>

</body>
</html>