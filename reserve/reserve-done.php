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
  <h1 class="reserve-title">ご予約ありがとうございます。</h1>
  <div class="customer-form-wrapper">
    <?php
    try{
      $reserve_date = $_POST['reserve_date'];
      $people = $_POST['people'];
      $name = $_POST['name'];
      $tel = $_POST['tel'];

      $reserve_date = htmlspecialchars($reserve_date,ENT_QUOTES,'UTF-8');
      $people = htmlspecialchars($people,ENT_QUOTES,'UTF-8');
      $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
      $tel = htmlspecialchars($tel,ENT_QUOTES,'UTF-8');

      
      $dsn ='mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql = 'INSERT INTO reservations(reserve_date,people,name,tel) VALUES (?,?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $reserve_date;
      $data[] = $people;
      $data[] = $name;
      $data[] = $tel;
      $stmt->execute($data);

      $dbh = null;

      print '<p class="reserve-confirm">';
      print $name;
      print "様 ご予約ありがとうございます！<br /><br/>";
      print "料金は当日現金またはクレジットカード払いにて承ります。<br /><br/>";
      print "キャンセルされる場合は、2日前までにメールフォーム<br/><br/>またはお電話にてご連絡いただきますよう、よろしくお願いいたします。<br /><br/>";
      print '<a href="../index.html" class="backlink">';
      print 'トップページへ戻る';
      print '</a>';
      print '</p>';

    } catch(Exception $e) {
      print 'ただいま障害により大変ご迷惑をおかけしております。';
      exit();
      print '<a href="new-reserve.php">';
      print '予約申込みページへ戻る';
      print '</a>';
    }
    ?>
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
